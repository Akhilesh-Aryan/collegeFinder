<?php

use App\Http\Controllers\HomeController;
use App\Models\Record;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,"homepage"])->name('homepage');
Route::get('/insert', function(){
    return view('insert',["data"=>Record::all()]);
})->name('insert');
Route::post('/',[HomeController::class,"insertDetails"])->name('insertpost');
Route::get('/delete/{id}',[HomeController::class,"delete"])->name('delete');
Route::get('/edit/{id}',[HomeController::class,"update"])->name('edit');
Route::post('/update',[HomeController::class,"updateDetails"])->name('updateDetails');