<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegRegency extends Model
{
  use HasFactory;

  public function province()
  {
    return $this->belongsTo(RegProvince::class);
  }

  public function districts()
  {
    return $this->hasMany(RegDistrict::class, 'regency_id');
  }
}
