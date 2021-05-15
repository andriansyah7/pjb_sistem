<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';
    protected $primaryKey = "unit_id";
    protected $fillable = [
        'unit_id',
        'unit_name',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
   
    public function fungsi()
    {
        return $this->hasMany(Fungsi::class);
    }
}
