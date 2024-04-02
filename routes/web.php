<?php

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
    return view('index');
})->name('pagInicial');

Route::get('/questao1', [App\Http\Controllers\controllerQuiz :: class , 'index']) -> name ('pagQuest1');

Route::post('/questao2', [App\Http\Controllers\controllerQuiz :: class , 'dadosQuest1']) -> name ('pagQuest1');

Route::post('/questao3', [App\Http\Controllers\controllerQuiz :: class , 'dadosQuest2'])->name('pagQuest2');

Route::post('/questao4', [App\Http\Controllers\controllerQuiz :: class , 'dadosQuest3'])->name('pagQuest4');

Route::post('/questao5', [App\Http\Controllers\controllerQuiz :: class , 'dadosQuest4'])->name('pagQuest5');

Route::post('/questao6', [App\Http\Controllers\controllerQuiz :: class , 'dadosQuest5'])->name('pagQuest6');

Route::post('/questao7', [App\Http\Controllers\controllerQuiz :: class , 'dadosQuest6'])->name('pagQuest7');

Route::post('/questao8', [App\Http\Controllers\controllerQuiz :: class , 'dadosQuest7'])->name('pagQuest8');

Route::post('/resultado', [App\Http\Controllers\controllerQuiz :: class , 'dadosQuest8'])->name('pagrResultado');


