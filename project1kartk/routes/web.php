<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/city', function(){
    return view('city');
});

Route::get('strona/{strony}',function($strony){
    $strona = [
        'home'=>"dom",
        'dupa'=>"dupa123",
        'sex'=>"seksik"
    ];
    return $strona[$strony];
});

Route::redirect('city','/');

Route::get('/address/{city?}/{street?}', function(string $city="-", string $street="-"){
    $City = substr($city,0,3);

    echo<<<ADDRESS
    miast: $City<br>
    ULICA: $street
    ADDRESS;
})->name('address');

Route::Redirect("/adres/{city?}/{street?}/{zipCode?}","/address/{city?}/{street?}/{zipCode?}");