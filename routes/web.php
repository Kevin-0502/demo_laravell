<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialesController;

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
Route::get('/hola/en', function () {
    return ("Hellow name");
});
Route::get('/hola/{name}', function ($name) {
    return ("Hola $name");
});
Route::controller(EditorialesController::class)->group(function(){
    Route::get('/editoriales/index','index');
    Route::get('/editoriales/create','create');
    Route::get('/editoriales/edit/{id}','edit');
});

