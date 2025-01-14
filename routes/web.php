<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\QrImageController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('qr-codes')->group(function() {
    Route::controller(QrImageController::class)->group(function () {
        Route::get('/create',           'create')->name('qr_codes.create');
        Route::post('/store',           'store')->name('qr_codes.store');
        Route::get('/{uuid}/show',      'show')->name('qr_codes.show'); 
        Route::get('/{uuid}/download',  'download')->name('qr_codes.download');
        Route::get('/{uuid}/scan',      'scan')->name('qr_codes.scan');
    });
});


Route::post('/',  ContactController::class . '@submit')->name('contact.submit');
