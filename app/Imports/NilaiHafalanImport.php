<?php

namespace App\Imports;

use App\Models\NilaiHafalan;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiHafalanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NilaiHafalan([
            'nis' => $row [1],
            'kelas_id' => $row [2],
            'jumlah_juz' => $row [3],
            'makhrodul_huruf' => $row [4],
            'ketentuan_ilmu_tajwid' => $row [5],
            'irama_lagu' => $row [6],
            'fasokhah' => $row [7],
            'nilai_hafalan' => $row [8],
            'semester' => $row [9],
            'tahun_ajar' => $row [10],
        ]);
    }
}
