<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function menampilkan(){
        $produks = Produk::all();
   return view('produks/produks', compact('produks'));
    }

    public function show($id){
        $produks = Produk::findOrFail($id);
        return view('produks/show', compact('produks'));
    }

}
