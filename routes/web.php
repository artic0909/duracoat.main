<?php

use App\Http\Controllers\AdminAboutDataController;
use App\Http\Controllers\AdminAboutNumberController;
use App\Http\Controllers\AdminClientsController;
use App\Http\Controllers\AdminCollabCompanyController;
use App\Http\Controllers\AdminGalleryBendingController;
use App\Http\Controllers\AdminGalleryCoatingController;
use App\Http\Controllers\AdminHomeBannerController;
use App\Http\Controllers\AdminOtherBannerController;
use App\Http\Controllers\AdminServiceController;
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











// API Routes===============================================================================================================================================
Route::get('/home-banner', [AdminHomeBannerController::class, 'getHomeBanner'])->name('getHomeBanner');
Route::post('/home-banner/add', [AdminHomeBannerController::class, 'addHomeBanner'])->name('addHomeBanner');
Route::put('/home-banner/edit/{id}', [AdminHomeBannerController::class, 'editHomeBanner'])->name('editHomeBanner');
Route::delete('/home-banner/delete/{id}', [AdminHomeBannerController::class, 'deleteHomeBanner'])->name('deleteHomeBanner');


Route::get('/other-banner', [AdminOtherBannerController::class, 'getOtherBanner'])->name('getOtherBanner');
Route::post('/other-banner/add', [AdminOtherBannerController::class, 'addOtherBanner'])->name('addOtherBanner');
Route::put('/other-banner/edit/{id}', [AdminOtherBannerController::class, 'editOtherBanner'])->name('editOtherBanner');
Route::delete('/other-banner/delete/{id}', [AdminOtherBannerController::class, 'deleteOtherBanner'])->name('deleteOtherBanner');


Route::get('/admin-about', [AdminAboutDataController::class, 'getAboutData'])->name('getAboutData');
Route::post('/admin-about/add', [AdminAboutDataController::class, 'addAboutData'])->name('addAboutData');
Route::put('/admin-about/edit/{id}', [AdminAboutDataController::class, 'editAboutData'])->name('editAboutData');
Route::delete('/admin-about/delete/{id}', [AdminAboutDataController::class, 'deleteAboutData'])->name('deleteAboutData');


Route::get('/admin-numbers', [AdminAboutNumberController::class, 'getAboutNumber'])->name('getAboutNumber');
Route::post('/admin-numbers/add', [AdminAboutNumberController::class, 'addAboutNumber'])->name('addAboutNumber');
Route::put('/admin-numbers/edit/{id}', [AdminAboutNumberController::class, 'editAboutNumber'])->name('editAboutNumber');
Route::delete('/admin-numbers/delete/{id}', [AdminAboutNumberController::class, 'deleteAboutNumber'])->name('deleteAboutNumber');


Route::get('/admin-services', [AdminServiceController::class, 'getService'])->name('getService');
Route::post('/admin-services/add', [AdminServiceController::class, 'addService'])->name('addService');
Route::put('/admin-services/edit/{id}', [AdminServiceController::class, 'editService'])->name('editService');
Route::delete('/admin-services/delete/{id}', [AdminServiceController::class, 'deleteService'])->name('deleteService');


Route::get('/admin-gallery-coating', [AdminGalleryCoatingController::class, 'getGC'])->name('getGC');
Route::post('/admin-gallery-coating/add', [AdminGalleryCoatingController::class, 'addGC'])->name('addGC');
Route::put('/admin-gallery-coating/edit/{id}', [AdminGalleryCoatingController::class, 'editGC'])->name('editGC');
Route::delete('/admin-gallery-coating/delete/{id}', [AdminGalleryCoatingController::class, 'deleteGC'])->name('deleteGC');


Route::get('/admin-gallery-bending', [AdminGalleryBendingController::class, 'getGB'])->name('getGB');
Route::post('/admin-gallery-bending/add', [AdminGalleryBendingController::class, 'addGB'])->name('addGB');
Route::put('/admin-gallery-bending/edit/{id}', [AdminGalleryBendingController::class, 'editGB'])->name('editGB');
Route::delete('/admin-gallery-bending/delete/{id}', [AdminGalleryBendingController::class, 'deleteGB'])->name('deleteGB');


Route::get('/admin-collab', [AdminCollabCompanyController::class, 'getCollab'])->name('getCollab');
Route::post('/admin-collab/add', [AdminCollabCompanyController::class, 'addCollab'])->name('addCollab');
Route::put('/admin-collab/edit/{id}', [AdminCollabCompanyController::class, 'editCollab'])->name('editCollab');
Route::delete('/admin-collab/delete/{id}', [AdminCollabCompanyController::class, 'deleteCollab'])->name('deleteCollab');


Route::get('/admin-clients', [AdminClientsController::class, 'getClient'])->name('getClient');
Route::post('/admin-clients/add', [AdminClientsController::class, 'addClient'])->name('addClient');
Route::put('/admin-clients/edit/{id}', [AdminClientsController::class, 'editClient'])->name('editClient');
Route::delete('/admin-clients/delete/{id}', [AdminClientsController::class, 'deleteClient'])->name('deleteClient');