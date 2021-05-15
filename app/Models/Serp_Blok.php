<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serp_Blok extends Model
{
    protected $table = "serp_blok";
    protected $primaryKey = "serp_blok_id";
    public $incrementing = false;
    protected $fillable = [
        'serp_blok_id',
        'serp_blok_name',
    ];

    public function unit()
    {
        return $this->hasMany(Serp_Unit::class);
    }
}
