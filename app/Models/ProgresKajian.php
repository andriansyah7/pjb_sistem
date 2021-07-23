<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgresKajian extends Model
{
    protected $table = 'progres_kajian';
    protected $primaryKey = "progres_kajian_id";
    protected $fillable = [
        'progres_kajian_id',
        'progres_kajian_name',
       
        
    ];

    public function kajian()
    {
        return $this->hasMany(KajianEngineering::class);
    }
}
