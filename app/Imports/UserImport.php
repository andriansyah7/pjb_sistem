<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UserImport implements ToModel, WithStartRow
{
    
    public function model(array $row)
    {
        return new User([
            'user_nid' => $row[0],
            'user_name' => $row[1], 
            'jabatan_id' => $row[2], 
            'unit_id' => $row[3], 
            'fungsi_id' => $row[4], 
            'role_id' => $row[5], 
            'user_email' => $row[6], 
            'password' => Hash::make($row[7]), 
            'created_at' => $row[8], 
            'updated_at' => $row[9], 
           
        ]);
    }

        public function startRow(): int
        {
            return 2;
        }
}
