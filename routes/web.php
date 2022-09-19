<?php

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
Route::get('/dashboard-employee', function () {
    return view('staff.employee.pages.dashboard');
})->middleware('role:employee')->name('employee.dashboard');

Route::get('/dashboard-admin', function () {
    return view('staff.admin.pages.dashboard');
})->middleware('role:admin')->name('admin.dashboard');

Route::get('/dashboard-super-admin', function () {
    return view('staff.pages.dashboard');
})->middleware('role:super_admin')->name('super_admin.dashboard');

Route::get('/dashboard-ceo', function () {
    return view('staff.pages.dashboard');
})->middleware('role:ceo')->name('ceo.dashboard');


Route::get('/', function() {
    return view('member.pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
