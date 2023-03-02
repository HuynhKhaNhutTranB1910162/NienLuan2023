<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\MenuController;

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

Route::get('/',[LoginController::class , 'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class , 'store']);

Route::middleware(['auth'])->group(function (){
    // Route::get('admind',[MainController::class,'index']);

     Route::prefix('admin')->group(function () {
        Route::get('main',[MainController::class, 'index'])->name('admin');
        Route::get('addmenus',[MenuController::class, 'create']);
        Route::post('addmenus',[MenuController::class, 'store']);
        Route::get('listmenus',[MenuController::class, 'index']);
       
    });

    
});
    
    



