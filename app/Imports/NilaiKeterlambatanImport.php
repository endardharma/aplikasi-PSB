<?php

namespace App\Imports;

use App\Models\NilaiKeterlambatan;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiKeterlambatanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NilaiKeterlambatan([
            'nis' => $row [1],
            'kelas_id' => $row [2],
            'jumlah_keterlambatan' => $row [3],
            'nilai_keterlambatan' => $row [4],
            'semester' => $row [5],
            'tahun_ajar' => $row [6],
        ]);
    }
}
