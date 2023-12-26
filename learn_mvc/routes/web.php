<?php

use Illuminate\Support\Facades\Route;
// Di dalam file routes/web.php

use App\Http\Controllers\PostController;


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
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'home'])->name('home');


Route::get('/pendataan', [TestController::class,
'data'])->name('pendataan');

Route::get('/data/{nama}', [TestController::class,
'datanama'])->name('data-nama');