<?php

use App\Http\Controllers\AdminAboutDataController;
use App\Http\Controllers\AdminAboutNumberController;
use App\Http\Controllers\AdminBlogsController;
use App\Http\Controllers\AdminClientsController;
use App\Http\Controllers\AdminCollabCompanyController;
use App\Http\Controllers\AdminCompanyDetailsController;
use App\Http\Controllers\AdminGalleryBendingController;
use App\Http\Controllers\AdminGalleryCoatingController;
use App\Http\Controllers\AdminHomeBannerController;
use App\Http\Controllers\AdminOtherBannerController;
use App\Http\Controllers\AdminRalController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminSupportController;
use App\Http\Controllers\AdminTeamsController;
use App\Http\Controllers\AdminTestimonialController;
use App\Http\Controllers\FrontAboutController;
use App\Http\Controllers\FrontBLogsController;
use App\Http\Controllers\FrontClientsController;
use App\Http\Controllers\FrontContactController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\FrontRALController;
use App\Http\Controllers\FrontTestCirController;
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

require __DIR__ . '/auth.php';









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


Route::get('/company-details', function () {
    return view('admin.company-details');
})->middleware(['auth', 'verified'])->name('company-details');


Route::get('/admin-team', function () {
    return view('admin.admin-team');
})->middleware(['auth', 'verified'])->name('admin-team');


Route::get('/admin-testimonial', function () {
    return view('admin.admin-testimonial');
})->middleware(['auth', 'verified'])->name('admin-testimonial');


Route::get('/admin-blogs', function () {
    return view('admin.admin-blogs');
})->middleware(['auth', 'verified'])->name('admin-blogs');


Route::get('/admin-ral', function () {
    return view('admin.admin-ral');
})->middleware(['auth', 'verified'])->name('admin-ral');


Route::get('/customer-support', function () {
    return view('admin.customer-support');
})->middleware(['auth', 'verified'])->name('customer-support');










// User's view ====================================================================================
Route::get('/', function () {
    return view('home');
});











// API Routes For Admin ===============================================================================================================================================
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


Route::get('/company-details', [AdminCompanyDetailsController::class, 'getCDetails'])->name('getCDetails');
Route::post('/company-details/add', [AdminCompanyDetailsController::class, 'addCDetails'])->name('addCDetails');
Route::put('/company-details/edit/{id}', [AdminCompanyDetailsController::class, 'editCDetails'])->name('editCDetails');
Route::delete('/company-details/delete/{id}', [AdminCompanyDetailsController::class, 'deleteCDetails'])->name('deleteCDetails');


Route::get('/admin-blogs', [AdminBlogsController::class, 'getBlogs'])->name('getBlogs');
Route::post('/admin-blogs/add', [AdminBlogsController::class, 'addBlogs'])->name('addBlogs');
Route::put('/admin-blogs/edit/{id}', [AdminBlogsController::class, 'editBlogs'])->name('editBlogs');
Route::delete('/admin-blogs/delete/{id}', [AdminBlogsController::class, 'deleteBlogs'])->name('deleteBlogs');


Route::get('/admin-ral', [AdminRalController::class, 'getRal'])->name('getRal');
Route::post('/admin-ral/add', [AdminRalController::class, 'addRal'])->name('addRal');
Route::put('/admin-ral/edit/{id}', [AdminRalController::class, 'editRal'])->name('editRal');
Route::delete('/admin-ral/delete/{id}', [AdminRalController::class, 'deleteRal'])->name('deleteRal');


Route::get('/admin-testimonial', [AdminTestimonialController::class, 'getTST'])->name('getTST');
Route::post('/admin-testimonial/add', [AdminTestimonialController::class, 'addTST'])->name('addTST');
Route::put('/admin-testimonial/edit/{id}', [AdminTestimonialController::class, 'editTST'])->name('editTST');
Route::delete('/admin-testimonial/delete/{id}', [AdminTestimonialController::class, 'deleteTST'])->name('deleteTST');


Route::get('/admin-team', [AdminTeamsController::class, 'getTeam'])->name('getTeam');
Route::post('/admin-team/add', [AdminTeamsController::class, 'addTeam'])->name('addTeam');
Route::put('/admin-team/edit/{id}', [AdminTeamsController::class, 'editTeam'])->name('editTeam');
Route::delete('/admin-team/delete/{id}', [AdminTeamsController::class, 'deleteTeam'])->name('deleteTeam');


Route::get('/customer-support', [AdminSupportController::class, 'getSupport'])->name('getSupport');
Route::delete('/customer-support/delete/{id}', [AdminSupportController::class, 'deleteSupport'])->name('deleteSupport');




// API Routes For User ===============================================================================================================================================
Route::get('/', [FrontHomeController::class, 'getAll'])->name('getAll');
Route::post('/', [FrontHomeController::class, 'addBlog'])->name('addBlog');


Route::get('/about', [FrontAboutController::class, 'getAllAbout'])->name('getAllAbout');


Route::get('/clients', [FrontClientsController::class, 'getAllClients'])->name('getAllClients');

Route::get('/test-cirtificate', [FrontTestCirController::class, 'getAllTestCir'])->name('getAllTestCir');

Route::get('/ral', [FrontRALController::class, 'getAllRAL'])->name('getAllRAL');

Route::get('/blogs', [FrontBLogsController::class, 'getAllBlogs'])->name('getAllBlogs');


Route::get('/contact', [FrontContactController::class, 'getContact'])->name('getContact');
Route::post('/contact', [FrontContactController::class, 'addContact'])->name('addContact');
