<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\child_controller;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




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

Route::get('/child', function () {
    return view('child_reg');
});
Route::get('/parent', function () {
    return view('parent_info');
});
Route::get('/card', [child_controller::class,'viewcard']);

Route::get('/try', function () {
    return view('tryp');
});
    

Route::get('/rc', function () {
    return view('realcard');
});
    

Route::get('/get_card',[child_controller::class,'card']);

Route::post('/child',[child_controller::class,'child_reg']);
