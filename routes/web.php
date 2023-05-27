<?php

use App\Http\Controllers\UtenteController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/ludovico_routes_web.php';

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
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

/*Route::get('/crud_staff', function (){
    return view('admin');
});*/

Route::prefix('admin')->group(function () {
    Route::get('/crud_staff', [UtenteController::class, 'showAllStaff'])
        ->name('crud_staff');

    Route::post('/modifica_staff', [UtenteController::class, 'modificaStaff'])
        ->name('modifica_staff');
});








// --Level 0 (public area)

Route::view("/", "level0/home");
Route::view("/login", "level0/login");
Route::view("/registration", "level0/registration");


// --Level 1 (user area)

Route::prefix('user')->group(function () {
    Route::view("/profile", "level1/user-information");
    Route::view("/password", "level1/user-password");
    Route::view("/coupon", "level1/user-coupon");
    Route::get("/coupon/{id}", function($id) {
        return view("level1/coupon", ["id"=>$id]);
    });
});





