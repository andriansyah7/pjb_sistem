<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urgensi extends Model
{
    protected $table = 'urgensi';
    protected $primaryKey = "urgensi_id";
    protected $fillable = [
        'urgensi_id',
        'urgensi_name',
       
        
    ];

    public function ecp()
    {
        return $this->hasMany(Ecp::class);
    }
}
