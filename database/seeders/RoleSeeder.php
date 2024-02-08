<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
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
                'desc' => 'Hak Akses sebagai Super Admin'
            ],
            [
                'id' => 2,
                'name' => 'Siswa - Siswi',
                'desc' => 'Hak Akses sebagai Siswa - Siswi'
            ],
            [
                'id' => 3,
                'name' => 'Guru BK',
                'desc' => 'Hak Akses sebagai Guru BK'
            ],
            [
                'id' => 4,
                'name' => 'Admin Raport',
                'desc' => 'Hak Akses sebagai Admin raport'
            ],
            [
                'id' => 5,
                'name' => 'Bagian Kurikulum',
                'desc' => 'Hak Akses sebagai Bagian Kurikulum'
            ],
            [
                'id' => 6,
                'name' => 'Bagian Tata Usaha',
                'desc' => 'Hak Akses sebagai Bagian Tata Usaha'
            ],
            [
                'id' => 7,
                'name' => 'Guru Agama',
                'desc' => 'Hak Akses sebagai Guru Agama'
            ],
            [
                'id' => 8,
                'name' => 'Wali Kelas',
                'desc' => 'Hak Akses sebagai Wali Kelas'
            ]
        ];
        
        Role::insert($data);
    }
}
