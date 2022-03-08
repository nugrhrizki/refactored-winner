<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegProvince;
use App\Models\RegRegency;
use App\Models\RegDistrict;
use App\Models\RegVillage;

class RegistrationController extends Controller
{
  public function index() {
    return view('register', [
      'title' => 'Multi-Level Dropdown',
      'provincies' => RegProvince::all()
    ]);
  }

  public function getProvincies() {
    return response()->json(RegProvince::all());
  }

  public function getRegencies($provincy_id) {
    return response()->json(RegProvince::find($provincy_id)->regencies);
  }

  public function getDistricts($regency_id) {
    return response()->json(RegRegency::find($regency_id)->districts);
  }

  public function getVillages($district_id) {
    return response()->json(RegDistrict::find($district_id)->villages);
  }
}
