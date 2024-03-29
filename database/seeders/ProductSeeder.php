<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->create([
            "name" => "Celular 1",
            "price" => 1.800,
            "description" => "Lorenzo Ipsulum"
        ]);

        Product::factory()->create([
            "name" => "Celular 2",
            "price" => 3.200,
            "description" => "Lorem ipsum dolor"
        ]);

        Product::factory()->create([
            "name" => "Celular 3",
            "price" => 9.800,
            "description" => "Lorem ipsum dolor sit amet"
        ]);
    }
}
