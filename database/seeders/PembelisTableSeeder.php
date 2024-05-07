<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli'=>'udin', 'jenis_kelamin'=>'L'],
            ['nama_pembeli'=>'siti', 'jenis_kelamin'=>'p'],
            ['nama_pembeli'=>'asep', 'jenis_kelamin'=>'L']
            ];
            // masukkan data ke database
            DB::table('pembelis')->insert($pembelis);
    }
}
