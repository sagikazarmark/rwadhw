<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'title' => 'Team building',
            'filename' => '001.jpg',
            'user_id' => 1,
        ]);

        DB::table('photos')->insert([
            'title' => 'We are the best',
            'filename' => '002.jpg',
            'user_id' => 1,
        ]);

        DB::table('photos')->insert([
            'title' => 'Nothing like some stuff',
            'filename' => '003.jpg',
            'user_id' => 1,
        ]);

        DB::table('photos')->insert([
            'title' => 'Love this thing',
            'filename' => '004.jpg',
            'user_id' => 1,
        ]);

        DB::table('photos')->insert([
            'title' => 'Cannot do it anymore',
            'filename' => '005.jpg',
            'user_id' => 1,
        ]);
    }
}
