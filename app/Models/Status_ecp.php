<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_ecp extends Model
{
    use HasFactory;
    protected $table = 'status_ecp';
    protected $primaryKey = "status_ecp_id";
    protected $fillable = [
        'status_ecp_id',
        'status_ecp_name',
       
        
    ];

    public function spv_approval()
    {
        return $this->hasMany(Spv_approval::class);
    }
   
    public function manager_approval()
    {
        return $this->hasMany(Spv_approval::class);
    }

}
