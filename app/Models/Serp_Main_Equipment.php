<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serp_Main_Equipment extends Model
{
    protected $table = "serp_main_equipment";
    protected $primaryKey = "serp_main_equipment_id";
    public $incrementing = false;
    protected $fillable = [
        'serp_main_equipment_id',
        'serp_main_equipment_name',
        'serp_main_equipment_keterangan',
        
    ];

    public function system()
    {
        
        return $this->belongsTo(Serp_System::class,'serp_system_id','serp_system_id');
    }

    public function pic()
    {
        
        return $this->belongsTo(Serp_Pic::class,'serp_pic_id','serp_pic_id');
    }
}
