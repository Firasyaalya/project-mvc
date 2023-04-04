<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\FillController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/store', [FillController::class, 'index']);
Route::get('/add.data', [FillController::class, 'add']);
Route::post('/insertdata', [FillController::class, 'insertdata']);
Route::get('/showdata/{id}', [FillController::class, 'showdata']);
Route::put('/updatedata/{id}', [FillController::class, 'updatedata']);
Route::get('/delete/{id}', [FillController::class, 'delete' ]);
Route::get('/dashboard',[StoreController::class,'index'])

?>