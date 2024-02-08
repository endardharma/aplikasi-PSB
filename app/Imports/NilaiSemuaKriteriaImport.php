<?php

namespace App\Imports;

use App\Models\NilaiSemuaKriteria;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiSemuaKriteriaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NilaiSemuaKriteria([
            'nis' => $row [1],
            'kelas_id' => $row [2],
            'nilairaport_id' => $row [3],
            'nilaiketidakhadiran_id' => $row [4],
            'nilaisikap_id' => $row [5],
            'nilaiprestasi_id' => $row [6],
            'nilaihafalan_id' => $row [7],
            'semester' => $row [8],
            'tahun_ajar' => $row [9]
        ]);
    }
}
