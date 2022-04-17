<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});
/*
 Route::get('/', function(){
     return view('home');
 });
 Route::post('/image', [ImageController::class, 'imageUpload']);
 */
Route::controller(ImageController::class)->group(function(){
    Route::get('/image', 'imagdata');
    Route::post('image', 'imageUpload');
});
Route::get('/', [ImageController::class, 'selectData']);

//Route::get('store',[ImageController::class, 'selectDataRow']);
Route::get('create',[ImageController::class, 'createdata']);
//Route::post('fake',[ImageController::class, 'insertData']);