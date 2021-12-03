<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\TestDriveController;
use App\Http\Controllers\admin\AdminDashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admindashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('/testdrive', [TestDriveController::class, 'index'])->name('testdrive');
	Route::resource('/testdrivelist', TestDriveController::class);
	Route::get('testdrivelist/edit/{id}', [TestDriveController::class, 'edit'])->name('edit');
	Route::put('testdrivelist/update/{id}', [TestDriveController::class, 'update'])->name('update');
	Route::delete('testdrivelist/delete/{id}', [TestDriveController::class, 'destroy'])->name('delete');
	});