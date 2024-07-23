<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shops = [
            [
                'image' => 'image1.jpg',
                'name' => 'Shop 1',
                'location' => 'Location 1',
                'city' => 'City 1',
                'delivery' => true,
                'pickup' => false,
                'whatsapp' => '1234567890',
                'description' => 'Description for Shop 1',
                'price' => 100,
                'rate' => '4.5'
            ],
            [
                'image' => 'image2.jpg',
                'name' => 'Shop 2',
                'location' => 'Location 2',
                'city' => 'City 2',
                'delivery' => false,
                'pickup' => true,
                'whatsapp' => '1234567891',
                'description' => 'Description for Shop 2',
                'price' => 200,
                'rate' => '4.0'
            ],
            [
                'image' => 'image3.jpg',
                'name' => 'Shop 3',
                'location' => 'Location 3',
                'city' => 'City 3',
                'delivery' => true,
                'pickup' => true,
                'whatsapp' => '1234567892',
                'description' => 'Description for Shop 3',
                'price' => 150,
                'rate' => '3.5'
            ],
            [
                'image' => 'image4.jpg',
                'name' => 'Shop 4',
                'location' => 'Location 4',
                'city' => 'City 4',
                'delivery' => true,
                'pickup' => true,
                'whatsapp' => '1234567893',
                'description' => 'Description for Shop 4',
                'price' => 250,
                'rate' => '4.8'
            ],
            [
                'image' => 'image5.jpg',
                'name' => 'Shop 5',
                'location' => 'Location 5',
                'city' => 'City 5',
                'delivery' => false,
                'pickup' => false,
                'whatsapp' => '1234567894',
                'description' => 'Description for Shop 5',
                'price' => 300,
                'rate' => '3.8'
            ],
            [
                'image' => 'image6.jpg',
                'name' => 'Shop 6',
                'location' => 'Location 6',
                'city' => 'City 6',
                'delivery' => true,
                'pickup' => false,
                'whatsapp' => '1234567895',
                'description' => 'Description for Shop 6',
                'price' => 100,
                'rate' => '4.2'
            ],
            [
                'image' => 'image7.jpg',
                'name' => 'Shop 7',
                'location' => 'Location 7',
                'city' => 'City 7',
                'delivery' => true,
                'pickup' => true,
                'whatsapp' => '1234567896',
                'description' => 'Description for Shop 7',
                'price' => 200,
                'rate' => '4.7'
            ],
            [
                'image' => 'image8.jpg',
                'name' => 'Shop 8',
                'location' => 'Location 8',
                'city' => 'City 8',
                'delivery' => false,
                'pickup' => true,
                'whatsapp' => '1234567897',
                'description' => 'Description for Shop 8',
                'price' => 250,
                'rate' => '4.0'
            ],
            [
                'image' => 'image9.jpg',
                'name' => 'Shop 9',
                'location' => 'Location 9',
                'city' => 'City 9',
                'delivery' => true,
                'pickup' => false,
                'whatsapp' => '1234567898',
                'description' => 'Description for Shop 9',
                'price' => 300,
                'rate' => '3.9'
            ],
            [
                'image' => 'image10.jpg',
                'name' => 'Shop 10',
                'location' => 'Location 10',
                'city' => 'City 10',
                'delivery' => true,
                'pickup' => true,
                'whatsapp' => '1234567899',
                'description' => 'Description for Shop 10',
                'price' => 150,
                'rate' => '4.1'
            ]
        ];

        foreach ($shops as $shopItem)
        {
            Shop::create($shopItem);
        }
    }
}
