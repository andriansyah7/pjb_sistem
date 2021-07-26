<?php

namespace App\Exports;


use App\Models\Serp_Main_Equipment;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class MainEquipmentExport implements FromQuery, WithHeadings, ShouldAutoSize
{
    use Exportable;
    public function forserp_pic_id($serp_pic_id)
    {
        $this->serp_pic_id = $serp_pic_id;
        
        return $this;
    }
    
    public function query()
    {
        return Serp_Main_Equipment::query()->where('serp_pic_id', $this->serp_pic_id);
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
