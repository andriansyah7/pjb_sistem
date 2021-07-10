<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotulenRcfa extends Model
{
    protected $table = "notulen_rcfa";
    protected $primaryKey = "notulen_rcfa_id";
    protected $fillable = [
        'notulen_pimpinan_rapat',
        'notulen_notulis',
        'notulen_tanggal',
        'notulen_waktu',
        'notulen_tempat',
        'notulen_rapat',
        'notulen_agenda',
        'notulen_peserta',
        'notulen_pembahasan',
        'notulen_permasalahan',
        'notulen_permasalahan',
        'notulen_hasil_pembahasan',
    ];

    public function pimpinan_rapat()
{
    
    return $this->belongsTo(User::class,'notulen_pimpinan_rapat','user_nid');
}

public function notulis()
{
    
    return $this->belongsTo(User::class,'notulen_notulis','user_nid');
}


public function rcfa()
{
    
    return $this->belongsTo(Rcfa::class,'rcfa_no','rcfa_no');
}
}
