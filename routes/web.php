<?php

use App\Http\Controllers\BoardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('boards')->group(function() {
    Route::get('/', [BoardController::class, 'index']);

    Route::get('create', [BoardController::class, 'create'])->name('boards.create'); // name 이름 지정

    Route::post('store', [BoardController::class, 'store'])->name('boards.store');

    Route::get('show', [BoardController::class, 'show'])->name('boards.show'); // name 이름 지정

    Route::get('edit', [BoardController::class, 'edit'])->name('boards.edit'); // name 이름 지정

    Route::post('update', [BoardController::class, 'update'])->name('boards.update'); // name 이름 지정

    Route::get('destroy', [BoardController::class, 'destroy']); // name 이름 지정
});