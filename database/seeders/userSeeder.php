<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'ikhsan',
                'email' => 'ikhsanwarman@gmail.com',
                'password' => bcrypt('abc123'),
                'role' => 'admin'
            ],
            [
                'name' => 'user',
                'email' => 'warmanikhsan@gmail.com',
                'password' => bcrypt('abc123'),
                'role' => 'user'
            ]
            ];

            foreach($userData as $key => $val){
                User::create($val);
            }
    }
}
