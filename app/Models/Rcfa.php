<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rcfa extends Model
{
    protected $table = "rcfa";
    protected $primaryKey = "rcfa_no";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'rcfa_no',
        'user_nid',
        'rcfa_deskripsi',
        'rcfa_file_pendukung',  
    ];

    public function user()
    {
        
        return $this->belongsTo(User::class,'user_nid','user_nid');
    }
}
