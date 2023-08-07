<?php

use App\Http\Controllers\webhook\WebHookController;
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
    return view('welcome');
});

Route::get('/verifikasi',function(){
    return view('pages.index');
});

Route::get('/webhook',[WebHookController::class,'show'])
->name('webhook');
