<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\FinishedController;

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

Route::get('/tasks', [TasksController::class, 'index'])->name('tasks');

Route::get('/finished', [FinishedController::class, 'index'])->name('finished');


// Route::get('/tasks', function () {
//     return view('tasks');
// })->middleware(['auth'])->name('tasks');



// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'store']);

require __DIR__.'/auth.php';
