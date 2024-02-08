<?php

namespace App\Imports;

use App\Models\MasterKriteria;
use Maatwebsite\Excel\Concerns\ToModel;

class MasterKriteriaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterKriteria([
            'kode_kriteria' => $row [1],
            'nama_kriteria' => $row [2],
            'bobot_kriteria' => $row [3],
            'atribut_kriteria' => $row [4],
            'kelas' => $row [5],
            'jurusan' => $row [6],
            'semester' => $row [7],
            'tahun_ajar' => $row [8],
        ]);
    }
}
