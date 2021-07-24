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
            'lastname' => 'Test',
            'firstname' => 'User 1',
            'email' => 'testuser1@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'account_number' => '2019123456',
            'balance' => 10000,
            'dob' => date('Y-m-d'),
            'phone' => '07020001111',
            'ssn' => '100011110',
            'status' => 'ACTIVATED',
        ]);
        \App\Models\User::create([
            'lastname' => 'Test',
            'firstname' => 'User 2',
            'email' => 'testuser2@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'account_number' => '2020123456',
            'balance' => 10000,
            'dob' => date('Y-m-d'),
            'phone' => '07020001122',
            'ssn' => '100011100',
            'status' => 'ACTIVATED',
        ]);
    }
}
