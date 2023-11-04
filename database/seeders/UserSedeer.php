<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Team IT',
                'email' => 'teamit@gmail.com',
                'email_verified_at' => '2023-11-04 10:11:44',
                'password' => Hash::make('teamit02'),
                'role_id' => 1,
            ]
        ];

        User::insert($data);
    }
}
