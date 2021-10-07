<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function() {

// });

