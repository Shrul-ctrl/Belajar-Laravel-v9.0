<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Telepons = [
            ['nomer_telepon' => '08756412892', 'pengguna_id' => 1],
            ['nomer_telepon' => '09786725374', 'pengguna_id' => 2],
            ['nomer_telepon' => '02839128882', 'pengguna_id' => 3],
        ];
        // masukkan data ke database
        DB::table('Telepons')->insert($Telepons);
    }
}
