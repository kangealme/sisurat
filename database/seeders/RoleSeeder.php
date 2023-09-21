<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'user_id' => 1,
                'name' => 'Admin',
                'desc' => 'Admin Sistem'
            ],
            [
                'user_id' => 2,
                'name' => 'Pengguna',
                'desc' => 'Pengguna Sistem'
            ],
        ];

        foreach($roles as $role)
        {
            Role::create($role);
        }
    }
}
