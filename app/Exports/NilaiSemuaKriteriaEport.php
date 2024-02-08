<?php

namespace App\Exports;

use App\Models\NIlaiSemuaKriteria;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiSemuaKriteriaEport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NIlaiSemuaKriteria::all();
    }
}
