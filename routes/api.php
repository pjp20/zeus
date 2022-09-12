<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/schudule', [App\Http\Controllers\ScheduleController::class, 'all']);
Route::get('/status', [App\Http\Controllers\ScheduleController::class, 'vehicleStatusTask']);
Route::get('/get-address/{lat}/{long}', [App\Http\Controllers\ExternalController::class, 'getAddress']);
Route::get('/fetch-maintenance/{package}', [App\Http\Controllers\ControlPanelController::class, 'fetchMaintenance']);



Route::get('/tella-trans', [App\Http\Controllers\ScheduleController::class, 'fetchTellaTransaction']);
Route::get('/mygarage-trans', [App\Http\Controllers\ScheduleController::class, 'fetchMygarageTransaction']);
Route::get('/finance', [App\Http\Controllers\ScheduleController::class, 'finance']);
Route::get('/vms_payment', [App\Http\Controllers\ScheduleController::class, 'vms_payment']);
