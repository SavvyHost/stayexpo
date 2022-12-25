<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/search', function () {
    return view('/search');

})->name('search');


Route::get('/advantage', function () {
    return view('advantage');

})->name('advantage');


Route::get('/about', function () {
    return view('about-us');

})->name('about');


Route::get('/contact-us', function () {
    return view('contact-us');

})->name('contacts');

Route::get('/registration', function () {
    return view('registration');

})->name('register');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');

})->name('policy');

Route::get('/terms-of-use', function () {
    return view('terms-of-use');

})->name('terms');

Route::get('/faq', function () {
    return view('faq');

})->name('faq');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
