<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    protected $table = 'progres';
    protected $primaryKey = "progres_id";
    protected $fillable = [
        'progres_id',
        'progres_name',
       
        
    ];

    public function ecp()
    {
        return $this->hasMany(Ecp::class);
    }
}
