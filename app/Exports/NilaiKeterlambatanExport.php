<?php

namespace App\Exports;

use App\Models\NilaiKeterlambatan;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiKeterlambatanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NilaiKeterlambatan::all();
    }
}
