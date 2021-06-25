<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ecp extends Model
{
    use HasFactory, Notifiable;
    protected $table = "ecp";
    protected $primaryKey = "ecp_no";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'ecp_no',
        'status_ecp_id',
        'user_nid',
        'ecp_deskripsi',
        'ecp_desktambahan',
        'ecp_alasan',
        'ecp_approval_1',
        'ecp_approval_2',
        'ecp_file_pendukung',
        'progres_id',
        
    ];

    public function user()
    {
        
        return $this->belongsTo(User::class,'user_nid','user_nid');
    }
    public function progres()
    {
        
        return $this->belongsTo(Progres::class,'progres_id','progres_id');
    }
    
    public function approval1()
    {
        
        return $this->belongsTo(User::class,'ecp_approval_1','user_nid');
    }

    public function approval2()
    {
        
        return $this->belongsTo(User::class,'ecp_approval_2','user_nid');
    }

    public function Status_ecp()
    {
        
        return $this->belongsTo(User::class,'status_ecp_id','status_ecp_id');
    }

    public function spv_approval()
    {
        return $this->hasMany(Spv_approval::class);
    }
    
    public function manager_approval()
    {
        return $this->hasMany(Manager_approval::class);
    }
    
    public function meqa()
    {
        return $this->hasMany(Meqa::class);
    }
    
    public function notulen()
    {
        return $this->hasMany(Spv_approval::class);
    }

    public function tindaklanjut()
    {
        return $this->hasMany(Tindaklanjut::class);
    }

}
