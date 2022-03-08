<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SubscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('index', [
    'title' => 'Home'
  ]);
});

Route::get('/register', [RegistrationController::class, 'index']);


Route::get('/api/provincies', [RegistrationController::class, 'getProvincies']);
Route::get('/api/regencies/{provincy_id}', [RegistrationController::class, 'getRegencies']);
Route::get('/api/districts/{regency_id}', [RegistrationController::class, 'getDistricts']);
Route::get('/api/villages/{district_id}', [RegistrationController::class, 'getVillages']);

Route::get('/newsletter', [SubscriptionController::class, 'index']);
Route::post('/newsletter', [SubscriptionController::class, 'store']);

Route::get('/welcome', function () {
  return view('welcome');
});
