<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluationController;

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

//Route::get('/', HomeController::class);

Route::get('evaluations/', [EvaluationController::class, 'index'])->name('evaluations.index');

Route::get('/', [EvaluationController::class, 'create'])->name('evaluations.create');

Route::get('evaluations/{id}', [EvaluationController::class, 'show'])->name('evaluations.show');