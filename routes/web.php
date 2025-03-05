<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\QrImageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::get('/', function () {
    return view('dmohammad');
})->name('home');

Route::get('/download-cv',  function() {
    return response()->download(public_path('docs/DMohammad-it-en-2024-06.pdf'));
})->name('download.cv');

Route::post('/',  ContactController::class . '@submit')->middleware(ProtectAgainstSpam::class)->name('contact.submit');

Route::name('qr_codes.')->prefix('qr-codes')->group(function() {
    Route::controller(QrImageController::class)->group(function () {
        Route::get('/create',           'create')->name('create');
        Route::post('/store',           'store')->name('store');
        Route::get('/{uuid}/show',      'show')->name('show'); 
        Route::get('/{uuid}/download',  'download')->name('download');
        Route::get('/{uuid}/scan',      'scan')->name('scan');
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/qr-codes', [QrImageController::class, 'index'])->name('qr-codes.index');
});

require __DIR__.'/auth.php';
