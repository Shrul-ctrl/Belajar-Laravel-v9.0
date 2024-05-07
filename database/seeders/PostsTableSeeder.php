<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
['title'=>'Tips Cepat kaya', 'content'=>'Menabung'],
['title'=>'Haruskah masuk surga', 'content'=>'perbanyak ibadah'],
['title'=>'Membangun rumah', 'content'=>'butuh tukang']
];
// masukkan data ke database
DB::table('posts')->insert($posts);
    }
}
