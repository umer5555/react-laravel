<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StickerController;
 
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
    return view('welcome');
});
Route::get('/sticker', [StickerController::class, 'showStickerPage']);

Route::post('/submit-form', function () {
    // Process form submission here if needed, like saving data

    // Redirect to the finish route after form submission
    return redirect()->route('finish');
})->name('submitForm');

Route::get('/finish', function () {
    return view('finish'); // Return the finish view after form submission
})->name('finish');

 