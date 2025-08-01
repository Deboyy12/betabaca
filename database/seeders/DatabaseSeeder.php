<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    // Admin default
    User::create([
        'name' => 'adminbeta',
        'email' => 'admin@betabaca.com',
        'password' => Hash::make('betabaca'),
        'role' => 'admin'
    ]);
}
}
