<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


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

/*
-- Contoh Percobaan : 

Route::get('/home', function () {
    return view('home',['name' => 'Chika']);
});

Route::get('/hello', function () {
    return view('blog.hello', ['name' => 'Chika']);
});

Route::get('/hello',[WelcomeController::class, 'hello']);

Route::get('/hello', function () {
    return view('blog.hello')
        ->with('name','Chika')
        ->with('occupation','Astronaut');
    });

Route::get('/home', function () {
    return View::make('hello', ['name' => 'Test']);
});
*/

/*
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

/* Praktikum1 */

/* 1 */

Route::get('/home', function () {
    return view('praktikum1.home',['link' => 'https://www.educastudio.com/']);
});


/* 2 */

Route::prefix('category')->group(function () {
    Route::get('/{id?}', [ProductController::class,'products']);
   });

/* 3 */

Route::get('/news/{id?}', function ($id) {
    return view('praktikum1.news',['link' => $id]);
});

/* 4 */

Route::prefix('program')->group(function () {
    Route::get('/{id?}', [ProgramController::class,'program']);
});

/* 5 */

Route::get('/about-us',[AboutController::class, 'about_view']);

/* 6 */

Route::resource('contact-us', ContactController::class);