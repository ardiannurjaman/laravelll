<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/bio', function () {
    return view('bio', [
        'title' => 'bio'
    ]);
});

Route::get('/wel', function () {
    return view('welcome', [
        'title' => 'welcome'
    ]);
});

// Route::get('/con', function () {
//     return view('template.contact', [
//         'title' => 'contact'
//     ]);
// });

Route::get('/index', function () {
    return view('template.index', [
        'title' => 'index'
    ]);
});

Route::get('/con', [ContactController::class, 'index']);
Route::post('/con', [ContactController::class, 'store']);

