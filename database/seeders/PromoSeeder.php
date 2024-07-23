<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promo;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promos = [
            [
                'image' => 'promo1.jpg',
                'shop_id' => 1,
                'old_price' => 100,
                'new_price' => 80,
                'description' => 'Promotion description for Shop 1'
            ],
            [
                'image' => 'promo2.jpg',
                'shop_id' => 2,
                'old_price' => 200,
                'new_price' => 150,
                'description' => 'Promotion description for Shop 2'
            ],
            [
                'image' => 'promo3.jpg',
                'shop_id' => 3,
                'old_price' => 300,
                'new_price' => 250,
                'description' => 'Promotion description for Shop 3'
            ],
            [
                'image' => 'promo4.jpg',
                'shop_id' => 4,
                'old_price' => 400,
                'new_price' => 350,
                'description' => 'Promotion description for Shop 4'
            ],
            [
                'image' => 'promo5.jpg',
                'shop_id' => 5,
                'old_price' => 500,
                'new_price' => 450,
                'description' => 'Promotion description for Shop 5'
            ],
            [
                'image' => 'promo6.jpg',
                'shop_id' => 6,
                'old_price' => 600,
                'new_price' => 500,
                'description' => 'Promotion description for Shop 6'
            ],
            [
                'image' => 'promo7.jpg',
                'shop_id' => 7,
                'old_price' => 700,
                'new_price' => 600,
                'description' => 'Promotion description for Shop 7'
            ],
            [
                'image' => 'promo8.jpg',
                'shop_id' => 8,
                'old_price' => 800,
                'new_price' => 700,
                'description' => 'Promotion description for Shop 8'
            ],
            [
                'image' => 'promo9.jpg',
                'shop_id' => 9,
                'old_price' => 900,
                'new_price' => 800,
                'description' => 'Promotion description for Shop 9'
            ],
            [
                'image' => 'promo10.jpg',
                'shop_id' => 10,
                'old_price' => 1000,
                'new_price' => 900,
                'description' => 'Promotion description for Shop 10'
            ]
        ];

        foreach ($promos as $promoItem)
        {
            Promo::create($promoItem);
        }

    }
}
