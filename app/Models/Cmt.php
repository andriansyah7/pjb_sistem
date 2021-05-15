<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmt extends Model
{
    protected $table = "cmt";
    protected $primaryKey = "id";
    protected $fillable = [
        'ecpnmr',
        'catatan_cmt',
        'nama_cmt'
    ];
}
