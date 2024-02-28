<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\Peminjaman;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\Queue\Jobs\RedisJob;

class PeminjamanController extends Controller
{
    public function formPinjam($id) {
        $buku = Buku::find($id);
        $date = Carbon::now()->toDateString();
        $dateBack = Carbon::now()->addDay(3)->toDateString();

        return view('users.formPinjam', compact('buku','date', 'dateBack'));
    }

    public function pinjam(Request $request, $id) {
        $buku = Buku::findOrFail($request->BukuId)->only('status');

        if ($buku['status'] != 'available') {
            session()->flash('message', 'Buku tidak bisa dipinjam');
            session()->flash('alert-class', 'alert-danger');
            return redirect('home');
        } else {
            $count = Peminjaman::where('UserId', $request->UserId)->where('TanggalPengembalian', null)->count();

            if ($count >= 3) {
                session()->flash('message', 'Limit jumlah peminjaman buku telah tercapai');
                session()->flash('alert-class', 'alert-warning');
                return redirect('home');
            } else {
                try {
                    DB::beginTransaction();
                    // insert ke table peminjaman
                    Peminjaman::create($request->all());
                    // update ke data buku
                    $buku = Buku::findOrFail($request->BukuId);
                    // dd($request);
                    $buku->status = 'not available';
                    $buku->save();

                    DB::commit();
                    session()->flash('messsage', 'Berhasil Meminjam Buku');
                    session()->flash('alert-class', 'alert-success');
                    return redirect('home');

                } catch (\Throwable $th) {
                    //throw $th;
                    DB::rollBack();
                    dd($th);
                }
            }
        }
    }

    public function formKembali(Request $request, $id) {
            $pinjam = Peminjaman::with(['buku'])->find($id);
            $date = Carbon::now()->toDateString();
            return view('users.formKembali', compact('pinjam','date'));
    }

    public function kembali (Request $request, $id) {
        
    }

}
