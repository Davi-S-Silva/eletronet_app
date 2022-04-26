<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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
    //return view('welcome');
    return View('includes.content');
})->name('home');
Route::get('contato', function () {
    //return view('welcome');
    return View('pages.contato');
})->name('contato');
Route::get('sobre', function () {
    //return view('welcome');
    return View('pages.sobre');
})->name('sobre');
Route::get('cobertura', function () {
    //return view('welcome');
    return View('pages.cobertura');
})->name('cobertura');

Route::get('#servicos', function () {
    //return view('welcome');
    return View('includes.content');
})->name('servicos');
Route::get('#planos', function () {
    //return view('welcome');
    return View('includes.content');
})->name('planos');
Route::get('assinante', function () {
    //return view('welcome');
    return View('pages.registro');
})->name('assinante');
// Route::get('cobertura', function () {
//     //return view('welcome');
//     return View('includes.content');
// })->name('cobertura');
