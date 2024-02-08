<?php

namespace App\Exports;

use App\Models\JurusanSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class JurusanSiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return JurusanSiswa::all();
    }
}
