<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serp_System extends Model
{
    protected $table = "serp_system";
    protected $primaryKey = "serp_system_id";
    public $incrementing = false;
    protected $fillable = [
        'serp_system_id',
        'serp_unit_id',
        'serp_system_name',
    ];

    public function unit()
    {
        
        return $this->belongsTo(Serp_Unit::class,'serp_unit_id','serp_unit_id');
    }

    public function main()
    {
        return $this->hasMany(Serp_Main_Equipment::class);
    }
}

