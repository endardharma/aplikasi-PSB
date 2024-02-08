<?php

namespace App\Exports;

use App\Models\MasterSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class MasterSiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MasterSiswa::all();
    }
}
