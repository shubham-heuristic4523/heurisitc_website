<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blogdetails', [HomeController::class, 'blogdetails'])->name('blogdetails');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/webdevelopment', [HomeController::class, 'webdevelopment'])->name('webdevelopment');
Route::get('/erp', [HomeController::class, 'erp'])->name('erp');
Route::get('/mobileappdevelopment', [HomeController::class, 'mobileappdevelopment'])->name('mobileappdevelopment');
Route::get('/desktopappdevelopment', [HomeController::class, 'desktopappdevelopment'])->name('desktopappdevelopment');
Route::get('/aiml', [HomeController::class, 'aiml'])->name('aiml');
Route::get('/cybersecurity', [HomeController::class, 'cybersecurity'])->name('cybersecurity');
Route::get('/clinicerp', [HomeController::class, 'clinicerp'])->name('clinicerp');
Route::get('/hospitalerp', [HomeController::class, 'hospitalerp'])->name('hospitalerp');
Route::get('/hungreetable', [HomeController::class, 'hungreetable'])->name('hungreetable');
Route::get('/scanprescription', [HomeController::class, 'scanprescription'])->name('scanprescription');
Route::get('/agriculturalerp', [HomeController::class, 'agriculturalerp'])->name('agriculturalerp');
Route::get('/manufacturingerp', [HomeController::class, 'manufacturingerp'])->name('manufacturingerp');