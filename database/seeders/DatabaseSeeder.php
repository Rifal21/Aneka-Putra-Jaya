<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Outlet;
use App\Models\User;
use App\Models\Produk;
use App\Models\RoleUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Produk::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
            'no_hp' => '9999999999',
            'password' => bcrypt('admin')
        ]);


        // Outlet::create([
        //     'name_outlet' => 'Asem Kidul Ciawi',
        //     'slug' => 'asem-kidul-ciawi'
        // ]);
        // Outlet::create([
        //     'name_outlet' => 'Malangbong',
        //     'slug' => 'malangbong'
        // ]);
        Outlet::create([
            'name_outlet' => 'Tasikmalaya',
            'slug' => 'tasikmalaya'
        ]);
        Category::create([
            'name' => 'Obat Warung',
            'slug' => 'obat-warung'
        ]);
        // Category::create([
        //     'name' => 'Alat Pertanian',
        //     'slug' => 'alat-pertanian'
        // ]);
        // Category::create([
        //     'name' => 'Benih Pertanian',
        //     'slug' => 'benih-pertanian'
        // ]);
        // Category::create([
        //     'name' => 'Pupuk Tunggal',
        //     'slug' => 'pupuk-tunggal'
        // ]);
        // Category::create([
        //     'name' => 'Pupuk Majemuk',
        //     'slug' => 'pupuk-majemuk'
        // ]);
        // Category::create([
        //     'name' => 'Pupuk Solulable',
        //     'slug' => 'pupuk-solulable'
        // ]);
        RoleUser::create([
            'name_role' => 'admin',
        ]);
        RoleUser::create([
            'name_role' => 'manajer',
        ]);
        RoleUser::create([
            'name_role' => 'pegawai',
        ]);
        RoleUser::create([
            'name_role' => 'pengguna',
        ]);
    }
}
