<?php

namespace App\Exports;

use App\Models\NilaiKetidakhadiran;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiKetidakhadiranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NilaiKetidakhadiran::all();
    }
}
