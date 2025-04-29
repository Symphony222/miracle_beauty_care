<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminChatController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\UserController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/force-logout', function () {
    Auth::logout(); // Logs out the current user
    return redirect('/login')->with('status', 'You have been logged out.');
})->name('admin.forceLogout');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::get('/offers', function () {
    return view('offers');
})->name('offers');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about.us');

Route::prefix('user')
    ->middleware(['auth']) 
    ->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
        Route::get('/appointments', [UserController::class, 'appointmentsIndex'])->name('user.appointments.index');
        Route::get('/quiz', [UserController::class, 'quizIndex'])->name('user.quiz.index');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')
    ->middleware(['auth']) // or also 'admin' if using AdminMiddleware
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('/customers', CustomerController::class,)->names('admin.customers');
        Route::resource('/appointments', AppointmentController::class)->names('admin.appointments');
        Route::resource('/services', ServiceController::class)->names('admin.services');
        Route::resource('/employees', EmployeeController::class)->names('admin.employees');
        Route::get('/chat', [AdminChatController::class, 'index'])->name('admin.chat.index');
    });

// Admin chat routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Chat routes
    Route::get('chat/conversations', [AdminChatController::class, 'getConversations'])->name('admin.chat.conversations');
    Route::get('chat/conversations/{chatId}/messages', [AdminChatController::class, 'getMessages'])->name('admin.chat.messages');
    Route::post('chat/conversations/{chatId}/messages', [AdminChatController::class, 'sendMessage'])->name('admin.chat.send-message');
}); 

// Appointment booking
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Khalti payment
Route::get('/payment/{appointment}', [PaymentController::class, 'initiate'])->name('payment.initiate');
Route::post('/payment/verify', [PaymentController::class, 'verify'])->name('payment.verify');

// Public side: Reviews page
Route::get('/reviews', [GalleryController::class, 'showGalleryForReviews'])->name('reviews');

// Admin routes : Gallery page
Route::prefix('admin')->name('admin.')->group(function () {
    // Gallery routes with explicit naming
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/{gallery}', [GalleryController::class, 'show'])->name('gallery.show');
    Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallery/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    
    // Additional bulk actions
    Route::post('/gallery/bulk-publish', [GalleryController::class, 'bulkPublish'])->name('gallery.bulk-publish');
    Route::post('/gallery/bulk-unpublish', [GalleryController::class, 'bulkUnpublish'])->name('gallery.bulk-unpublish');
    Route::post('/gallery/bulk-delete', [GalleryController::class, 'bulkDelete'])->name('gallery.bulk-delete');
    Route::post('/gallery/reorder', [GalleryController::class, 'reorder'])->name('gallery.reorder');
});

require __DIR__.'/auth.php';
