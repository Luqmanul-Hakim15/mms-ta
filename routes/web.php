<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncomingLetterController;
use App\Http\Controllers\HeaderTemplateController;
use App\Http\Controllers\FooterTemplateController;
use App\Http\Controllers\VerificatorTemplateController;
use App\Http\Controllers\OutgoingLetterController;

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
Route::get('/bast', [AdminController::class, 'bastLetter'])->name('surat.bast');

Route::post('/login-post', [AuthController::class, 'login'])->name('login-post');
Route::post('/register-post', [AuthController::class, 'register'])->name('register-post');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/incoming-letter', [AdminController::class, 'index'])->name('surat-masuk');
    Route::get('/incoming-letter/add', [AdminController::class, 'addMail'])->name('addmail');

    Route::get('/outgoing-mail', [AdminController::class, 'outgoingmails'])->name('outmail');
    Route::get('/new-letter', [AdminController::class, 'createmail'])->name('createmail');
    Route::get('/letter-preview ', [AdminController::class, 'previewemail'])->name('premail');
    Route::get('/mailshare', [AdminController::class, 'sharemail'])->name('mailshare');
    Route::get('/incomingmails', [AdminController::class, 'incomingmails'])->name('admin.incomingmail');

    Route::post('/incomingmails-post', [IncomingLetterController::class, 'create'])->name('incomingmail-post');
    Route::post('/delete-incoming/{id}', [IncomingLetterController::class, 'delete'])->name('delete.incoming');

    Route::get('/outgoingmails', [AdminController::class, 'outgoingmails'])->name('admin.outgoingmail');
    Route::get('/templatecategories', [AdminController::class, 'templatecategories'])->name('admin.templatecategory');

    Route::get('/templateheaders', [AdminController::class, 'templateheaders'])->name('admin.templateheader');
    Route::post('/header-post', [HeaderTemplateController::class, 'create'])->name('header-post');
    Route::post('/update-default-header/{id}', [HeaderTemplateController::class, 'updateDefault'])->name('update-default-header');
    Route::post('/delete-header/{id}', [HeaderTemplateController::class, 'delete'])->name('delete.header');
    Route::post('/header/update/{id}', [HeaderTemplateController::class, 'update'])->name('header-update');

    Route::get('/templatefooters', [AdminController::class, 'templatefooters'])->name('admin.templatefooter');
    Route::post('/delete-footers/{id}', [FooterTemplateController::class, 'delete'])->name('delete.footer');
    Route::post('/footer-post', [FooterTemplateController::class, 'create'])->name('footer-post');
    Route::post('/update-default/{id}', [FooterTemplateController::class, 'updateDefault'])->name('update-default');
    Route::post('/footer/update/{id}', [FooterTemplateController::class, 'update'])->name('footer-update');

    Route::get('/verifikators', [AdminController::class, 'verifikators'])->name('admin.verifikator');
    Route::get('/addverifikators', [AdminController::class, 'addverifikators'])->name('admin.addverifikator');
    Route::get('/updateverifikators', [VerificatorTemplateController::class, 'index'])->name('admin.updateverifikator');
    Route::post('/verificator-post', [VerificatorTemplateController::class, 'create'])->name('verificator-post');
    Route::get('/verificator/{id}/edit', [VerificatorTemplateController::class, 'edit'])->name('verificator.edit');
    Route::post('/verificator/{id}/update', [VerificatorTemplateController::class, 'update'])->name('verificator.update');
    Route::post('/verificator-delete/{id}', [VerificatorTemplateController::class, 'delete'])->name('verificator.delete');

    Route::get('/account-profile', [AdminController::class, 'profil'])->name('admin.profil');
    Route::post('/profile/update', [AdminController::class, 'updatedProfil'])->name('profile.update');


    Route::get('/internLetter/{id}', [AdminController::class, 'internLetter'])->name('surat.internship');
    Route::post('/intern-form', [OutgoingLetterController::class, 'store'])->name('form.store');
    Route::delete('internLetter/{id}', [OutgoingLetterController::class, 'destroy'])->name('internLetter.destroy');


    Route::get('/change-password', [AdminController::class, 'change'])->name('admin.change');
    Route::post('/change-password-post', [AdminController::class, 'changePassword'])->name('change.password');

    Route::get('/users', [AdminController::class, 'user'])->name('admin.users');
    Route::get('/addusers', [AdminController::class, 'adduser'])->name('admin.adduser');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route::resource('superadmin', UserController::class, 'superadmin');