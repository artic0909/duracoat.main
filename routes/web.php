<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';









// Admin's view ==================================================================================
Route::get('/home-banner', function () {
    return view('admin.home-banner');
})->middleware(['auth', 'verified'])->name('home-banner');

Route::get('/other-banner', function () {
    return view('admin.other-banner');
})->middleware(['auth', 'verified'])->name('other-banner');

Route::get('/admin-about', function () {
    return view('admin.admin-about');
})->middleware(['auth', 'verified'])->name('admin-about');

Route::get('/admin-numbers', function () {
    return view('admin.admin-numbers');
})->middleware(['auth', 'verified'])->name('admin-numbers');

Route::get('/admin-services', function () {
    return view('admin.admin-services');
})->middleware(['auth', 'verified'])->name('admin-services');

Route::get('/admin-gallery-coating', function () {
    return view('admin.admin-gallery-coating');
})->middleware(['auth', 'verified'])->name('admin-gallery-coating');

Route::get('/admin-gallery-bending', function () {
    return view('admin.admin-gallery-bending');
})->middleware(['auth', 'verified'])->name('admin-gallery-bending');

Route::get('/admin-collab', function () {
    return view('admin.admin-collab');
})->middleware(['auth', 'verified'])->name('admin-collab');

Route::get('/admin-clients', function () {
    return view('admin.admin-clients');
})->middleware(['auth', 'verified'])->name('admin-clients');

Route::get('/admin-team', function () {
    return view('admin.admin-team');
})->middleware(['auth', 'verified'])->name('admin-team');

Route::get('/admin-testimonial', function () {
    return view('admin.admin-testimonial');
})->middleware(['auth', 'verified'])->name('admin-testimonial');

Route::get('/customer-support', function () {
    return view('admin.customer-support');
})->middleware(['auth', 'verified'])->name('customer-support'); 










// User's view ====================================================================================
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/ral', function () {
    return view('ral');
});

Route::get('/service-details', function () {
    return view('service-inner');
});

Route::get('/test-cirtificate', function () {
    return view('test-cirtificate');
});

