<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['barang_id'=> 1 , 'pembeli_id'=> 1  , 'jumlah'=> 10  , 'tanggal'=> '2024/04/13'],
            ['barang_id'=> 3 , 'pembeli_id'=> 3  , 'jumlah'=> 20  , 'tanggal'=> '2024/04/13'],
            ['barang_id'=> 1 , 'pembeli_id'=> 1  , 'jumlah'=> 30  , 'tanggal'=> '2024/04/13'],
            ['barang_id'=> 2 , 'pembeli_id'=> 2  , 'jumlah'=> 40  , 'tanggal'=> '2024/04/13'],
            ['barang_id'=> 2 , 'pembeli_id'=> 2  , 'jumlah'=> 50  , 'tanggal'=> '2024/04/13'],
            ['barang_id'=> 3 , 'pembeli_id'=> 3  , 'jumlah'=> 60  , 'tanggal'=> '2024/04/13']
            ];
            // masukkan data ke database
            DB::table('transaksis')->insert($transaksis);
    }
}
