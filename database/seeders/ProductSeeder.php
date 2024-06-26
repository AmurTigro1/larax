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
        $products = [
            [
                'name' => 'Monstera',
                'description' => 'This is a Monstera Plant ',
                'price' => 100.00,
                'imageURL' => 'https://i.pinimg.com/236x/71/57/21/715721cef5bcf33a255a0b5480e27d1e.jpg',
                'quantity' => 1,
                
            ],
            [
                'name' => 'cactus',
                'description' => 'This is a Cactus Plant',
                'price' => 300.00,
                'imageURL' => 'https://i.pinimg.com/236x/a0/ea/3d/a0ea3d36f8b3b3df62930934b1f1248f.jpg',
                'quantity' => 2,
            ],
            [
                'name' => 'Snake Plant',
                'description' => 'This is a Snake Plant',
                'price' => 500.00,
                'imageURL' => 'https://i.pinimg.com/236x/36/9a/d5/369ad5cade297f440bec64535fb4edb1.jpg',
                'quantity' => 3,
            ],
            [
                'name' => 'Plumusa fern',
                'description' => 'This is a Plumusa Fern Plant',
                'price' => 1000.00,
                'imageURL' => 'https://i.pinimg.com/236x/a5/63/25/a5632595005f0e0e7dfebdfc8afe5d39.jpg',
                'quantity' => 4,
            ],
            [
                'name' => 'Caropapier',
                'description' => 'This is a Caropapier Plant',
                'price' => 1000.00,
                'imageURL' => 'https://i.pinimg.com/474x/8f/08/bc/8f08bc9d7d8326d4dc2850b589bc203f.jpg',
                'quantity' => 5,
            ],
            [
                'name' => 'Pilea Peperomioides',
                'description' => 'This is Pilea Peperomioides Plant',
                'price' => 1000.00,
                'imageURL' => 'https://i.pinimg.com/236x/a5/63/25/a5632595005f0e0e7dfebdfc8afe5d39.jpg',
                'quantity' => 6,
            ],
        ];
    
        foreach($products as $product) {
            Product::create($product);
        }
        
    }
    
}
