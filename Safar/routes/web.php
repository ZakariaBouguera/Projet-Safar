<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ResponsableController;


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
Route::get('/Client/Profil',[ClientController::class,'ConsulterProfil']);
Route::get('/Client/Reservation',[ClientController::class,'ReserverSejour']);
Route::get('/Client/AnnulerReservation',[ClientController::class,'AnnulerReservation']);
Route::get('/Client/ConsulterSejour',[ClientController::class,'ConsulterSejour']);
Route::get('/Responsable/Programmer',[ClientController::class,'ProgrammerSejour']);
Route::get('/Responsable/SuivreReservation',[ClientController::class,'SuivreReservation']);
Route::get('/Responsable/AnnulerSejour',[ClientController::class,'AnnulerSejour']);




