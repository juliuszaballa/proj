<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('harvest/{data}',[FarmerController::class,'harvest']);
Route::get('/adminpage',[FarmerController::class,'index'])->name('adminpage.index');
Route::get('AddFarmers',[FarmerController::class,'addfarmers']);
Route::post('farmersAcc',[FarmerController::class,'SaveAccount']);
Route::get('editAccount/{data}',[FarmerController::class,'editacc']);
Route::post('farmersAccount',[FarmerController::class,'editfarmer']);
Route::get('deleteAccount/{data}',[FarmerController::class,'deleteAccount',]);
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
