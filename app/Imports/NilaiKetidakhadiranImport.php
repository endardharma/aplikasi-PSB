<?php

namespace App\Imports;

use App\Models\NilaiKetidakhadiran;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiKetidakhadiranImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NilaiKetidakhadiran([
            'nis' => $row [1],
            'kelas_id' => $row [2],
            'hadir' => $row [3],
            'sakit' => $row [4],
            'izin' => $row [5],
            'tanpa_keterangan' => $row [6],
            'nilai_ketidakhadiran' => $row [7],
            'semester' => $row [8],
            'tahun_ajar' => $row [9],
        ]);
    }
}
