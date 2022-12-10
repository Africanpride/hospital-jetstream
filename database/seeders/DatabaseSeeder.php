<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'firstName' => 'Kwame',
            'lastName' => 'Opoku',
            'email' => 'johnwelsh19@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123Ghana'),
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(10)->create();

    }
}
