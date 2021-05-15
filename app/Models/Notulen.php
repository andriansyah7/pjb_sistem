<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notulen extends Model
{
    protected $table = "notulen";
    protected $primaryKey = "notulen_id";
    protected $fillable = [
        'notulen_pimpinan_rapat',
        'notulen_fungsi',
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
public function fungsi()
{
    
    return $this->belongsTo(Fungsi::class,'notulen_fungsi','fungsi_id');
}

public function ecp()
{
    
    return $this->belongsTo(Ecp::class,'ecp_no','ecp_no');
}
}
