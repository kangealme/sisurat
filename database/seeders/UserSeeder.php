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
        $users = [
            [
                'name' => 'Muhammad Bahrul Ilmi',
                'username' => 'kangealme',
                'email' => 'kangealme@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Doddy Kuswono',
                'username' => 'dodikus',
                'email' => 'dodikus@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Qoyyim Faddly',
                'username' => 'qoy',
                'email' => 'qoy@gmail.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
