<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'JAIRO',
            'email' => 'jairo111sousa@live.com',
            'user_name' => 'jairo',
            'email_verified_at' => now(),
            'password' => '123456',
            'status_user' => true,
        ]);
    }
}
