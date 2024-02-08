<?php

namespace App\Exports;

use App\Models\NilaiSikap;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiSikapExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NilaiSikap::all();
    }
}
