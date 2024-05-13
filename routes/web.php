<?php

use App\Models\Post;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Transaksi;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/post', function () {
    $post = Post::all();
   return view('tampil_post', compact('post'));
});   
   
Route::get('/siswa', function () {
    $siswa = Siswa::all();
   return view('tampil_siswa', compact('siswa'));
});  

Route::get('/pengguna', function () {
    $pengguna = Pengguna::all();
   return view('tampil_pengguna', compact('pengguna'));
});

Route::get('/telepon', function () {
    $telepon = Telepon::all();
   return view('tampil_telepon', compact('telepon'));
});

Route::get('/merek', function () {
    $merek = Merek::all();
   return view('tampil_merek', compact('merek'));
});

Route::get('/produk', function () {
    $produk = Produk::all();
   return view('tampil_produk', compact('produk'));
});

Route::get('/barang', function () {
    $data = Barang::all();
   return view('tampil_barang', compact('data'));
});

Route::get('/pembeli', function () {
    $data = Pembeli::all();
   return view('tampil_pembeli', compact('data'));
});

Route::get('/transaksi', function () {
    $data = Transaksi::all();
   return view('tampil_transaksi', compact('data'));
});

Route::get('/template', function () {
    $posts = Post::all();
   return view('template', compact('posts'));
});

Route::get('/template2', function () {
    $produk = Produk::all();
   return view('template2', compact('produk'));
});



// $siswa = Siswa::where('nama', 'like', '%ipin%')->get(); 

// $post = new Siswa;
// $post->nama = "uspe";
// $post->jenis_kelamin = "P";
// $post->alamat = "sukamenak";
// $post->agama = "protestan";
// $post->telepon = 896896757;
// $post->email = "uspe@gmail.com";
// $post->save();
// return $post;


