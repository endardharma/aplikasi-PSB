<?php

namespace App\Exports;

use App\Models\NilaiRaport;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiRaportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NilaiRaport::all();
    }
}
