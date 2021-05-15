<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "NID";
    protected $fillable = [
        'nama',
        'level',
        'email',
        'NID',
        'password'

    ];
}
