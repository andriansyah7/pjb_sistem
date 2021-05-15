<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager_approval extends Model
{
    protected $table = "manager_approval";
    protected $primaryKey = "manager_approval_id";
    protected $fillable = [
        'ecp_no',
        'user_nid',
        'status_ecp_id',
        'manager_approval_alasan',
    ];
    
    public function user()
    {
        
        return $this->belongsTo(User::class,'user_nid','user_nid');
    }

    
    public function ecp()
    {
        
        return $this->belongsTo(Ecp::class,'ecp_no','ecp_no');
    }
    
    public function status_ecp()
    {
        
        return $this->belongsTo(Status_ecp::class,'status_ecp_id','status_ecp_id');
    }
    
}
