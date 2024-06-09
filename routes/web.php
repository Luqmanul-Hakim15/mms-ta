<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncomingLetterController;
use App\Http\Controllers\HeaderTemplateController;
use App\Http\Controllers\FooterTemplateController;
use App\Http\Controllers\VerificatorTemplateController;

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
Route::get('/', function () {
    return redirect('/login');
});
Route::get('register', [AdminController::class, 'showRegistrationForm'])->name('register');

Route::post('/login-post', [AuthController::class, 'login'])->name('login-post');
Route::post('/register-post', [AuthController::class, 'register'])->name('register-post');
Route::group(['middleware' => ['auth']], function () { 
    Route::get('/incomingletter', [AdminController::class, 'index'])->name('surat-masuk');
    Route::get('/incomingletter/add', [AdminController::class, 'addMail'])->name('addmail');
    Route::get('/outgoingmail', [AdminController::class, 'outgoingmails'])->name('outmail');
    Route::get('/createmail', [AdminController::class, 'createmail'])->name('createmail');
    Route::get('/previewmail', [AdminController::class, 'previewemail'])->name('premail');
    Route::get('/mailshare', [AdminController::class, 'sharemail'])->name('mailshare');
    Route::get('/incomingmails', [AdminController::class, 'incomingmails'])->name('admin.incomingmail');
    Route::post('/incomingmails-post', [IncomingLetterController::class, 'create'])->name('incomingmail-post');
    Route::get('/outgoingmails', [AdminController::class, 'outgoingmails'])->name('admin.outgoingmail');
    Route::get('/templatecategories', [AdminController::class, 'templatecategories'])->name('admin.templatecategory');
    Route::get('/templateheaders', [AdminController::class, 'templateheaders'])->name('admin.templateheader');
    Route::post('/header-post', [HeaderTemplateController::class, 'create'])->name('header-post');
    Route::get('/templatefooters', [AdminController::class, 'templatefooters'])->name('admin.templatefooter');
    Route::post('/footer-post', [FooterTemplateController::class, 'create'])->name('footer-post');
    Route::get('/verifikators', [AdminController::class, 'verifikators'])->name('admin.verifikator');
    Route::get('/addverifikators', [AdminController::class, 'addverifikators'])->name('admin.addverifikator');
    Route::post('/verificator-post', [VerificatorTemplateController::class, 'create'])->name('verificator-post');
    Route::get('/account-profile', [AdminController::class, 'profil'])->name('admin.profil');
    Route::get('/change-password', [AdminController::class, 'change'])->name('admin.change');
    Route::get('/users', [AdminController::class, 'user'])->name('admin.users');
    Route::get('/addusers', [AdminController::class, 'adduser'])->name('admin.adduser');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});

// Route::resource('superadmin', UserController::class, 'superadmin');