<?php

use App\Http\Controllers\Backend\DashboardBackendController;
use App\Http\Controllers\Frontend\AboutFrontendController;
use App\Http\Controllers\Frontend\NewsFrontendController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use Illuminate\Support\Facades\Route;

// frontend

Route::get('',[HomeFrontendController::class ,'index'] );

Route::get('about',[AboutFrontendController::class ,'index'] );

Route::get('news',[NewsFrontendController::class ,'index'] );


// Backend

Route::get('adminpanel/dashboard', [DashboardBackendController::class, 'index']);