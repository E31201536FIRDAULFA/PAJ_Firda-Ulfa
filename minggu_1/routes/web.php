<?php

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
    return view('servis');
}); 

Route::get('/about', function () {
    return 'Ini about yang cantik';
});

Route::get('/firdaulfa', function () {
    return view('firdaulfa');
});

/*Route::get('/vote', [VoteController::class, 'vote'])->midlleware('checkage');
});
*/



