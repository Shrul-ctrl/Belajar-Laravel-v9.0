<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
['nama'=>'Gelas', 'jumlah'=>21],
['nama'=>'Piring', 'jumlah'=>22],
['nama'=>'Sendok', 'jumlah'=>25]
];
// masukkan data ke database
DB::table('barangs')->insert($barangs);
    }
}
