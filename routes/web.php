<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('login');
// });

// Route::resource('/', [AdminController::class, 'index']);
Route::get('/surat-masuk', [AdminController::class, 'index'])->name('surat-masuk');
Route::get('/surat-masuk/tambah', [AdminController::class, 'addMail'])->name('addmail');
Route::get('/surat-keluar', [AdminController::class, 'outgoingmails'])->name('outmail');
Route::get('/buat-surat', [AdminController::class, 'createmail'])->name('createmail');
Route::get('/preview-surat', [AdminController::class, 'previewemail'])->name('premail');
// Route::get('incomingmails', [AdminController::class, 'incomingmails'])->name('admin.incomingmail');
// Route::get('outgoingmails', [AdminController::class, 'outgoingmails'])->name('admin.outgoingmail');
// Route::get('templatecategories', [AdminController::class, 'templatecategories'])->name('admin.templatecategory');
// Route::get('templateheaders', [AdminController::class, 'templateheaders'])->name('admin.templateheader');
// Route::get('templatefooters', [AdminController::class, 'templatefooters'])->name('admin.templatefooter');
// Route::get('verifikators', [AdminController::class, 'verifikators'])->name('admin.verifikator');
// Route::get('addverifikators', [AdminController::class, 'addverifikators'])->name('admin.addverifikator');

// Route::resource('superadmin', UserController::class, 'superadmin');