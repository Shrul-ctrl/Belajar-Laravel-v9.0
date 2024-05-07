<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            ['id_barang'=>1, 'id_pembeli'=>1 , 'jumlah'=>1 , 'tanggal'=> '1870-24-13'],
            ['id_barang'=>2, 'id_pembeli'=>2 , 'jumlah'=>2 , 'tanggal'=> '1870-24-13'],
            ['id_barang'=>3, 'id_pembeli'=>3 , 'jumlah'=>3 , 'tanggal'=> '1870-24-13'],
            ['id_barang'=>4, 'id_pembeli'=>4 , 'jumlah'=>4 , 'tanggal'=> '1870-24-13'],
            ['id_barang'=>5, 'id_pembeli'=>5 , 'jumlah'=>5 , 'tanggal'=> '1870-24-13'],
            ['id_barang'=>6, 'id_pembeli'=>6 , 'jumlah'=>6 , 'tanggal'=> '1870-24-13']
            ];
            // masukkan data ke database
            DB::table('transaksis')->insert($transaksis);
    }
}
