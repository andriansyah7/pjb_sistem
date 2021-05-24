<?php

namespace App\Exports;


use App\Models\Serp_Main_Equipment;
use Maatwebsite\Excel\Concerns\FromCollection;

class MainEquipmentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Serp_Main_Equipment::all();
    }
}
