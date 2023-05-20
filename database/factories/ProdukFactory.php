<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk' => $this->faker->word(3),
            'slug' => $this->faker->slug(),
            'category_id' => mt_rand(1,4),
            'outlet_id' => mt_rand(1,3),
            // 'gambar' => 'furniture',
            // 'user_id' => 1,
            // 'role_id' => mt_rand(1,3),
            'deskripsi' => $this->faker->paragraph(2),
            'harga' => 'Rp.'. $this->faker->randomFloat()

        ];
    }
}
