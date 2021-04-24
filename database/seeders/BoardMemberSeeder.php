<?php

namespace Database\Seeders;

use App\Models\BoardMember;
use Illuminate\Database\Seeder;

class BoardMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BoardMember::factory(5)->create();
    }
}
