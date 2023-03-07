<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Services\Product\UploatService;

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
        Route::get('edit/{menu}',[MenuController::class, 'show']);
        Route::post ('edit/{menu}',[MenuController::class, 'update']);
        Route::delete('destroy',[MenuController::class, 'destroy']);

        Route::prefix('products')->group(function () {
            Route::get('add',[ProductController::class, 'create']);
            Route::post('add',[ProductController::class, 'store']);
            Route::get('list',[ProductController::class, 'index']);
            Route::get('edit/{product}',[ProductController::class, 'show']);
            Route::post ('edit/{product}',[ProductController::class, 'update']);
            Route::delete('destroy',[ProductController::class, 'destroy']);

        });

        Route::post('upload/service',[UploadController::class,'store']);
       
    });
Route::get('/home',function(){
    return view('client.home');
});
    
});
    
    



