<?php

namespace App\Exports;

use App\Models\NilaiPrestasi;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiPrestasiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NilaiPrestasi::all();
    }
}
