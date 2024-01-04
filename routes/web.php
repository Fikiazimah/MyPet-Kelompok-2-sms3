<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LandingController::class, 'index']);
    Route::get('auth', [AuthController::class, 'showLoginForm'])->name('auth');
    Route::post('auth', [AuthController::class, 'Login']);

    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/registration-success', [AuthController::class,'registrationSuccess'])->name('registration.success');

    //Client
    Route::get('/clientdashboard',[ClientController::class,'index']);
    Route::get('/clientlayanan',[ClientController::class,'layanan']);
    Route::get('/clientprofil',[ClientController::class,'profil']);
    Route::get('/clienttentang',[ClientController::class,'tentang']);
    Route::get('/clienttestimoni',[ClientController::class,'testimoni']);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);

Route::get('/employees/tambah', [EmployeeController::class, 'tambah']);
Route::resource('/employees', EmployeeController::class);
Route::post('/employees/simpan', [EmployeeController::class, 'simpan']);
Route::get('/employees/tampil/{id}', [EmployeeController::class, 'tampil']);
Route::get('/employees/ubah/{id}', [EmployeeController::class, 'ubah']);
Route::put('/employees/perbarui/{id}', [EmployeeController::class, 'perbarui']);
Route::get('/employees/hapus/{id}', [EmployeeController::class, 'hapus']);

Route::get('/hewans/tambah', [HewanController::class, 'tambah']);
Route::resource('/hewans', HewanController::class);
Route::post('/hewans/simpan', [HewanController::class, 'simpan']);
Route::get('/hewans/tampil/{id}', [HewanController::class, 'tampil']);
Route::get('/hewans/ubah/{id}', [HewanController::class, 'ubah']);
Route::put('/hewans/perbarui/{id}', [HewanController::class, 'perbarui']);
Route::get('/hewans/hapus/{id}', [HewanController::class, 'hapus']);

Route::get('/transaksis/tambah', [TransaksiController::class, 'tambah']);
Route::resource('/transaksis', TransaksiController::class);
Route::post('/transaksis/simpan', [TransaksiController::class, 'simpan']);
Route::get('/transaksis/tampil/{id}', [TransaksiController::class, 'tampil']);
Route::get('/transaksis/ubah/{id}', [TransaksiController::class, 'ubah']);
Route::put('/transaksis/perbarui/{id}', [TransaksiController::class, 'perbarui']);
Route::get('/transaksis/hapus/{id}', [TransaksiController::class, 'hapus']);

Route::get('/absens/tambah', [AbsenController::class, 'tambah']);
Route::resource('/absens', AbsenController::class);
Route::post('/absens/simpan', [AbsenController::class, 'simpan']);
Route::get('/absens/tampil/{id}', [AbsenController::class, 'tampil']);
Route::get('/absens/ubah/{id}', [AbsenController::class, 'ubah']);
Route::put('/absens/perbarui/{id}', [AbsenController::class, 'perbarui']);
Route::get('/absens/hapus/{id}', [AbsenController::class, 'hapus']);

});

Route::get('/logout', [AuthController::class, 'logout']);
