<?php


use App\Http\Controllers\API\KemendagriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/provinces', [KemendagriController::class, 'getProvinces']);
Route::get('/regencies/{provinceId}', [KemendagriController::class, 'getRegencies']);
Route::get('/districts/{regencyId}', [KemendagriController::class, 'getDistricts']);
Route::get('/villages/{districtId}', [KemendagriController::class, 'getVillages']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
