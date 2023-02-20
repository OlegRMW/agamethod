<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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
    return view('index');
})->name('index');
Route::get('/course', function () {
    return view('course');
})->name('course');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/consultation', function () {
    return view('consultation');
})->name('consultation');

Route::post("send-email", [MailController::class, "composeEmail"])->name("send-email");



