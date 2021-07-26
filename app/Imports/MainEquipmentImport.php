<?php

namespace App\Imports;

use App\Models\Serp_Main_Equipment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class MainEquipmentImport implements ToModel, WithStartRow
{
    
    public function model(array $row)
    {
        return new Serp_Main_Equipment([
            'serp_main_equipment_id' => $row[0],
            'serp_system_id' => $row[1], 
            'serp_main_equipment_name' => $row[2], 
            'PT' => $row[3], 
            'OC' => $row[4], 
            'PQ' => $row[5], 
            'SF' => $row[6], 
            'RT' => $row[7], 
            'RC' => $row[8], 
            'PE' => $row[9], 
            'SCR' => $row[10], 
            'OCR' => $row[11], 
            'ACR' => $row[12], 
            'AFPF' => $row[13], 
            'MPI' => $row[14], 
            'serp_pic_id' => $row[15], 
            'serp_main_equipment_keterangan' => $row[16], 
            'created_at' => $row[17], 
            'updated_at' => $row[18], 
        ]);
    }

        public function startRow(): int
        {
            return 2;
        }
}
