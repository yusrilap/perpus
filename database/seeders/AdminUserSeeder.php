<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin Perpus',
            'email' => 'admin@perpus.test',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
