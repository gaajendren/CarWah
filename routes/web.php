<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Logout;
use App\Http\Controllers\VechicleController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/admin/index', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/about', [LayoutController::class, 'about'])->name('about');
    Route::get('/service', [LayoutController::class, 'service'])->name('service');
    Route::get('/booking', [BookingController::class , 'index'])->name('booking');
    Route::get('/get/{id}', [LayoutController::class , 'getProductsByVehicle']);
});

Route::get('/admin/product', [ProductController::class, 'index'])->name('index');
Route::get('/admin/create', [ProductController::class, 'create'])->name('create');
Route::get('/admin/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/admin/show/{id}', [ProductController::class, 'show']);
Route::patch('/admin/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::post('/admin/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/book/{id}', [BookingController::class, 'book'])->name('book');
Route::post('/book/store/{id}', [BookingController::class, 'store'])->name('book.store');
// web.php or routes.php
Route::get('/get-available-time-slots/{id}', [BookingController::class, 'checktime']);
Route::get('/get-duration-vechicle/{id}', [VechicleController::class, 'checkDuration']);


Route::get('/admin/vechicle', [VechicleController::class, 'index'])->name('index.vechicle');
Route::get('/admin/vechicle/create', [VechicleController::class, 'create'])->name('create.vechicle');
Route::get('/admin/edit/vechicle/{id}', [VechicleController::class, 'edit'])->name('vechicle.edit');
Route::delete('/admin/vechicle/delete/{id}', [VechicleController::class, 'destroy'])->name('vechicle.delete');
Route::patch('/admin/update/vechicle/{id}', [VechicleController::class, 'update'])->name('vechicle.update');
Route::post('/admin/vechicle/store', [VechicleController::class, 'store'])->name('vechicle.store');
// In routes/web.php

Route::get('/admin/order', [OrderController::class, 'index'])->name('index.order');
Route::get('/admin/order/edit/{id}', [OrderController::class, 'edit'])->name('edit.order');
Route::patch('admin/order/update/{id}', [OrderController::class, 'update'])->name('update.order');
Route::get('/admin/order/show/{id}', [BookingController::class, 'show'])->name('edit.show');
Route::post('/comment/{id}/{book}', [ReviewController::class, 'store'])->name('comment.craete');

Route::get('/logout', [Logout::class, 'logout'])->name('logout');

Route::delete('/product/delete/{id}' , [ProductController::class, 'destroy'])->name('destroy');
Route::delete('/book_order/delete/{id}' , [BookingController::class, 'destroy'])->name('destroy');
Route::get('/generate-pdf', [App\Http\Controllers\PdfController::class, 'generatePdf'])->name('pdf');


Route::get('/index', function (){
    return view('index');
});

require __DIR__.'/auth.php';
