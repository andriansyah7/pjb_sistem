<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorySerp extends Model
{
    protected $table = "history_serp";
    protected $primaryKey = "history_serp_id";
    public $incrementing = false;
    protected $fillable = [
        'history_serp_tahun',
        'serp_main_equipment_id',
        'serp_system_id',
        'serp_pic_id',
        'serp_main_equipment_name',
        'serp_main_equipment_keterangan',
        'OC',
        'PT',
        'PQ',
        'SF',
        'RC',
        'PE',
        'RT',
        'SCR',
        'OCR',
        'ACR',
        'AFPF',
        'MPI',

        
    ];

    public function system()
    {
        
        return $this->belongsTo(Serp_System::class,'serp_system_id','serp_system_id');
    }

    public function pic()
    {
        
        return $this->belongsTo(Serp_Pic::class,'serp_pic_id','serp_pic_id');
    }

    public function serp_main()
    {
        
        return $this->belongsTo(Serp_Main_Equipment::class,'serp_main_equipment_id','serp_main_equipment_id');
    }
}
