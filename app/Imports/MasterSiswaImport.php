<?php

namespace App\Imports;

use App\Models\MasterSiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MasterSiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterSiswa([
            'nis' => $row [1],
            'nama_siswa' => $row [2],
            'jenkel' => $row [3],
            'kelas' => $row [4],
            'jurusan' => $row [5],
            'semester' => $row [6],
            'tahun_ajar' => $row [7],
        ]);
    }
}
