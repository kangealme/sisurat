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
                'fa_icon' => 'fa fa-list',
                'desc' => 'Submenu daftar pengguna'
            ],
            [
                'menu_id' => 1,
                'name' => 'Tambah Pengguna',
                'fa_icon' => 'fas fa-user-plus',
                'desc' => 'Submenu Tambah daftar pengguna'
            ],
            [
                'menu_id' => 2,
                'name' => 'Masuk',
                'fa_icon' => 'fa fa-envelope-open',
                'desc' => 'Menu Surat Masuk',
            ],
            [
                'menu_id' => 2,
                'name' => 'Keluar',
                'fa_icon' => 'far fa-envelope',
                'desc' => 'Menu Surat Keluar',
            ],
        ];

        foreach($submenus as $submenu)
        {
            Submenu::create($submenu);
        }
    }
}
