<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Tiara Arista Hasanah',
            'username' => 'tiaraarst',
            'email' => 'test@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'job' => 'Web Developer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
