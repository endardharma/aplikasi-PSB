<?php

namespace App\Exports;

use App\Models\MasterKriteria;
use Maatwebsite\Excel\Concerns\FromCollection;

class MasterKriteriaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MasterKriteria::all();
    }
}
