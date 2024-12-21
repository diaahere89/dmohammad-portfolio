<?php

use App\Http\Controllers\ContactController;
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
    return view('dmohammad', ['web_name' => env('APP_NAME', 'Diaa Mohammad | PHP Developer')]);
});


Route::post('/',  ContactController::class . '@submit')->name('contact.submit');

Route::get('/E2Ennyz8ocGUEYtEhdr4VVtOU1f34', function() {
    return view('dmohammad', ['web_name' => env('APP_NAME', 'Diaa Mohammad | PHP Developer')]);
});

Route::get('/{any}', function() {
    return redirect('/');
})->where('any', '.*');