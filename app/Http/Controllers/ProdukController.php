<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function menampilkan(){
        $produks = Product::all();
   return view('produks/produks', compact('produks'));
    }

    public function show($id){
        $produks = Product::findOrFail($id);
        return view('produks/show', compact('produks'));    
    }
    
    
}
