<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Pages\Services;

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

/*
Route::get('/', function () {

    return view('frontend.index');

})->name('my_index');

*/


Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::post('/store','search');//حفظ سجل جديد 

});




Route::controller(App\Http\Controllers\modeltes::class)->group(function () {

    Route::get('/mt', 'elq')->name('home');
  

});





//Route::get('services', Services::class)->name('services');







