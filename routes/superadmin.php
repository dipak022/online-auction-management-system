<?php

Route::group(['prefix'=>'superadmin', 'middleware'=>['isSuperadmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[App\Http\Controllers\Superadmin\SuperAdminController::class,'index'])->name('superadmin.dashboard');
    


    // manage banner route here 
    Route::resource('/banner', App\Http\Controllers\Superadmin\BannerController::class);
    Route::post('/banner_status', [App\Http\Controllers\Superadmin\BannerController::class, 'BannerStatus'])->name('banner.status');

    // manage category route here 
    Route::resource('/category', App\Http\Controllers\Superadmin\CategoryController::class);
    Route::post('/category_status', [App\Http\Controllers\Superadmin\CategoryController::class, 'CategoryStatus'])->name('category.status');

    // manage product route here 
    Route::resource('/product', App\Http\Controllers\Superadmin\ProductController::class);
    Route::post('/product_status', [App\Http\Controllers\Superadmin\ProductController::class, 'ProductStatus'])->name('product.status');
    Route::post('/new_status', [App\Http\Controllers\Superadmin\ProductController::class, 'NewStatus'])->name('new.status');
    Route::post('/featured_status', [App\Http\Controllers\Superadmin\ProductController::class, 'FeaturedStatus'])->name('featured.status');


    //bid
    
    Route::get('/allbid', [App\Http\Controllers\BidingController::class, 'allbid'])->name('allbid');

    Route::get('/delevered/{id}', [App\Http\Controllers\BidingController::class, 'Delevered'])->name('bid.delevered');

    Route::get('/delete_bid/{id}', [App\Http\Controllers\BidingController::class, 'DeleteBid'])->name('bid.delete');
    



     // manage question route here 
     Route::resource('/setting', App\Http\Controllers\Superadmin\SetingController::class);

     // manage question route here 
     Route::resource('/user_account', App\Http\Controllers\Superadmin\UserAccountController::class);
     Route::post('/user_account_status', [App\Http\Controllers\Superadmin\UserAccountController::class, 'UserAcountStatus'])->name('user_account.status');
     Route::post('/user_vendor_status', [App\Http\Controllers\Superadmin\UserAccountController::class, 'UserVendorStatus'])->name('user_vendor.status');

     Route::resource('/problem', App\Http\Controllers\Superadmin\ProblemController::class);


});