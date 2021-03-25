<?php

use App\Models\Es;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('supplier', function () {
    return view('supplier');
});
Route::get('back/supplier', function () {
    $suppliers = \App\Models\Es::all();
    return view('back/supplier',compact('suppliers'));

});
Route::get('back/employee', function () {
    $employees = \App\Models\employee::all();
//    dd($employees);
    return view('back/employee',compact('employees'));
});
Route::get('employee', function () {
    return view('employee');
});
Route::get('auth/client_login', function () {
    return view('auth/client_login');
});
Route::get('back/client_dash', function () {
    $employees = \App\Models\employee::all();
    $suppliers = \App\Models\Es::all();
    return view('back/client_dash',compact('employees','suppliers'));
});
Route::post('supplier/store',[App\Http\Controllers\EsController::class, 'store'])->name('supplier.store');
Route::post('employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
