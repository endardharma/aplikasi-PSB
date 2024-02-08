<?php

namespace App\Imports;

use App\Models\JurusanSiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class JurusanSiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new JurusanSiswa([
            'nis' => $row[1],
            'jurusan_id' => $row[2],
        ]);
    }
}
