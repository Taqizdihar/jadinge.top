<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun ADMIN
        User::updateOrCreate(
            ['email' => 'admin@telkomads.com'],
            [
                'name' => 'admin',
                'username' => 'admin',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );

        // 2. Akun USER DUMMY
        User::updateOrCreate(
            ['email' => 'dummy@example.com'],
            [
                'name' => 'Dummy User',
                'username' => 'dummy',
                'password' => Hash::make('password123'), // Password yang kamu mau
                'role' => 'client',
            ]
        );
    }
}