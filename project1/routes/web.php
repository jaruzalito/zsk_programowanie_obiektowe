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

// WAŻNE Musisz dopisać to co jest podspodem zamiast kopiowac!
// Route jest od klasy
// ::get([nazwa którą trzeba wpisac po/ żeby wyswietlilo strone], function(){[Co ma wyświetlić po wpisaniu linka]})
Route::get('city_old',function(){
return 'Miasto';


});
Route::get('city',function(){

return view('city');

});
Route::get('info',function(){
    return view('info',['firstName' => 'Janusz', 'lastName' => 'Nowak', 'city' => 'Poznan']);
});

Route::get('info_age/{age}',function($age){
    return view('info',['firstName' => 'Janusz', 'lastName' => 'Nowak', 'city' => 'Poznan','age' => $age]);
});
Route::get('pages/{page}',function($page){
$pages = [
    'about' => '2 słowa o mnie',
    'contact' => 'contact@gmail.com',
    'home' => 'Strona Domowa'
];
 return $pages[$page];

});

Route::get('/address', function(){
    echo "Miasto: ";
});

Route::get('/address1/{$city}', function(string $city){
    echo "Miasto: $city ";
});

Route::get('/address2/{$city}/{street}', function(string $city,string $street){
    echo<<<ADDRESS
    miasto: $city<br>
    ulica: $street
    <hr>
    ADDRESS;
});

