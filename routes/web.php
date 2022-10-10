<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CeoController;
use App\Http\Controllers\CashierController;
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

Route::post('/register-member', [GeneralController::class, 'register_member'])->name('register-member');

Route::post('/image/user/{id}', [GeneralController::class, 'image']);

Route::middleware(['role:member'])->group(function () {
    //
});

Route::middleware(['role:cashier'])->group(function () {
    Route::get('/cashier-dashboard', [CashierController::class, 'dashboard'])->name('cashier.dashboard');
    Route::get('/transaction', [CashierController::class, 'transaction'])->name('cashier.transaction');
    Route::get('/queue', [CashierController::class, 'queue'])->name('cashier.queue');
});

Route::middleware(['role:admin|super_admin'])->group(function () {
    // Dashboard
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // cashier
    Route::get('/manage-cashier', [AdminController::class, 'manage_cashier'])->name('admin.managecashier');
    Route::get('/detail/cashier/{id}', [AdminController::class, 'detail_cashier'])->name('admin.detailcashier');
    Route::get('/add/cashier', [AdminController::class, 'input_cashier'])->name('admin.inputcashier');
    Route::post('/create-cashier', [AdminController::class, 'store_cashier'])->name('admin.storecashier');
    Route::get('/edit/cashier/{id}', [AdminController::class, 'edit_cashier'])->name('admin.editcashier');
    Route::post('/update/cashier/{id}', [AdminController::class, 'update_cashier'])->name('admin.updatecashier');

    Route::get('/delete/cashier/{id}', [AdminController::class, 'delete_cashier'])->name('admin.deletecashier');
    Route::post('/multiple-delete/cashier', [AdminController::class, 'multiple_delete_cashier'])->name('admin.multiple-delete-cashier');

    Route::get('/recycle-cashier', [AdminController::class, 'recycle_cashier'])->name('admin.recycle_cashier');
    Route::get('/forcedelete/cashier/{id}', [AdminController::class, 'forcedelete_cashier'])->name('admin.forcedeletecashier');
    Route::get('/recovery/cashier/{id}', [AdminController::class, 'recovery_cashier'])->name('admin.recoverycashier');
    Route::post('/multiple-recovery-cashier', [AdminController::class, 'multiple_recovery_cashier'])->name('admin.multiple-recovery-cashier');
    Route::post('/multiple-force-delete-cashier', [AdminController::class, 'multiple_force_delete_cashier'])->name('admin.multiple-force-delete-cashier');
    Route::post('/recovery-all-cashier', [AdminController::class, 'recovery_all_cashier'])->name('admin.recovery-all-cashier');
    Route::get('/force-delete-all-cashier', [AdminController::class, 'force_delete_all_cashier'])->name('admin.force-delete-all-cashier');

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
    Route::get('/export-member-pdf', [AdminController::class, 'export_member_pdf'])->name('admin.export-member-pdf');
    Route::post('/import-member-xlsx', [AdminController::class, 'import_member_xlsx'])->name('admin.import-member-xlsx');

    // Washing Data
    Route::get('/admin-washing-data', [AdminController::class, 'admin_washing_data'])->name('admin.washingdata');
});

Route::middleware(['role:ceo'])->group(function () {
    Route::get('/ceo-dashboard', [CeoController::class, 'dashboard'])->name('ceo.dashboard');
});

Route::middleware(['role:super_admin'])->group(function() {
    Route::get('/superadmin-dashboard', [SuperAdminController::class,'dashboard'])->name('superadmin.dashboard');

    Route::get('/manage-admin', [SuperAdminController::class,'manage_admin'])->name('superadmin.manageadmin');
    Route::get('/detail/admin/{id}', [SuperAdminController::class,'detail_admin'])->name('superadmin.detail.admin');

    Route::get('/add/admin' , [SuperAdminController::class, 'add_admin'])->name('superadmin.add.admin');
    Route::post('/create/admin' , [SuperAdminController::class, 'create_admin'])->name('superadmin.create.admin');
    Route::get('/edit/admin/{id}',[SuperAdminController::class,'edit_admin'])->name('superadmin.edit.admin');
    Route::post('/update/admin/{id}',[SuperAdminController::class,'update_admin'])->name('superadmin.update.admin');
    Route::post('/delete/admin/{id}',[SuperAdminController::class,'delete_admin'])->name('superadmin.delete.admin');

    // Pricing
    Route::get('/pricing', [AdminController::class,'pricing'])->name('admin.pricing');

    Route::get('/superadmin-washing-data', [SuperAdminController::class,'superadmin_washing_data'])->name('superadmin.washingdata');

    // Subsidiary
    Route::get('/manage-subsidiaries', [SuperAdminController::class, 'manage_subsidiary'])->name('superadmin.manage.subsidiary');
    Route::get('/detail/subsidiary/{id}', [SuperAdminController::class, 'detail_subsidiary'])->name('superadmin.detail.subsidiary');
    Route::get('/edit/subsidiary/{id}', [SuperAdminController::class, 'edit_subsidiary'])->name('superadmin.edit.subsidiary');
    Route::post('/update/subsidiary/{id}', [SuperAdminController::class, 'update_subsidiary'])->name('superadmin.update.subsidiary');
    Route::get('/delete/subsidiary/{id}', [SuperAdminController::class, 'delete_subsidiary'])->name('superadmin.delete.subsidiary');

    // Export & Import
    Route::get('/export-admin-xlsx', [SuperAdminController::class, 'export_admin_xlsx'])->name('admin.export-admin-xlsx');
    Route::get('/export-admin-csv', [SuperAdminController::class, 'export_admin_csv'])->name('admin.export-admin-csv');
    Route::get('/export-admin-pdf', [SuperAdminController::class, 'export_admin_pdf'])->name('admin.export-admin-pdf');
    Route::post('/import-admin-xlsx', [SuperAdminController::class, 'import_adminr_xlsx'])->name('admin.import-admin-xlsx');
});

// Route::middleware(['role:cashier|admin|ceo|super_admin'])->group(function() {
//     Route::get('/editprofile/staff/id', [GeneralController::class, 'editprofile'])->name('editprofile');
// });

Route::get('/', function () {
    return view('member.pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
