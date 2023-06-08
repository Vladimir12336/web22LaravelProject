<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\AuthController;

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

Route::middleware('guest')->group(function(){
    Route::get('/login', [MainController::class, 'login']) -> name('login');
    Route::post('/login', [AuthController::class, 'postSignin']) -> name('postSignin');
    Route::get('/registration', [MainController::class, 'registration'])-> name('registration');
    Route::post('/registration', [AuthController::class, 'postRegistration'])-> name('postRegistration');
});



Route::get('/', [MainController::class, 'homepage']) -> name('homepage');

Route::get('/about', [MainController::class, 'about']) -> name('about');

Route::get('/form', [MainController::class, 'form']) -> name('form');

Route::post('/form/check', [MainController::class, 'form_check']) -> name('form_check');




// Route::get('/about/{id}/{name}/{age}', function ($id, $name, $age) {
//     return 'ID: '. $id . '<br> Name: ' . $name . '<br> Age: ' . $age;
// });