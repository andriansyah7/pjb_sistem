<?php

namespace App\Imports;

use App\Models\Serp_System;
use Maatwebsite\Excel\Concerns\ToModel;

class SerpSystemImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Serp_System([
            'serp_system_id' => $row[0], 
            'serp_unit_id' => $row[1], 
            'serp_system_name' => $row[2],
            'created_at' => $row[3],
            'updated_at' => $row[4],
        ]);
    }
}
