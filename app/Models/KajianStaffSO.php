<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KajianStaffSO extends Model
{
    protected $table = "kajian_staff_so";
    protected $primaryKey = "kajian_staff_id";
   
    protected $fillable = [
        'kajian_no',
        'kajian_judul',
        'kajian_nama_staff',
        'kajian_analisa',
        'kajian_file'
    ];

    public function staff()
    {
        
        return $this->belongsTo(User::class,'kajian_nama_staff','user_nid');
    }

    public function kajian()
    {
        
        return $this->belongsTo(KajianEngineering::class,'kajian_no','kajian_no');
    }
}
