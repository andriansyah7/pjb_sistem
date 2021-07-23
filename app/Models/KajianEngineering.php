<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KajianEngineering extends Model
{
    protected $table = "kajian_engineering";
    protected $primaryKey = "kajian_no";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'kajian_no',
        'kajian_spv',
        'kajian_requester',
        'kajian_judul',
        'kajian_deskripsi',
        'kajian_sumber_informasi',
        'kajian_pihak_terlibat',
        'kajian_disposisi_staff_so',
        'progres_kajian_id',
         
    ];

    public function setCatAttribute($value)
    {
        $this->attributes['kajian_pihak_terlibat'] = json_encode($value);
    }
  
    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['kajian_pihak_terlibat'] = json_decode($value);
    }

    public function spv()
    {
        
        return $this->belongsTo(User::class,'kajian_spv','user_nid');
    }

    public function requester()
    {
        
        return $this->belongsTo(User::class,'kajian_requester','user_nid');
    }

    public function pihak_terlibat()
    {
        
        return $this->belongsTo(User::class,'kajian_pihak_terlibat','user_nid');
    }

    public function disposisi_staffso()
    {
        
        return $this->belongsTo(User::class,'kajian_disposisi_staff_so','user_nid');
    }

    public function progres_kajian()
    {
        
        return $this->belongsTo(ProgresKajian::class,'progres_kajian_id','progres_kajian_id');
    }

}
