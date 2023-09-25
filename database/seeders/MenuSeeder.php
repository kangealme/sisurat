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
                'fa_icon' => 'fas fa-users',
                'desc' => 'Menu Pengguna'
            ],
            [
                'role_id' => 2,
                'name' => 'Surat',
                'fa_icon' => 'fas fa-mail-bulk',
                'desc' => 'Menu Surat'
            ],
        ];

        foreach($menus as $menu)
        {
            Menu::create($menu);
        }
    }
}
