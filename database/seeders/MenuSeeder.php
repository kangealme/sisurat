<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'role_id' => 1,
                'name' => 'Pengguna',
                'desc' => 'Menu Pengguna'
            ],
            [
                'role_id' => 1,
                'name' => 'Surat',
                'desc' => 'Menu Surat'
            ],
            [
                'role_id' => 2,
                'name' => 'Surat',
                'desc' => 'Menu Surat'
            ],
        ];

        foreach($menus as $menu)
        {
            Menu::create($menu);
        }
    }
}
