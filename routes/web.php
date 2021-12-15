<?php

use Illuminate\Support\Facades\Route;
use App\Models\Goal;


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
    $goals = Goal::all();
    return view("donationDashboard", compact('goals'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('donation/dashboard', [App\Http\Controllers\DonationController::class, 'index'])->name('index');
Route::get('admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
Route::get('add/goal', [App\Http\Controllers\AdminController::class, 'addGoal'])->name('addGoal');
Route::get('my/donations', [App\Http\Controllers\DonationController::class, 'myDonations'])->name('myDonations');
