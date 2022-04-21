<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Ajax_qrController;



Route::get('/', [Ajax_qrController::class, 'query_ajax']);
Route::get('/ajax', [Ajax_qrController::class, 'query_ajax_return'])->name('ajax');

/*
 Route::get('/', function(){
     return view('home');
 });
 Route::post('/image', [ImageController::class, 'imageUpload']);
 
Route::controller(ImageController::class)->group(function(){
    Route::get('/', 'imagdata');
    Route::post('imageUpload', 'imageUploadData');
});*/

Route::get('image', [ImageController::class, 'imagdata'])->name('image.image');
Route::post('imageupload', [ImageController::class, 'imageUploadData'])->name('image.imageupload');


Route::get('store',[ImageController::class, 'selectDataRow'])->name('people.store');
Route::get('create',[ImageController::class, 'createdata'])->name('people.create');
Route::post('insert',[ImageController::class, 'insertData'])->name('people.insert');
Route::get('update/{id}',[ImageController::class, 'updateData'])->name('people.update');
Route::post('edit/{id}', [ImageController::class, 'editData'])->name('people.edit');
Route::get('delete/{id}', [ImageController::class, 'DeleteData'])->name('people.delete');
Route::get('object', [OppController::class, 'OppObject']);

///////////////////ajax insert, update, delete, select///////////
