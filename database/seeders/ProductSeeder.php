<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define your sample data
        $products = [
            [
                'name' => 'Product 1',
                'handle' => 'product-1',
                'price' => 10.99,
                'currency' => 'INR',
                'description' => 'Sample description for Product 1',
            ],
            [
                'name' => 'Product 2',
                'handle' => 'product-2',
                'price' => 19.99,
                'currency' => 'INR',
                'description' => 'Sample description for Product 2',
            ],
            [
                'name' => 'Product 3',
                'handle' => 'product-3',
                'price' => 39.99,
                'currency' => 'INR',
                'description' => 'Sample description for Product 3',
            ],
            [
                'name' => 'Product 4',
                'handle' => 'product-4',
                'price' => 29.99,
                'currency' => 'INR',
                'description' => 'Sample description for Product 4',
            ],

            // Add more sample products as needed
        ];

        // Insert the sample data into the "products" table
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
