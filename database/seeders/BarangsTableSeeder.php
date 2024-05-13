<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Gelas', 'harga'=>20000, 'stok' =>230],
            ['nama_barang'=>'Piring', 'harga'=>20000, 'stok' =>370],
            ['nama_barang'=>'Sendok', 'harga'=>30000, 'stok' =>360]
            ];
            // masukkan data ke database
            DB::table('barangs')->insert($barangs);
    }
}
