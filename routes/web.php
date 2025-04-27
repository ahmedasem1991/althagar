<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/change-lang', function () {
    $lang = request()->get('lang');

    if (in_array($lang, ['en', 'ar'])) {
        session()->put('locale', $lang);
    }

    return redirect()->back();
})->name('changeLang');

Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
