<?php

namespace App\Imports;

use App\Models\NilaiPrestasi;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiPrestasiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NilaiPrestasi([
            'nis' => $row [1],
            'kelas_id' => $row [2],
            'keterangan_prestasi' => $row [3],
            'nilai_prestasi' => $row [4],
            'semester' => $row [5],
            'tahun_ajar' => $row [6],
        ]);
    }
}
