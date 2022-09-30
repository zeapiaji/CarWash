<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CeoController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SuperAdminController;
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
// Route::get('/dashboard-admin', function () {
//     return view('staff.admin.pages.dashboard');
// })->middleware('role:admin')->name('admin.dashboard');

Route::middleware(['role:member'])->group(function () {
    //
});

Route::middleware(['role:employee'])->group(function () {
    Route::get('/employee-dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
    Route::get('/transaction', [EmployeeController::class, 'transaction'])->name('employee.transaction');
    Route::get('/queue', [EmployeeController::class, 'queue'])->name('employee.queue');
});

Route::middleware(['role:admin'])->group(function () {
    // Dashboard
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/update/employe/{id}', [AdminController::class, 'update_employee'])->name('admin.updateemployee');


    // Employee
    Route::get('/manage-employee', [AdminController::class, 'manage_employee'])->name('admin.manageemployee');
    Route::get('/employee/input', [AdminController::class, 'input_employee'])->name('admin.inputemployee');
    Route::get('/edit/employe/{id}', [AdminController::class, 'edit_employee'])->name('admin.editemployee');

    Route::get('/delete/employe/{id}', [AdminController::class, 'delete_employee'])->name('admin.deleteemployee');
    Route::post('/multiple-delete/employe', [AdminController::class, 'multiple_delete_employee'])->name('admin.multiple-delete-employe');

    Route::get('/recycle-employe', [AdminController::class, 'recycle_employee'])->name('admin.recycle_employee');
    Route::get('/forcedelete/employe/{id}', [AdminController::class, 'forcedelete_employee'])->name('admin.forcedeleteemployee');
    Route::get('/recovery/employe/{id}', [AdminController::class, 'recovery_employee'])->name('admin.recoveryemployee');
    Route::post('/multiple-recovery-employe', [AdminController::class, 'multiple_recovery_employee'])->name('admin.multiple-recovery-employee');
    Route::post('/multiple-force-delete-employe', [AdminController::class, 'multiple_force_delete_employee'])->name('admin.multiple-force-delete-employee');
    Route::post('/recovery-all-employe', [AdminController::class, 'recovery_all_employee'])->name('admin.recovery-all-employee');
    Route::get('/force-delete-all-employe', [AdminController::class, 'force_delete_all_employee'])->name('admin.force-delete-all-employee');

    // Member
    Route::get('/manage-member', [AdminController::class, 'manage_member'])->name('admin.managemember');
    Route::get('/detail/member/{id}', [AdminController::class, 'detail_member'])->name('admin.detailmember');
    Route::get('/add/member/', [AdminController::class, 'add_member'])->name('admin.addmember');
    Route::get('/edit/member/{id}', [AdminController::class, 'edit_member'])->name('admin.editmember');
    Route::post('/update/member', [AdminController::class, 'update_member'])->name('admin.updatemember');

    Route::get('/delete/member/{id}', [AdminController::class, 'delete_member'])->name('admin.deletemember');
    Route::post('/multiple-delete/member', [AdminController::class, 'multiple_delete_member'])->name('admin.multiple-delete-member');

    Route::get('/recycle-member', [AdminController::class, 'recycle_member'])->name('admin.recycle_member');
    Route::get('/forcedelete/member/{id}', [AdminController::class, 'forcedelete_member'])->name('admin.forcedeletemember');
    Route::get('/recovery/member/{id}', [AdminController::class, 'recovery_member'])->name('admin.recoverymember');
    Route::post('/multiple-recovery-member', [AdminController::class, 'multiple_recovery_member'])->name('admin.multiple-recovery-member');
    Route::post('/multiple-force-delete-member', [AdminController::class, 'multiple_force_delete_member'])->name('admin.multiple-force-delete-member');
    Route::post('/recovery-all-member', [AdminController::class, 'recovery_all_member'])->name('admin.recovery-all-member');
    Route::get('/force-delete-all-member', [AdminController::class, 'force_delete_all_member'])->name('admin.force-delete-all-member');

    // Export & Import
    Route::get('/export-member-xlsx', [AdminController::class, 'export_member_xlsx'])->name('admin.export-member-xlsx');
    Route::get('/export-member-csv', [AdminController::class, 'export_member_csv'])->name('admin.export-member-csv');
    Route::get('/export-member-tsv', [AdminController::class, 'export_member_tsv'])->name('admin.export-member-tsv');
    Route::get('/export-member-ods', [AdminController::class, 'export_member_ods'])->name('admin.export-member-ods');
    Route::get('/export-member-pdf', [AdminController::class, 'export_member_pdf'])->name('admin.export-member-pdf');
    Route::post('/import-member-xlsx', [AdminController::class, 'import_member_xlsx'])->name('admin.import-member-xlsx');



    // Washing Data
    Route::get('/admin-washing-data', [AdminController::class, 'admin_washing_data'])->name('admin.washingdata');

    // Pricing
    Route::get('/pricing', [AdminController::class, 'pricing'])->name('admin.pricing');
});

Route::middleware(['role:ceo'])->group(function () {
    Route::get('/ceo-dashboard', [CeoController::class, 'dashboard'])->name('ceo.dashboard');
});

Route::middleware(['role:super_admin'])->group(function () {
    Route::get('/superadmin-dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
    Route::get('/manage-admin', [SuperAdminController::class, 'manage_admin'])->name('superadmin.manageadmin');
    Route::get('/superadmin-washing-data', [SuperAdminController::class, 'superadmin_washing_data'])->name('superadmin.washingdata');
});

// Route::middleware(['role:employee|admin|ceo|super_admin'])->group(function() {
//     Route::get('/editprofile/staff/id', [GeneralController::class, 'editprofile'])->name('editprofile');
// });

Route::get('/', function () {
    return view('member.pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
