<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Auth;




Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[App\Http\Controllers\User\UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[App\Http\Controllers\User\UserController::class,'profile'])->name('profile');
    Route::post('store_problem',[App\Http\Controllers\User\UserController::class,'Store'])->name('user.problem.store');

    Route::get('delete_problem/{id}',[App\Http\Controllers\User\UserController::class,'delete'])->name('user.problem.delete');
    Route::get('/auction_details/{id}', [App\Http\Controllers\IndexController::class, 'AuctionDetails'])->name('auction.details');
    Route::post('/biding_update/{id}', [App\Http\Controllers\IndexController::class, 'BidingUpdate'])->name('biding.update');
    Route::post('/profile', [App\Http\Controllers\IndexController::class, 'Profile'])->name('profile');
    

});

require __DIR__.'/superadmin.php';







//Auth::routes(['register'=>false]);





  
