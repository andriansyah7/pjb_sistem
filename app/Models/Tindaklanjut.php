<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindaklanjut extends Model
{
    protected $table = "tindaklanjut";
    protected $primaryKey = "tindaklanjut_id";
    protected $fillable = [
        'ecp_no',
        'tindaklanjut_notulis',
        'tindaklanjut_deskripsi',
        'tindaklanjut_file_terkait',
    ];

    public function notulis()
    {
        
        return $this->belongsTo(User::class,'tindaklanjut_notulis','user_nid');
    }
    
    public function ecp()
    {
        
        return $this->belongsTo(Ecp::class,'ecp_no','ecp_no');
    }
}
