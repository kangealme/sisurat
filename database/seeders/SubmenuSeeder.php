<?php

namespace Database\Seeders;

use App\Models\Submenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $submenus = [
            [
                'menu_id' => 1,
                'name' => 'Daftar Pengguna',
                'desc' => 'Submenu daftar pengguna'
            ],
            [
                'menu_id' => 2,
                'name' => 'Masuk',
                'desc' => 'Menu Surat Masuk',
            ],
            [
                'menu_id' => 2,
                'name' => 'Keluar',
                'desc' => 'Menu Surat Keluar',
            ],
        ];

        foreach($submenus as $submenu)
        {
            Submenu::create($submenu);
        }
    }
}
