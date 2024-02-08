<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\UserDetail;
use App\Models\User;

class UserDetailSeeder extends Seeder
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
                'nip' => '1234567890',
                'user_id' => 1,
                'jenkel' => 'L',
                'tgl_lahir' => '2000-02-05',
                'no_telp' => '081357492377',
                'alamat' => 'Dk. Jelidro',
                'status_user' => 'Aktif',
                'is_active' => 1,
                'created_at' => '2023-11-04 10:11:44',
                'updated_at' => '2023-11-04 10:11:44',
            ],
            [
                'nip' => '0987654321',
                'user_id' => 2,
                'jenkel' => 'L',
                'tgl_lahir' => '2000-01-01',
                'no_telp' => '081357849311',
                'alamat' => 'Dk. Manukan',
                'status_user' => 'Aktif',
                'is_active' => 1,
                'created_at' => '2023-11-04 10:11:44',
                'updated_at' => '2023-11-04 10:11:44',
            ]
        ];

        UserDetail::insert($data);

    }
}
