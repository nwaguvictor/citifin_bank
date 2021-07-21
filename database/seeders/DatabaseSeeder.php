<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create();
        \App\Models\User::create([
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'email' => 'testuser@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'account_number' => '2019123456',
            'balance' => 10000,
            'dob' => date('Y-m-d'),
            'phone' => '07020001111',
            'ssn' => '100011110',
            'status' => 'ACTIVATED',
        ]);
    }
}
