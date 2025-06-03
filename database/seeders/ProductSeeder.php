<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @author madhu
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => $faker->word . ' Product',
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 500),
                'stock_quantity' => $faker->numberBetween(1, 100),
            ]);
        }
    }
} 
