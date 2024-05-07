<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang'=>'Gelas', 'harga'=>20000, 'stock' =>20],
            ['nama_barang'=>'Piring', 'harga'=>20000, 'stock' =>20],
            ['nama_barang'=>'Sendok', 'harga'=>20000, 'stock' =>20]
            ];
            // masukkan data ke database
            DB::table('barang2s')->insert($barang2s);
    }
}
