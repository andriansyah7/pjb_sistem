<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ECM_Review extends Model
{
    protected $table = "ecm_review";
    protected $primaryKey = "ecm_review_id";
    protected $fillable = [
        'ecp_no',
        'user_nid',
        'status_ecp_id',
        'ecm_review_alasan',
        
    ];


public function user()
{
    
    return $this->belongsTo(User::class,'user_nid','user_nid');
}

public function ecp()
{
    
    return $this->belongsTo(Ecp::class,'ecp_no','ecp_no');
}
}
