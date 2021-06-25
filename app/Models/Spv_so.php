<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spv_so extends Model
{
    protected $table = "spv_so";
    protected $primaryKey = "spv_so_id";
    protected $fillable = [
        'ecp_no',
        'user_nid',
        'staff_so',
        
        'spv_so_review',
    ];
    
    public function user()
    {
        
        return $this->belongsTo(User::class,'user_nid','user_nid');
    }
    
    public function staff()
    {
        
        return $this->belongsTo(User::class,'staff_so','user_nid');
    }
    
    public function ecp()
    {
        
        return $this->belongsTo(Ecp::class,'ecp_no','ecp_no');
    }
    
   
}
