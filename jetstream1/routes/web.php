<?php

use App\Http\Controllers\InformationController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use Illuminate\Http\Request;

Route::get('/info',[InformationController::class, 'show']);

route::get('/show/{name}',[InformationController::class,'showview']);
Route::view('/form','forms.formularz');
Route::get('FormController',[\App\Http\Controllers\FormController::class,'FormularzGet']);