<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControlPanelController;
use App\Http\Controllers\FinanceOfficeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ReportModuleController;
use App\Http\Controllers\TaskMgtController;
use App\Http\Controllers\TrackWebController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\VehicleMgtController;
use App\Http\Controllers\PasswordController;
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

Route::get('/assign-password/{id}', [PasswordController::class, 'index']);
Route::post('/change_passwordz', [PasswordController::class, 'changePasswordz'])->name('changePasswordz');
Route::get('/change_password', [PasswordController::class, 'changePassword'])->name('changePassword');


Route::group(['middleware' => ['auth']], function () {
    Route::get("/", [HomepageController::class, 'index']);
    Route::get('/users', [HomepageController::class, 'users']);
    Route::get('/user/{phone}', [HomepageController::class, 'user'])->name("user");
    Route::post('/user', [HomepageController::class, 'editUserAccount'])->name("editUserAccount");
    Route::get('track-web', [TrackWebController::class, 'index']);

    Route::controller(UserManagementController::class)->group(function () {
        Route::get("user-management",  'userMgt');
        Route::get("add-user",  'addUser');
        Route::get("user-profile",  'userProfile');
        Route::get("account-permissions",  'accountPermissions');

        Route::post("update-Profile",  'updateProfile')->name("updateProfile");
        Route::get("admin-information/{id}",  'adminInfo')->name("adminInfo");

        Route::post('create-users', 'createuser')->name('createUser');
    });

    Route::post('maintenance-fee', [ControlPanelController::class, 'maintenanceFee']);
    Route::post('maintenance-cost', [ControlPanelController::class, 'maintenance'])->name("maintenance");
    Route::post('maintenance-edit', [ControlPanelController::class, 'maintenanceEdit']);
    Route::get('delete-maintenance/{id}', [ControlPanelController::class, 'deleteMaintence']);

    Route::get('vehicle-management', [VehicleMgtController::class, 'index']);
    Route::post('add-vehicles', [VehicleMgtController::class, 'addVehicle2'])->name("add-vehicle");

    Route::get('add-vehicle', [VehicleMgtController::class, 'addVehicle']);
    Route::get('vehicle-information', [VehicleMgtController::class, 'vehicleInfomation']);

    Route::get('finance-office', [FinanceOfficeController::class, 'depositModule']);
    Route::get('payout-manager', [FinanceOfficeController::class, 'payoutManager']);
    Route::get('payout-status/{status}/{id}', [FinanceOfficeController::class, 'changeStatus'])->name("payout-status");
    Route::get('payout-views/{id}', [FinanceOfficeController::class, 'payoutView'])->name("payout-view");
    // Route::get('payout-views', [FinanceOfficeController::class, 'payoutView']);
    Route::Post('payout-manager-filter', [FinanceOfficeController::class, 'payoutManagerFilter'])->name("filterPayoutManeger");
    Route::Post('payout-manager-filter2', [FinanceOfficeController::class, 'payoutManagerFilter2'])->name("filterPayoutManeger2");

    Route::Post('generate-payout', [FinanceOfficeController::class, 'generatePayoutManager'])->name("generatePayoutManager");

    Route::post('csv-form', [FinanceOfficeController::class, 'downloadCsv'])->name("downloadCsv");
    Route::post('csv-form', [FinanceOfficeController::class, 'downloadCsv'])->name("downloadCsv");


    Route::get('task-management', [TaskMgtController::class, 'index']);

    Route::get('activity-log', [ActivityLogController::class, 'index']);
    Route::get('admin', [AdminController::class, 'index']);
    Route::post('create-admin', [AdminController::class, 'store'])->name("addAdmin");
    Route::get('control-panel', [ControlPanelController::class, 'index']);

    Route::get('new-account-permissions', [ControlPanelController::class, 'newAcctPermission']);
    Route::post('update-account-permissions', [ControlPanelController::class, 'UpdateNewAcctPermission'])->name("UpdateNewAcctPermission");
    Route::get('vehicle-profile', [VehicleMgtController::class, 'VehicleProfile']);
    Route::get('fleet-operator-permission/{id}', [VehicleMgtController::class, 'fleetOperatorPermission'])->name('fleet-operator-permission');
    Route::get('operational-data/{plate}', [VehicleMgtController::class, 'operational'])->name('operational');


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

Route::get('/home', [App\Http\Controllers\HomepageController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\ScheduleController::class, 'all']);
Route::get('/check/{no}', [App\Http\Controllers\ScheduleController::class, 'check']);
Route::get('/userManagement', [App\Http\Controllers\ScheduleController::class, 'userManagement']);

Route::get('/allvehicle', [App\Http\Controllers\ScheduleController::class, 'allVehicleTask']);

Route::view('map', 'map');

