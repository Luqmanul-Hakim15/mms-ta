<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TemplateController;

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

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('register', [AdminController::class, 'showRegistrationForm'])->name('register');

Route::post('/login-post', [AuthController::class, 'login'])->name('login-post');
Route::post('/register-post', [AuthController::class, 'register'])->name('register-post');
Route::group(['middleware' => ['auth']], function () { 
    Route::get('/surat-masuk', [AdminController::class, 'index'])->name('surat-masuk');
    Route::get('/surat-masuk/tambah', [AdminController::class, 'addMail'])->name('addmail');
    Route::get('/surat-keluar', [AdminController::class, 'outgoingmails'])->name('outmail');
    Route::get('/buat-surat', [AdminController::class, 'createmail'])->name('createmail');
    Route::get('/preview-surat', [AdminController::class, 'previewemail'])->name('premail');
    Route::get('/mailshare', [AdminController::class, 'sharemail'])->name('mailshare');
    Route::get('/incomingmails', [AdminController::class, 'incomingmails'])->name('admin.incomingmail');
    Route::get('/outgoingmails', [AdminController::class, 'outgoingmails'])->name('admin.outgoingmail');
    Route::get('/templatecategories', [AdminController::class, 'templatecategories'])->name('admin.templatecategory');
    Route::get('/templateheaders', [AdminController::class, 'templateheaders'])->name('admin.templateheader');
    Route::post('/header-post', [TemplateController::class, 'headerTemplate'])->name('header-post');
    Route::get('/templatefooters', [AdminController::class, 'templatefooters'])->name('admin.templatefooter');
    Route::post('/footer-post', [TemplateController::class, 'footerTemplate'])->name('footer-post');
    Route::get('/verifikators', [AdminController::class, 'verifikators'])->name('admin.verifikator');
    Route::get('/addverifikators', [AdminController::class, 'addverifikators'])->name('admin.addverifikator');
    Route::post('/verificator-post', [TemplateController::class, 'verificatorTemplate'])->name('verificator-post');
    Route::get('/account-profile', [AdminController::class, 'profil'])->name('admin.profil');
    Route::get('/change-password', [AdminController::class, 'change'])->name('admin.change');
    Route::get('/users', [AdminController::class, 'user'])->name('admin.users');
    Route::get('/addusers', [AdminController::class, 'adduser'])->name('admin.adduser');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});

// Route::resource('superadmin', UserController::class, 'superadmin');