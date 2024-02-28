<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\KategoriBukuRelasi;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function formCreate() {
        return view('create');
    }

    public function create(Request $request) {
        $buku = new Buku();

        $buku->Judul = $request->Judul;
        $buku->Penulis = $request->Penulis;
        $buku->Penerbit = $request->Penerbit;
        $buku->TahunTerbit = $request->TahunTerbit;

        $buku->save();
        return redirect('home');
    }

    public function formUpdate($id) {
        $buku = Buku::find($id);
        return view('update',compact('buku'));
    }
    public function update(Request $request, $id) {
        $buku = Buku::find($id);

        $buku->Judul = $request->Judul;
        $buku->Penulis = $request->Penulis;
        $buku->Penerbit = $request->Penerbit;
        $buku->TahunTerbit = $request->TahunTerbit;

        $buku->save();
        return redirect('home');
    }

    public function delete($id) {
        $buku = Buku::find($id);

        $buku->delete();
        return redirect('home');
    }

    public function kategori(Request $request) {
        $kategori = new KategoriBuku();

        $kategori->NamaKategori = $request->NamaKategori;
        $kategori->save();
        return redirect('home');
    }

    public function kategoriBuku(Request $request, $id) {
        $kategoriBuku = new KategoriBukuRelasi();

        $kategoriBuku->BukuId = $request->BukuId;
        $kategoriBuku->KategoriId = $request->KategoriId;

        $kategoriBuku->save();
        return redirect('home');
    }

    public function daftarKategoriBuku() {
        $data = KategoriBukuRelasi::with(['buku' , 'kategori']);
        return view('daftarKategoriBuku', compact('data'));
    }


}
