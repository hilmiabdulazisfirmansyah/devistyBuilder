<?php

namespace App\Exports;

use App\Ppdb;
use Maatwebsite\Excel\Concerns\FromCollection;

class ppdbExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ppdb::all();
    }
}
