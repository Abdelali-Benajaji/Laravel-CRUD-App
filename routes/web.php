<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbCont;
use App\Http\Controllers\dbCont2;

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


//Route::get('showDB',[dbCont::class,'index']);
Route::get('index',[dbCont2::class,'getData']);

Route::get('add',function(){
    return view('add');
});
Route::post('saveAjout',[dbCont2::class,'addData']);

Route::get('edit/{id}',[dbCont2::class,'updateData']);
Route::post('saveModif',[dbCont2::class,'saveData']);

Route::get('delete/{id}',[dbCont2::class,'deleteData']);
