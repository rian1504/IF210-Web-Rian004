<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function showProduk()
    {
        $data = Produk::get();
        foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
        }
        return view("list_produk", compact('nama', 'desc', 'harga'));
    }

    public function simpan(Request $request)
    {
        $produk = new Produk;
        $produk->nama = $request->input("nama");
        $produk->deskripsi = $request->input("deskripsi");
        $produk->harga = $request->input("harga");
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
