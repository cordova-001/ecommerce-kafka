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
        $image_path = 'images/product/lg-a.jpg';
        // torage::url($image_path)
        $products = [
            [
            'product_name' => 'Classy Modern Smart watch',
            'category' => 'Watch',
            'description' => 'I must explain to you how ',
            'price' => '24,000',
            'quantity' => '20',
            'image' => 'images/product/lg-a.jpg',
            ],
            [
            'product_name' => 'White Vintage telephone',
            'category' => 'Phone',
            'description' => 'I must explain to you how ',
            'price' => '24,000',
            'quantity' => '20',
            'image' => 'images/product/lg-b.jpg',
            ],
            [
            'product_name' => 'Black Wireless Headphones',
            'category' => 'phone',
            'description' => 'I must explain to you how ',
            'price' => '78,000',
            'quantity' => '20',
            'image' => 'images/product/lg-c.jpg',
            ],
            [
            'product_name' => 'Modular Smartest Watch',
            'category' => 'Watch',
            'description' => 'I must explain to you how ',
            'price' => '240,000',
            'quantity' => '20',
            'image' => 'images/product/lg-d.jpg',
            ],

            [
            'product_name' => 'White Wireless Headphones',
            'category' => 'Watch',
            'description' => 'I must explain to you how ',
            'price' => '50,000',
            'quantity' => '20',
            'image' => 'images/product/lg-e.jpg',
            ],
            [
            'product_name' => 'Black Android Phone',
            'category' => 'Phone',
            'description' => 'I must explain to you how ',
            'price' => '180,000',
            'quantity' => '20',
            'image' => 'images/product/lg-f.jpg',
            ],
            [
            'product_name' => 'odern Smart watch',
            'category' => 'phone',
            'description' => 'I must explain to you how ',
            'price' => '100,000',
            'quantity' => '20',
            'image' => 'images/product/lg-h.jpg',
            ],
            [
            'product_name' => 'Modular Smart Watch',
            'category' => 'Watch',
            'description' => 'I must explain to you how ',
            'price' => '240,000',
            'quantity' => '20',
            'image' => 'images/product/lg-g.jpg',
            ],
        ];

        foreach ($products as $productData)
        {
          Product::create($productData);
        }
    }
}
