<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = 
        [
            [
                'username' => 'blacknumbers',
                'email' => 'email@mail.com',
                'password' => Hash::make('12345678')
            ],
            [
                'username' => 'user1',
                'email' => 'user1@mail.com',
                'password' => Hash::make('password1')
            ],
            [
                'username' => 'user2',
                'email' => 'user2@mail.com',
                'password' => Hash::make('password2')
            ],
            [
                'username' => 'user3',
                'email' => 'user3@mail.com',
                'password' => Hash::make('password3')
            ],
            [
                'username' => 'user4',
                'email' => 'user4@mail.com',
                'password' => Hash::make('password4')
            ],
            [
                'username' => 'user5',
                'email' => 'user5@mail.com',
                'password' => Hash::make('password5')
            ],
            [
                'username' => 'user6',
                'email' => 'user6@mail.com',
                'password' => Hash::make('password6')
            ],
            [
                'username' => 'user7',
                'email' => 'user7@mail.com',
                'password' => Hash::make('password7')
            ],
            [
                'username' => 'user8',
                'email' => 'user8@mail.com',
                'password' => Hash::make('password8')
            ],
            [
                'username' => 'user9',
                'email' => 'user9@mail.com',
                'password' => Hash::make('password9')
            ],
            [
                'username' => 'user10',
                'email' => 'user10@mail.com',
                'password' => Hash::make('password10')
            ]
        ];

        foreach ($users as $userItem)
        {
            User::create($userItem);
        }
    
    }
}
