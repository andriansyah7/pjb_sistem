<?php

namespace App\Exports;


use App\Models\Serp_Main_Equipment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MainEquipmentExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    
    public function collection()
    {
        return Serp_Main_Equipment::all();
    }

    public function headings(): array
    {
        return[
            'KKS',
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
