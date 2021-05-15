<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fungsi extends Model
{
    protected $table = 'fungsi';
    protected $primaryKey = "fungsi_id";
    protected $fillable = [
        'unit_id',
        'fungsi_name',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function unit()
    {
        
        return $this->belongsTo(Unit::class,'unit_id','unit_id');
    }
}
