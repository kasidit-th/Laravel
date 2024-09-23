<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });


// Route::get('/', function (Request $request) {
//     dd($request->name);
//     return view('home');
// });

// Route::get('/', function (Request $request) {
//     // dd($request->name);
//     return view('home', ['title' => 'my first app', 'name' =>$request->name ]);
// });

// Route::view('/','home', ['name' => 'Jhong', 'title' => 'my first app']);

Route::view('/','home')->name('home');


Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisterController::class,'index'])->name('register');
    Route::post('/register',[RegisterController::class,'create']);

    Route::get('/login', [LoginController::class,'index'])->name('login');
    Route::post('/login', [LoginController::class,'login']);
});

Route::middleware('auth')->group(function(){
    Route::post('logout', [LogoutController::class,'logout'])->name('logout');

    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
});
