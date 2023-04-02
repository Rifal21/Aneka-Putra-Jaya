<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
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
        Produk::factory(200)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rifal Kurniawan',
            'username' => 'falkur21',
            'email' => 'falkur@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('falkur21')
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);
        Category::create([
            'name' => 'Cosmetics',
            'slug' => 'cosmetics'
        ]);
        Category::create([
            'name' => 'Furniture',
            'slug' => 'furniture'
        ]);
        Category::create([
            'name' => 'Hijab',
            'slug' => 'hijab'
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