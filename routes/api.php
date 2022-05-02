<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialesApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(EditorialesApiController::class)->group(function(){
    Route::get('/editoriales','index');
    Route::get('/editoriales/{id}','show');
    Route::get('/editoriales/bycode/{code}','details');
    Route::post('/editoriales','store');
    Route::put('/editoriales','update');
    Route::delete('/editoriales/{id}','destroy');
   /* Route::get('/editoriales/create','create');*/
});
