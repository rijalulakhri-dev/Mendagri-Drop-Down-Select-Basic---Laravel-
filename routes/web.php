<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Example\DropdownController;
use App\Http\Controllers\Example\UsersController;
use App\Http\Controllers\PelayananController;
use Illuminate\Support\Facades\Route;






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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/pasienbaru', [PelayananController::class,'index'])->name('pasienbaru');

Route::post('/process/pasienbaru', [PelayananController::class,'store'])->name('simpan_pasien');

Route::get('sampleDropDown', [DropdownController::class, 'index']);
Route::get('create', [UsersController::class, 'create'])->name('users.create');
Route::post('create', [UsersController::class, 'store'])->name('users.store');
Route::post('post', function () {
    dd(request()->all());
} )->name('post');
