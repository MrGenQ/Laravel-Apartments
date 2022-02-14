<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [ApartmentController::class, 'index']);
Route::get('/add-apartment', [ApartmentController::class, 'addApartment']);
Route::post('/store', [ApartmentController::class,'storeApartment']);
Route::get('/delete/apartment/{apartment}', [ApartmentController::class, 'deleteApartment']);
Route::get('/update/apartment/{apartment}', [ApartmentController::class, 'updateStatus']);
Route::post('/update/{apartment}', [ApartmentController::class, 'storeUpdate']);
Route::get('/add-reservation', [ReservationController::class, 'addReservation']);
Route::post('/storeReservation', [ReservationController::class,'storeReservation']);
Route::get('/reservations', [ReservationController::class, 'index']);

Route::get('/import', [ApartmentController::class, 'importCompany']);
Route::post('/', [ApartmentController::class, 'importAdd']);
