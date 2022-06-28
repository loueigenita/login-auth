<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Louei Genita',
                'email' => 'loueigenita@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Lloyd Genita',
                'email' => 'lloyd@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Aton Aton',
                'email' => 'aton@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}
