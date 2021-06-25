<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'user';
    protected $primaryKey = "user_nid";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'user_nid',
        'user_name',
        'jabatan_id',
        'unit_id',
        'role_id',
        'fungsi_id',
        'user_email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class,'role_id','role_id');
    }

    public function jabatan()
    {
        
        return $this->belongsTo(Jabatan::class,'jabatan_id','jabatan_id');
    }
    public function unit()
    {
        
        return $this->belongsTo(Unit::class,'unit_id','unit_id');
    }

    public function fungsi()
    {
        
        return $this->belongsTo(Fungsi::class,'fungsi_id','fungsi_id');
    }

    public function ecp()
    {
        return $this->hasMany(Ecp::class);
    }

    public function approval1()
    {
        return $this->hasMany(Ecp::class);
    }

    public function approval2()
    {
        return $this->hasMany(Ecp::class);
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
        return $this->hasMany(Meqa_approval::class);
    }
    public function spv_so()
    {
        return $this->hasMany(Meqa_approval::class);
    }

    public function pimpinan_rapat()
    {
        return $this->hasMany(Notulen::class);
    }

    public function notulis()
    {
        return $this->hasMany(Notulen::class);
    }

    public function tindaklanjut()
    {
        return $this->hasMany(Tindaklanjut::class);
    }


}
