<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKajian extends Model
{
    
    protected $table = 'status_kajian';
    protected $primaryKey = "status_kajian_id";
    protected $fillable = [
        'status_kajian_id',
        'status_kajian_name',
       
        
    ];

    public function spv_approval()
    {
        return $this->hasMany(KajianApprovalSPVSO::class);
    } 
}
