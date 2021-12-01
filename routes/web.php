<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('index');
//})->name('homePage');
Route::get('/', [ProductController::class, 'showData'])->name('homePage');

Route::post('/send-message', [\App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact-send');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/showProducts', [ProductController::class, 'index'])->name('showProducts')->middleware('auth');
Route::get('/addProduct', [ProductController::class, 'create'])->name('addProduct')->middleware('auth');
Route::post('/storeProduct', [ProductController::class, 'store'])->name('storeProduct')->middleware('auth');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->middleware('auth');
Route::Post('/product/update', [ProductController::class, 'update'])->middleware('auth');
Route::get('/deleteProduct/{id}', [ProductController::class, 'destroy'])->name('deleteProduct')->middleware('auth');


Route::get('/showCompanyProducts', [CompanyProductController::class, 'index'])->name('showCompanyProducts')->middleware('auth');
Route::get('/addCompanyProduct', [CompanyProductController::class, 'create'])->name('addCompanyProduct')->middleware('auth');
Route::post('/storeCompanyProduct', [CompanyProductController::class, 'store'])->name('storeCompanyProduct')->middleware('auth');
Route::get('/companyProduct/edit/{id}', [CompanyProductController::class, 'edit'])->middleware('auth');
Route::Post('/companyProduct/update', [CompanyProductController::class, 'update'])->middleware('auth');
Route::get('/deleteCompanyProduct/{id}', [CompanyProductController::class, 'destroy'])->name('deleteCompanyProduct')->middleware('auth');


Route::get('/showCompany', [CompanyController::class, 'index'])->name('showCompany')->middleware('auth');
Route::get('/addCompany', [CompanyController::class, 'create'])->name('addCompany')->middleware('auth');
Route::post('/storeCompany', [CompanyController::class, 'store'])->name('storeCompany')->middleware('auth');
Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->middleware('auth');
Route::Post('/company/update', [CompanyController::class, 'update'])->middleware('auth');
Route::get('/deleteCompany/{id}', [CompanyController::class, 'destroy'])->name('deleteCompany')->middleware('auth');


//Route::get('/register', function () {
//    return view('auth.login');
//});
