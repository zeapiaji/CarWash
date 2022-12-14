<?php

use App\Models\Entry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CeoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;

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
Route::get('/', [UserController::class, 'landing_page']);
Route::post('/image/user/{id}', [GeneralController::class, 'image']);

Route::get('/history/transaction', [AdminController::class, 'history_member']);
Route::get('/history/transaction/{id}', [AdminController::class, 'history_transaction']);
Route::get('/transaction/download/{id}', [AdminController::class, 'transaction_download']);
Route::middleware(['role:member'])->group(function () {
    Route::prefix('member')->group(function () {
        Route::get('/edit/car/{id}', [MemberController::class, 'edit_car_member']);
        Route::post('/update/car', [MemberController::class, 'update_car_member']);
        Route::get('/edit/{id}', [MemberController::class, 'edit_member']);
        Route::post('/update', [MemberController::class, 'update_member']);
        Route::get('/delete', [MemberController::class, 'delete_member']);
    });
    Route::get('/member-home', [MemberController::class, 'member_home'])->name('member.home');
});

Route::middleware(['role:cashier'])->group(function () {
    Route::get('/cashier-dashboard', [CashierController::class, 'cashier_dashboard'])->name('cashier.dashboard');
    Route::get('/transaction', [CashierController::class, 'transaction'])->name('cashier.transaction');
    Route::get('/entry/list', [CashierController::class, 'entry_list'])->name('cashier.entry_list');
    Route::get('/export/invoice/{id}', [CashierController::class, 'export_invoice']);
});

Route::prefix('doorsmeer')->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/', [AdminController::class, 'manage_doorsmeer']);
        Route::get('/add', [AdminController::class, 'add_doorsmeer']);
        Route::get('/edit/{id}', [AdminController::class, 'edit_doorsmeer']);
        Route::post('/store', [AdminController::class, 'store_doorsmeer']);
        Route::post('/update/{id}', [AdminController::class, 'update_doorsmeer']);
        Route::get('/delete/{id}', [AdminController::class, 'delete_doorsmeer']);
        Route::get('/multiple/delete', [AdminController::class, 'multiple_delete_doorsmeer'])->name('multiple_delete_doorsmeer');

    });
});

Route::middleware(['role:admin|super_admin'])->group(function () {
    // cashier
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard_table'])->name('admin.dashboard');

    Route::get('/manage-cashier', [AdminController::class, 'manage_cashier'])->name('admin.managecashier');
    Route::get('/detail/cashier/{id}', [AdminController::class, 'detail_cashier'])->name('admin.detailcashier');
    Route::get('/cashier/input', [AdminController::class, 'input_cashier'])->name('admin.inputcashier');
    Route::post('/create/cashier', [AdminController::class, 'store_cashier'])->name('admin.storecashier');
    Route::get('/edit/cashier/{id}', [AdminController::class, 'edit_cashier'])->name('admin.editcashier');
    Route::post('/update/cashier/{id}', [AdminController::class, 'update_cashier'])->name('admin.updatecashier');

    Route::get('/delete/cashier/{id}', [AdminController::class, 'delete_cashier'])->name('delete.cashier');
    Route::post('/multiple-delete/cashier', [AdminController::class, 'multiple_delete_cashier'])->name('admin.multiple-delete-cashier');

    Route::get('/recycle-cashier', [AdminController::class, 'recycle_cashier'])->name('admin.recycle_cashier');
    Route::get('/forcedelete/cashier/{id}', [AdminController::class, 'forcedelete_cashier'])->name('admin.forcedeletecashier');
    Route::get('/recovery/cashier/{id}', [AdminController::class, 'recovery_cashier'])->name('admin.recoverycashier');
    Route::get('/recovery-all-cashier', [AdminController::class, 'recovery_all_cashier'])->name('admin.recovery-all-cashier');
    Route::get('/force-delete-all-cashier', [AdminController::class, 'force_delete_all_cashier'])->name('admin.force-delete-all-cashier');

    Route::get('/export-cashier-xlsx', [AdminController::class, 'export_cashier_xlsx'])->name('cashier.export-cashier-xlsx');
    Route::get('/export-cashier-csv', [AdminController::class, 'export_cashier_csv'])->name('cashier.export-cashier-csv');
    Route::get('/export-cashier-pdf', [AdminController::class, 'export_cashier_pdf'])->name('cashier.export-cashier-pdf');

    // Member
    Route::get('/manage-member', [AdminController::class, 'manage_member'])->name('admin.managemember');
    Route::get('/detail/member/{id}', [AdminController::class, 'detail_member'])->name('admin.detailmember');
    Route::get('/add/member/', [AdminController::class, 'add_member'])->name('admin.addmember');
    Route::get('/edit/member/{id}', [AdminController::class, 'edit_member'])->name('admin.editmember');
    Route::post('/update/member', [AdminController::class, 'update_member'])->name('admin.updatemember');

    Route::get('/delete/member/{id}', [AdminController::class, 'delete_member'])->name('admin.deletemember');
    Route::get('/recycle-member', [AdminController::class, 'recycle_member'])->name('admin.recycle_member');
    Route::get('/forcedelete/member/{id}', [AdminController::class, 'forcedelete_member'])->name('admin.forcedeletemember');
    Route::get('/recovery/member/{id}', [AdminController::class, 'recovery_member'])->name('admin.recoverymember');
    Route::get('/recovery-all-member', [AdminController::class, 'recovery_all_member'])->name('admin.recovery-all-member');
    Route::get('/force-delete-all-member', [AdminController::class, 'force_delete_all_member'])->name('admin.force-delete-all-member');

    // Export
    Route::get('/export-member-xlsx', [AdminController::class, 'export_member_xlsx'])->name('admin.export-member-xlsx');
    Route::get('/export-member-csv', [AdminController::class, 'export_member_csv'])->name('admin.export-member-csv');
    Route::get('/export-member-pdf', [AdminController::class, 'export_member_pdf'])->name('admin.export-member-pdf');


    // Washing Data
    Route::get('/admin-washing-data', [AdminController::class, 'admin_washing_data'])->name('admin.washingdata');
});

Route::middleware(['role:ceo'])->group(function () {
    Route::get('/ceo-dashboard', [CeoController::class, 'dashboard'])->name('ceo.dashboard');
});

Route::middleware(['role:super_admin||admin||cashier'])->group(function () {
    Route::get('/transaction/subsidiary/{id}', [SuperAdminController::class, 'transaction_subsidiary']);
    Route::get('/washing/subsidiary/{id}', [SuperAdminController::class, 'washing_subsidiary']);
});

Route::middleware(['role:super_admin'])->group(function () {
    Route::get('/superadmin-dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');

    Route::get('/manage-admin', [SuperAdminController::class, 'manage_admin'])->name('superadmin.manageadmin');
    Route::get('/detail/admin/{id}', [SuperAdminController::class, 'detail_admin'])->name('superadmin.detail.admin');

    Route::get('/add/admin', [SuperAdminController::class, 'add_admin'])->name('superadmin.add.admin');
    Route::post('/create/admin', [SuperAdminController::class, 'create_admin'])->name('superadmin.create.admin');
    Route::get('/edit/admin/{id}', [SuperAdminController::class, 'edit_admin'])->name('superadmin.edit.admin');
    Route::post('/update/admin/{id}', [SuperAdminController::class, 'update_admin'])->name('superadmin.update.admin');
    Route::get('/delete/admin/{id}', [SuperAdminController::class, 'delete_admin'])->name('superadmin.delete.admin');
    Route::post('/multiple-delete-admin', [SuperAdminController::class, 'multiple_delete_admin'])->name('superadmin.multiple-delete-admin');

    Route::get('/recycle-admin', [SuperAdminController::class, 'recycle_admin'])->name('superadmin.recycle-admin');
    Route::get('/recovery/admin/{id}', [SuperAdminController::class, 'recovery_admin'])->name('superadmin.recoveradmin');
    Route::get('/forcedelete/admin/{id}', [SuperAdminController::class, 'force_delete_admin'])->name('superadmin.forcedeleteadmin');
    Route::get('/recovery-all-admin', [SuperAdminController::class, 'recovery_all_admin'])->name('superadmin.recovery-all-admin');
    Route::get('/force-delete-all-admin', [SuperAdminController::class, 'force_delete_all_admin'])->name('superadmin.force-delete-all-admin');



    // Pricing
    Route::get('/pricing', [SuperAdminController::class, 'pricing']);
    Route::prefix('/pricing')->group(function () {
        Route::get('/{id}', [SuperAdminController::class, 'manage_pricing']);
        Route::get('/edit/{id}', [SuperAdminController::class, 'edit_pricing']);
        Route::get('/edit/price/{id}', [SuperAdminController::class, 'edit_price']);
        Route::post('/update/pricing/{id}', [SuperAdminController::class, 'update_pricing']);
        Route::post('/update/price/{id}', [SuperAdminController::class, 'update_price']);
        Route::get('/delete/{id}', [SuperAdminController::class, 'delete_pricing']);
        Route::get('/multiple-delete', [SuperAdminController::class, 'multiple_delete_pricing'])->name('multiple_delete_pricing');
        Route::get('/add/pricing-1', [SuperAdminController::class, 'add_pricing_1'])->name('admin.add.pricing.1');
        Route::get('/add/pricing-2', [SuperAdminController::class, 'add_pricing_2'])->name('admin.add.pricing.2');
        Route::get('/add/pricing-3', [SuperAdminController::class, 'add_pricing_3'])->name('admin.add.pricing.3');
        Route::get('/add/pricing-4', [SuperAdminController::class, 'add_pricing_4'])->name('admin.add.pricing.4');
        Route::get('/add/pricing-1', [SuperAdminController::class, 'add_pricing_1'])->name('admin.add.pricing.1');
    });
    Route::post('/create/pricing-1', [SuperAdminController::class, 'create_pricing_1'])->name('admin.create.pricing.1');
    Route::post('/create/pricing-2', [SuperAdminController::class, 'create_pricing_2'])->name('admin.create.pricing.2');
    Route::post('/create/pricing-3', [SuperAdminController::class, 'create_pricing_3'])->name('admin.create.pricing.3');
    Route::post('/create/pricing-4', [SuperAdminController::class, 'create_pricing_4'])->name('admin.create.pricing.4');



    Route::get('/all-transaction', [SuperAdminController::class, 'all_transaction']);
    Route::get('/superadmin-washing-data', [SuperAdminController::class, 'superadmin_washing_data'])->name('superadmin.washingdata');

    // Subsidiary
    Route::get('/show-subsidiaries', [SuperAdminController::class, 'show_subsidiary'])->name('superadmin.show.subsidiary');
    Route::get('/manage-subsidiaries', [SuperAdminController::class, 'manage_subsidiary'])->name('superadmin.manage.subsidiary');
    Route::get('/detail/subsidiary/{id}', [SuperAdminController::class, 'detail_subsidiary'])->name('superadmin.detail.subsidiary');

    Route::get('/add/subsidiary', [SuperAdminController::class, 'add_subsidiary'])->name('superadmi.add.subsidiary');
    Route::post('/create/subsidiary', [SuperAdminController::class, 'create_subsidiary'])->name('superadmi.create.subsidiary');

    Route::get('/edit/subsidiary/{id}', [SuperAdminController::class, 'edit_subsidiary'])->name('superadmin.edit.subsidiary');
    Route::post('/update/subsidiary/{id}', [SuperAdminController::class, 'update_subsidiary'])->name('superadmin.update.subsidiary');
    Route::get('/delete/subsidiary/{id}', [SuperAdminController::class, 'delete_subsidiary'])->name('superadmin.delete.subsidiary');

    // Route::get('/recycle-subsidiary', [SuperAdminController::class, 'recycle_subsidiary'])->name('superadmin.recycle-subsidiary');
    // Route::post('/multiple-recovery-subsidiary', [SuperAdminController::class, 'multiple_recovery_subsidiary'])->name('superadmin.multiple-recovery-subsidiary');
    Route::get('/recycle-subsidiary', [SuperAdminController::class, 'recycle_subsidiary'])->name('superadmin.recyclesubsidiary');
    Route::post('/recovery/subsidiary/{id}', [SuperAdminController::class, 'recovery_subsidiary'])->name('superadmin.recoversubsidiary');
    Route::post('/forcedelete/subsidiary/{id}', [SuperAdminController::class, 'force_delete_subsidiary'])->name('superadmin.forcedeletesubsidiary');
    Route::post('/multiple-recovery-subsidiary', [SuperAdminController::class, 'multiple_recovery_subsidiary'])->name('superadmin.multiple-recovery-subsidiary');
    Route::post('/multiple-force-delete-subsidiary', [SuperAdminController::class, 'multiple_force_delete_subsidiary'])->name('superadmin.multiple-force-delete-subsidiary');
    Route::post('/recovery-all-subsidiary', [SuperAdminController::class, 'recovery_all_subsidiary'])->name('superadmin.recovery-all-subsidiary');
    Route::post('/force-delete-all-subsidiary', [SuperAdminController::class, 'force_delete_all_subsidiary'])->name('superadmin.force-delete-all-subsidiary');

    // Export t
    Route::get('/export-admin-xlsx', [SuperAdminController::class, 'export_admin_xlsx'])->name('superadmin.export-admin-xlsx');
    Route::get('/export-admin-csv', [SuperAdminController::class, 'export_admin_csv'])->name('superadmin.export-admin-csv');
    Route::get('/export-admin-pdf', [SuperAdminController::class, 'export_admin_pdf'])->name('superadmin.export-admin-pdf');
});

Route::prefix('entry')->group(function () {
    Route::get('/customer', [EntryController::class, 'entry_customer'])->name('entry.customer');
    Route::post('/customer-post', [EntryController::class, 'entry_customer_post'])->name('entry.customer_post');
    Route::get('/wash/{id}/entry/{entryId}', [EntryController::class, 'entry_wash'])->name('entry.wash');
    Route::get('/wash/payment/{id}', [EntryController::class, 'entry_wash_payment'])->name('entry.wash.payment');
    Route::get('/wash/done/{id}', [EntryController::class, 'entry_wash_done'])->name('entry.wash.done');
    Route::get('/wash/cancel/{id}', [EntryController::class, 'entry_wash_cancel'])->name('entry.wash.cancel');
    Route::get('/delete/{id}', [EntryController::class, 'entry_delete'])->name('entry.delete');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
