<?php

namespace App\Exports;

use App\Models\Serp_System;
use Maatwebsite\Excel\Concerns\FromCollection;

class SerpSystemExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Serp_System::all();
    }
}
