<?php

namespace App\Exports;


use App\Models\Serp_Main_Equipment;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;

class MainEquipmentExport implements FromQuery, WithHeadings, ShouldAutoSize, WithColumnFormatting, WithMapping
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

    
    public function map($project): array
    {
        return [
          
            $project->serp_main_equipment_id,
            $project->serp_system_id,
            $project->serp_main_equipment_name,
            $project->PT,
            $project->OC,
            $project->PQ,
            $project->SF,
            $project->RT,
            $project->RC,
            $project->PE,
            $project->SCR,
            $project->OCR,
            $project->ACR,
            $project->AFPF,
            $project->MPI,
            $project->serp_pic_id,
            $project->serp_main_equipment_keterangan,
            $project->created_at,
            $project->updated_at,
            
        ];
    }
    public function columnFormats(): array
    {
        return [
            
            'R' => NumberFormat::FORMAT_DATE_YYYYMMDD,
            'S' => NumberFormat::FORMAT_DATE_YYYYMMDD,
            
        ];
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
