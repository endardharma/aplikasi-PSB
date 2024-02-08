<?php

namespace App\Exports;

use App\Models\NilaiHafalan;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiHafalanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NilaiHafalan::all();
    }
}
