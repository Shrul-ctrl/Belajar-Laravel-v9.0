<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merek;

class MerekController extends Controller
{
    public function menampilkan(){
        $mereks = Merek::all();
   return view('mereks/mereks', compact('mereks'));
    }

    public function show($id){
        $mereks = Merek::findOrFail($id);
        return view('mereks/show', compact('mereks'));
    }

}
