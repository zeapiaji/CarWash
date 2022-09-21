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

Route::middleware(['role:user'])->group(function() {
    //
});

Route::middleware(['role:employee'])->group(function() {
    Route::get('/employee-dashboard', [EmployeeController::class,'dashboard'])->name('employee.dashboard');
    Route::get('/transaction', [EmployeeController::class,'transaction'])->name('employee.transaction');
    Route::get('/queue', [EmployeeController::class,'queue'])->name('employee.queue');
});

Route::middleware(['role:admin'])->group(function() {
    // Dashboard
    Route::get('/admin-dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');

    // Employee
    Route::get('/manage-employee', [AdminController::class,'manage_employee'])->name('admin.manageemployee');

    // Member
    Route::get('/manage-member', [AdminController::class,'manage_member'])->name('admin.managemember');
    Route::get('/add/member/', [AdminController::class,'add_member'])->name('admin.addmember');
    Route::get('/edit/member/{id}', [AdminController::class,'edit_member'])->name('admin.editmember');
    Route::post('/update/member', [AdminController::class,'update_member'])->name('admin.updatemember');
    Route::post('/delete/member/{id}', [AdminController::class,'delete_member'])->name('admin.deletemember');

    // Washing Data
    Route::get('/admin-washing-data', [AdminController::class,'admin_washing_data'])->name('admin.washingdata');

    // Pricing
    Route::get('/pricing', [AdminController::class,'pricing'])->name('admin.pricing');
});

Route::middleware(['role:ceo'])->group(function() {
    Route::get('/ceo-dashboard', [CeoController::class,'dashboard'])->name('ceo.dashboard');
});

Route::middleware(['role:super_admin'])->group(function() {
    Route::get('/superadmin-dashboard', [SuperAdminController::class,'dashboard'])->name('superadmin.dashboard');
    Route::get('/manage-admin', [SuperAdminController::class,'manage_admin'])->name('superadmin.manageadmin');
    Route::get('/superadmin-washing-data', [SuperAdminController::class,'superadmin_washing_data'])->name('superadmin.washingdata');
});

// Route::middleware(['role:employee|admin|ceo|super_admin'])->group(function() {
//     Route::get('/editprofile/staff/id', [GeneralController::class, 'editprofile'])->name('editprofile');
// });

Route::get('/', function() {
    return view('member.pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
