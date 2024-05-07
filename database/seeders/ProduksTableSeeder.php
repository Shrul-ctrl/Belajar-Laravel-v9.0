<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'iphone 11 pro max','jumlah' => '15', 'tanggal_produksi' => '20-08-10', 'id_merek'=> 1],
            ['nama_produk' => 'iphone 14 pro',    'jumlah' => '15', 'tanggal_produksi' => '20-08-10', 'id_merek'=> 2],
            ['nama_produk' => 'samsung flip',     'jumlah' => '10', 'tanggal_produksi' => '19-08-10', 'id_merek'=> 3],
            ['nama_produk' => 'samsung rog',      'jumlah' => '30', 'tanggal_produksi' => '19-08-10', 'id_merek'=> 4],
            ['nama_produk' => 'vivo max',         'jumlah' => '30', 'tanggal_produksi' => '19-08-10', 'id_merek'=> 5],
            ['nama_produk' => 'vivo',             'jumlah' => '10', 'tanggal_produksi' => '09-08-10', 'id_merek'=> 6]
        ];
        // masukkan data ke database
        DB::table('produks')->insert($produks);
    }
}
