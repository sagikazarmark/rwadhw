<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Aladár',
            'email' => 'admin@rwadhw.sagikazarmark.hu',
            'email_verified_at' => now(),
            'password' => Hash::make('symfonyftw123**'),
            'role' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'User Ubul',
            'email' => 'user@rwadhw.sagikazarmark.hu',
            'email_verified_at' => now(),
            'password' => Hash::make('symfonyftw123**'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Guest Gábor',
            'email' => 'guest@rwadhw.sagikazarmark.hu',
            'email_verified_at' => now(),
            'password' => Hash::make('symfonyftw123**'),
            'role' => 2,
        ]);
    }
}
