<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function formLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $Login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($Login)) {
            if (Auth::user()->role == 'admin') {
                return redirect('home');
            } else if(Auth::user()->role == 'petugas') {
                return redirect('home');
            } else {
                return redirect('home');
            }
        } else {
            return redirect('')->withErrors('Username yang anda masukkan tidak sesuai');
        }
    }

    public function user() {
        $buku = Buku::all();
        $kategori = KategoriBuku::all();
        if (Auth::id()) {
            $role = Auth::user()->role;
            if ($role == 'admin') {
                return view('admin.admin', compact('buku','kategori'));
            } elseif ($role == 'petugas') {
                return view('petugas.petugas',compact('buku','kategori'));
            } else {
                return view('users.peminjam', compact('buku','kategori'));
            }
        }
    }

    public function formRegister() {
        return view('register');
    }

    public function register(Request $request) {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->namaLengkap = $request->namaLengkap;
        $user->alamat = $request->alamat;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('');
    }

    public function logout() {
        Auth::logout();
        return redirect('');
    }


    public function dataPinjam() {
        $date = Carbon::now()->toDateString();
        $pinjam = Peminjaman::with(['user', 'buku'])->where('UserId', Auth::user()->id)->get();
        return view('users.bukuPinjam', compact('pinjam', 'date'));
        // dd($pinjam);
    }

    public function tambahUser(Request $request) {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->namaLengkap = $request->namaLengkap;
        $user->alamat = $request->alamat;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('home');
    }


}
