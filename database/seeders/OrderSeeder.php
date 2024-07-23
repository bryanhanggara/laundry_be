<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'claim_code' => 'CLAIM001',
                'user_id' => 1,
                'shop_id' => 1,
                'wheight' => '10kg',
                'with_pickup' => true,
                'with_delivery' => false,
                'pickup_address' => '123 Pickup St, City 1',
                'delivery_address' => '456 Delivery St, City 1',
                'total' => 150.50,
                'description' => 'Claim description for user 1, shop 1',
                'status' => 'SUKSES'
            ],
            [
                'claim_code' => 'CLAIM002',
                'user_id' => 2,
                'shop_id' => 2,
                'wheight' => '20kg',
                'with_pickup' => false,
                'with_delivery' => true,
                'pickup_address' => '123 Pickup St, City 2',
                'delivery_address' => '456 Delivery St, City 2',
                'total' => 250.75,
                'description' => 'Claim description for user 2, shop 2',
                'status' => 'PROSES'
            ],
            [
                'claim_code' => 'CLAIM003',
                'user_id' => 3,
                'shop_id' => 3,
                'wheight' => '5kg',
                'with_pickup' => true,
                'with_delivery' => true,
                'pickup_address' => '123 Pickup St, City 3',
                'delivery_address' => '456 Delivery St, City 3',
                'total' => 75.25,
                'description' => 'Claim description for user 3, shop 3',
                'status' => 'PICKUP'
            ],
            [
                'claim_code' => 'CLAIM004',
                'user_id' => 4,
                'shop_id' => 4,
                'wheight' => '15kg',
                'with_pickup' => false,
                'with_delivery' => false,
                'pickup_address' => '123 Pickup St, City 4',
                'delivery_address' => '456 Delivery St, City 4',
                'total' => 200.00,
                'description' => 'Claim description for user 4, shop 4',
                'status' => 'SUKSES'
            ],
            [
                'claim_code' => 'CLAIM005',
                'user_id' => 5,
                'shop_id' => 5,
                'wheight' => '25kg',
                'with_pickup' => true,
                'with_delivery' => true,
                'pickup_address' => '123 Pickup St, City 5',
                'delivery_address' => '456 Delivery St, City 5',
                'total' => 300.00,
                'description' => 'Claim description for user 5, shop 5',
                'status' => 'PROSES'
            ],
            [
                'claim_code' => 'CLAIM006',
                'user_id' => 6,
                'shop_id' => 6,
                'wheight' => '8kg',
                'with_pickup' => false,
                'with_delivery' => true,
                'pickup_address' => '123 Pickup St, City 6',
                'delivery_address' => '456 Delivery St, City 6',
                'total' => 125.75,
                'description' => 'Claim description for user 6, shop 6',
                'status' => 'PICKUP'
            ],
            [
                'claim_code' => 'CLAIM007',
                'user_id' => 7,
                'shop_id' => 7,
                'wheight' => '12kg',
                'with_pickup' => true,
                'with_delivery' => false,
                'pickup_address' => '123 Pickup St, City 7',
                'delivery_address' => '456 Delivery St, City 7',
                'total' => 175.00,
                'description' => 'Claim description for user 7, shop 7',
                'status' => 'SUKSES'
            ],
            [
                'claim_code' => 'CLAIM008',
                'user_id' => 8,
                'shop_id' => 8,
                'wheight' => '18kg',
                'with_pickup' => true,
                'with_delivery' => true,
                'pickup_address' => '123 Pickup St, City 8',
                'delivery_address' => '456 Delivery St, City 8',
                'total' => 220.00,
                'description' => 'Claim description for user 8, shop 8',
                'status' => 'PROSES'
            ],
            [
                'claim_code' => 'CLAIM009',
                'user_id' => 9,
                'shop_id' => 9,
                'wheight' => '22kg',
                'with_pickup' => false,
                'with_delivery' => true,
                'pickup_address' => '123 Pickup St, City 9',
                'delivery_address' => '456 Delivery St, City 9',
                'total' => 275.00,
                'description' => 'Claim description for user 9, shop 9',
                'status' => 'PICKUP'
            ],
            [
                'claim_code' => 'CLAIM010',
                'user_id' => 10,
                'shop_id' => 10,
                'wheight' => '30kg',
                'with_pickup' => true,
                'with_delivery' => false,
                'pickup_address' => '123 Pickup St, City 10',
                'delivery_address' => '456 Delivery St, City 10',
                'total' => 350.00,
                'description' => 'Claim description for user 10, shop 10',
                'status' => 'SUKSES'
            ]
        ];

        foreach ($orders as $orderItem)
        {
            Order::create($orderItem);
        }


    }
}
