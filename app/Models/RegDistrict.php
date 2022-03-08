<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegDistrict extends Model
{
    use HasFactory;
  
  public function regency()
  {
    return $this->belongsTo(RegRegency::class);
  }

  public function villages()
  {
    return $this->hasMany(RegVillage::class, 'district_id');
  }
}
