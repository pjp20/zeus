<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControlPanelController;
use App\Http\Controllers\FinanceOfficeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ReportModuleController;
use App\Http\Controllers\TaskMgtController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\VehicleMgtController;
use Illuminate\Support\Facades\Auth;
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




Route::group(['middleware' => ['auth']], function () {
    Route::get("/", [HomepageController::class, 'index']);
    Route::get('/users', [HomepageController::class, 'users']);
    Route::get('/user/{phone}', [HomepageController::class, 'user']);


    Route::controller(ReportModuleController::class)->group(function () {
        Route::get("user-management",  'userMgt');
        Route::get("add-user",  'addUser');
        Route::get("user-profile",  'userProfile');
    });

    Route::get('vehicle-management', [VehicleMgtController::class, 'index']);
    Route::get('finance-office', [FinanceOfficeController::class, 'index']);
    Route::get('task-management', [TaskMgtController::class, 'index']);

    Route::get('activity-log', [ActivityLogController::class, 'index']);
    Route::get('admin', [AdminController::class, 'index']);
    Route::get('control-panel', [ControlPanelController::class, 'index']);


    Route::controller(ReportModuleController::class)->group(function () {
        Route::get('report-module',  'index')->name("report-module");
        // Route::get('reportModule',  'reportModule')->name("reportModule");
        Route::post('reportModuleFilter',  'reportModuleFilter')->name("reportModuleFilter");
        Route::get('reportModuleFilter/{date}',  'reportModuleFilter2')->name("reportModuleFilter2");

        Route::get('all-payments',  'allPayments')->name("all-payments");
        Route::post('all-payments-filter',  'allPaymentFilter')->name('allPaymentFilter');
        Route::get('all-payments-filter/{date}',  'allPaymentFilter2')->name('allPaymentFilter2');


        Route::get('due-payments',  'duePayments')->name("due-payments");

        Route::get('overdue-payments',  'overduePayments')->name("overdue-payments");
        Route::get('critical-payments',  'criticalPayments')->name("critical-payments");

        Route::get('code-reds',  'codeRed')->name("code-red");
        Route::post('code-red-filter',  'codeRedFilter')->name('codeRedFilter');
        Route::get('code-red-filter/{date}',  'codeRedFilter2')->name('codeRedFilter2');

        Route::get("user-info/{phone}/{plate}/{investorphone}",  'userInformation')->name("userInfo");
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\ScheduleController::class, 'all']);






