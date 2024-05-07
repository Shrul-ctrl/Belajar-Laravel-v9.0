<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=>'upin', 'jenis_kelamin'=>'L', 'alamat'=>'kampong durian runtuh', 'agama'=>'islam', 'telepon'=>628394943, 'email'=>'upin@gmail.com'],
            ['nama'=>'ipin', 'jenis_kelamin'=>'L', 'alamat'=>'kampong durian runtuh', 'agama'=>'kristen', 'telepon'=>628934494, 'email'=>'ipin@gmail.com'],
            ['nama'=>'mail', 'jenis_kelamin'=>'P', 'alamat'=>'kampong durian runtuh', 'agama'=>'kristen', 'telepon'=>623294394, 'email'=>'mail@gmail.com'],
            ['nama'=>'bjit', 'jenis_kelamin'=>'P', 'alamat'=>'kampong durian runtuh', 'agama'=>'islam', 'telepon'=>629342974, 'email'=>'jarjit@gmail.com'],
            ['nama'=>'isan', 'jenis_kelamin'=>'L', 'alamat'=>'kampong durian runtuh', 'agama'=>'islam', 'telepon'=>624382944, 'email'=>'isan@gmail.com'],
            ['nama'=>'ijat', 'jenis_kelamin'=>'L', 'alamat'=>'kampong durian runtuh', 'agama'=>'buddha', 'telepon'=>624779328, 'email'=>'ijat@gmail.com'],
            ['nama'=>'rajo', 'jenis_kelamin'=>'P', 'alamat'=>'kampong durian runtuh', 'agama'=>'buddha', 'telepon'=>627393294, 'email'=>'rajoo@gmail.com'],
            ['nama'=>'apin', 'jenis_kelamin'=>'L', 'alamat'=>'kampong durian runtuh', 'agama'=>'islam', 'telepon'=>624462994, 'email'=>'apin@gmail.com'],
            ['nama'=>'udin', 'jenis_kelamin'=>'P', 'alamat'=>'kampong durian runtuh', 'agama'=>'islam', 'telepon'=>623543992, 'email'=>'udin@gmail.com'],
            ['nama'=>'asep', 'jenis_kelamin'=>'L', 'alamat'=>'kampong durian runtuh', 'agama'=>'kristen', 'telepon'=>623249984, 'email'=>'aseo@gmail.com']
    
            ];
            // masukkan data ke database
            DB::table('siswas')->insert($siswas);
    }
}
