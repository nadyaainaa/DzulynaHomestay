<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomestayController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'homepage')->name('homepage');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//edit profile
Route::get('/profile', [AuthController::class, 'edit'])->name('profile.edit');
Route::post('/profile', [AuthController::class, 'update'])->name('profile.update');

// Home routes for normal users
Route::prefix('home')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        //view route
        Route::get('/homepage', 'homepage')->name('homepage');
        Route::get('/home/house1', [HomestayController::class, 'showHouse1'])->name('house1');
        Route::get('/home/house2', [HomestayController::class, 'showHouse2'])->name('house2');
        Route::get('/home/house3', [HomestayController::class, 'showHouse3'])->name('house3');
        Route::get('/index', 'index')->name('index');

        //booking route
        Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store')->middleware('auth');

        //payment route
        Route::get('/payment/{booking}', [PaymentController::class, 'show'])->name('payment.page');
        Route::post('/process-payment', [PaymentController::class, 'process'])->name('payment.process');
        Route::get('/payment-success/{booking}', [PaymentController::class, 'success'])->name('payment.success');

        //generate receipt
        Route::get('/receipt/{bookingId}/generate', [PaymentController::class, 'generateReceipt'])->name('receipt.generate');


    });

    // Route::get('/house1/{id}', [HomestayController::class, 'showHouse'])->name('house1');
      
});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        return view('admin.dashboard'); // ✅ Show admin dashboard
    })->name('admin.dashboard');
});


//  blog
Route::prefix('blog')->group(function () {
Route::controller(BlogController::class)->group(function () {
        Route::get('/news', 'news')->name('news');
        Route::get('/newsDetails','newsDetails')->name('newsDetails');
        Route::get('/contact','contact')->name('contact');
    });
});

 //pages
Route::prefix('pages')->group(function () {
Route::controller(PagesController::class)->group(function () {
        Route::get('/error-page', 'errorPage')->name('errorPage');
        Route::get('/pricing','pricing')->name('pricing');
        Route::get('/project','project')->name('project');
        Route::get('/projectDetails','projectDetails')->name('projectDetails');
        Route::get('/team','team')->name('team');
        Route::get('/teamDetails','teamDetails')->name('teamDetails');
    });
});

//  services
Route::prefix('services')->group(function () {
Route::controller(ServicesController::class)->group(function () {
        Route::get('/service', 'service')->name('service');
        Route::get('/serviceDetails','serviceDetails')->name('serviceDetails');
        Route::get('/about','about')->name('about');
    });
});
