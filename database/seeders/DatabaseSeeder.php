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
            'name' => 'Rifal Kurniawan',
            'username' => 'falkur21',
            'email' => 'falkur@gmail.com',
            'role_id' => 1,
            'no_hp' => '087654234677',
            'password' => bcrypt('falkur21')
        ]);
        User::create([
            'name' => 'Rifal Kurniawan',
            'username' => 'falkur212',
            'email' => 'falkur1@gmail.com',
            'role_id' => 2,
            'no_hp' => '087654234677',
            'password' => bcrypt('falkur21')
        ]);
        User::create([
            'name' => 'Rifal Kurniawan',
            'username' => 'falkur213',
            'email' => 'falkur2@gmail.com',
            'role_id' => 3,
            'no_hp' => '087654234677',
            'password' => bcrypt('falkur21')
        ]);

        Outlet::create([
            'name_outlet' => 'Ciawi',
            'slug' => 'ciawi'
        ]);
        Outlet::create([
            'name_outlet' => 'Malangbong',
            'slug' => 'malangbong'
        ]);
        Outlet::create([
            'name_outlet' => 'Pasar Ciawi',
            'slug' => 'pasar-ciawi'
        ]);
        Category::create([
            'name' => 'Pupuk Organik',
            'slug' => 'pupuk'
        ]);
        // Category::create([
        //     'name' => 'Alat Pertanian',
        //     'slug' => 'alat-pertanian'
        // ]);
        // Category::create([
        //     'name' => 'Benih Pertanian',
        //     'slug' => 'benih-pertanian'
        // ]);
        Category::create([
            'name' => 'Pupuk Non-organik',
            'slug' => 'pupuk-non-organik'
        ]);
        Category::create([
            'name' => 'Pupuk Kimia',
            'slug' => 'pupuk-kimia'
        ]);
        Category::create([
            'name' => 'Pupuk Hidroponik',
            'slug' => 'pupuk-hidroponik'
        ]);
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
