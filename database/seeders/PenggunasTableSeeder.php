<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Penggunas = [
            ['nama' => 'udin'],
            ['nama' => 'odin'],
            ['nama' => 'eden']
        ];
        // masukkan data ke database
        DB::table('Penggunas')->insert($Penggunas);
    }
}
