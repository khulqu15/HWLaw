<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin Ninno',
            'email' => 'ninno@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'verified_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
