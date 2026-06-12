<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Gelang Manik Maroon Berry',
            'slug' => 'gelang-manik-maroon-berry',
            'description' => 'Gelang manik-manik estetik bernuansa maroon dengan kombinasi beads premium.',
            'price' => 15000,
            'stock' => 20,
            'image' => 'gelang_maroon.jpg',
        ]);

        Product::create([
            'name' => 'Kalung Beads Daisy Chain',
            'slug' => 'kalung-beads-daisy-chain',
            'description' => 'Kalung manik cantik dengan motif bunga daisy yang cocok untuk style harian.',
            'price' => 25000,
            'stock' => 15,
            'image' => 'kalung_daisy.jpg',
        ]);

        Product::create([
            'name' => 'Cincin Manik Pastel Set',
            'slug' => 'cincin-manik-pastel-set',
            'description' => 'Satu set cincin manik-manik elastis dengan perpaduan warna pastel yang menggemaskan.',
            'price' => 8000,
            'stock' => 30,
            'image' => 'cincin_pastel.jpg',
        ]);
    }
}