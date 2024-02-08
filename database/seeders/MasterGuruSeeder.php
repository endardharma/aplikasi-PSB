<?php

namespace Database\Seeders;

use App\Models\MasterGuru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterGuruSeeder extends Seeder
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
                'nip' => '1995031220232001201',
                'nama_guru' => 'Team IT',
                'jenkel' => 'L',
                'status_pegawai' => 'Aktif',
                'jabatan' => 1,
                'is_active' => 1,
                'created_at' => '2023-11-04 10:11:44',
                'updated_at' => '2023-11-04 10:11:44',
            ]
        ];

        MasterGuru::insert($data);
    }
}
