<?php

namespace App\Imports;

use App\Models\NilaiSikap;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiSikapImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NilaiSikap([
            'nis' => $row [1],
            'kelas_id' => $row [2],
            'keterangan_sikap' => $row [3],
            'nilai_sikap' => $row [4],
            'semester' => $row [5],
            'tahun_ajar' => $row [6],
        ]);
    }
}
