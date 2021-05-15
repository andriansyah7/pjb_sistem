<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serp_Unit extends Model
{
    protected $table = "serp_unit";
    protected $primaryKey = "serp_unit_id";
    public $incrementing = false;
    protected $fillable = [
        'serp_unit_id',
        'serp_blok_id',
        'serp_unit_name',
    ];

    public function blok()
    {
        
        return $this->belongsTo(Serp_Blok::class,'serp_blok_id','serp_blok_id');
    }

    public function system()
    {
        return $this->hasMany(Serp_System::class);
    }
}
