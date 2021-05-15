<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serp_Pic extends Model
{
    protected $table = "serp_pic";
    protected $primaryKey = "serp_pic_id";
    public $incrementing = false;
    protected $fillable = [
        'serp_pic_id',
        'serp_pic_name',
    ];

    public function main()
    {
        return $this->hasMany(Serp_Main_Equipment::class);
    }
}
