<?php

namespace App\Exports;

use App\Models\Serp_Main_Equipment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AllTopTenExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        $serp_all = Serp_Main_Equipment::orderBy('MPI','desc')->get()->count();
        $serp_main_10p = floor($serp_all/10);
        return Serp_Main_Equipment::orderBy('MPI','desc')->take($serp_main_10p)->get();
      
    }

    public function headings(): array
    {
        return[
            'serp_main_equipment_id',
            'serp_system_id',
            'serp_main_equipment_name',
            'PT',
            'OC',
            'PQ',
            'SF',
            'RT',
            'RC',
            'PE',
            'SCR',
            'OCR',
            'ACR',
            'AFPF',
            'MPI',
            'serp_pic_id',
            'serp_main_equipment_keterangan',
            'created_at',
            'updated_at',
        ];

    }
}
