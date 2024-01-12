<?php

use App\Http\Controllers\OfficalTaxiController;
use App\Http\Controllers\OurTaxiNumController;
use App\Http\Controllers\WhyChooseUsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/officalTaxi', [OfficalTaxiController::class, 'AllOfficalTaxi']);



Route::post('officalTaxi/store', [OfficalTaxiController::class, 'storeOfficalTaxi']);
Route::post('officalTaxi/{officalTaxi}/update', [OfficalTaxiController::class, 'updateOfficalTaxi']);
Route::get('officalTaxi/{officalTaxi}/show', [OfficalTaxiController::class, 'showOfficalTaxi']);
Route::delete('/officalTaxi/{officalTaxi}/delete', [OfficalTaxiController::class, 'destroyOfficalTaxi']);


Route::controller(OurTaxiNumController::class)->group(function (){
    Route::get('/ourTaxiNum/all', 'getOurTaxiNum');
    Route::post('/ourTaxiNum/store', 'storeOurTaxiNum');
    Route::get('/ourTaxiNum/{ourTaxiNum}/show', 'showOurTaxiNum');
    Route::put('/ourTaxiNum/{ourTaxiNum}/update',  'updateOurTaxiNum');
    Route::delete('/ourTaxiNum/{ourTaxiNum}/delete', 'destroyOurTaxiNum');
});

Route::controller(WhyChooseUsController::class)->group(function (){
    Route::get('/whyChoose/all', 'getDataWhy');
    Route::post('/whyChoose/store', 'storeWhyChoose');
    Route::get('/whyChoose/{whyChooseUs}/show', 'showWhyChoose');
    Route::put('/whyChoose/{whyChooseUs}/update',  'updateWhyChoose');
    Route::delete('/whyChoose/{whyChooseUs}/delete', 'destroyWhyChoose');
});