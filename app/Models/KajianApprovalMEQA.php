<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KajianApprovalMEQA extends Model
{
    protected $table = "kajian_approval_meqa";
    protected $primaryKey = "kajian_meqa_approval_id";
    protected $fillable = [
        'kajian_no',
        'user_nid',
        'status_kajian_id',
        'meqa_approval_alasan',
        
    ];


public function user()
{
    
    return $this->belongsTo(User::class,'user_nid','user_nid');
}

public function kajian()
{
    
    return $this->belongsTo(KajianEngineering::class,'kajian_no','kajian_no');
}

public function status_kajian()
{
    
    return $this->belongsTo(StatusKajian::class,'status_kajian_id','status_kajian_id');
}
}
