<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdsController;
use Illuminate\Routing\Router;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstituteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'show']);

Route::get('/admin/',[DashboardController::class,'index']);

Route::get('/admin/district', [DistrictController::class,'index'])->name('admin.district');
Route::get('/admin/district/create', [DistrictController::class,'create'])->name('admin.district.create');
Route::post('/admin/district/store', [DistrictController::class,'store'])->name('admin.district.store');

Route::get('/admin/city', [CityController::class,'index'])->name('admin.city');
Route::get('/admin/city/create', [CityController::class,'create'])->name('admin.citys.create');
Route::post('/admin/city/store', [CityController::class,'store'])->name('admin.city.store');

Route::get('/admin/province', [ProvinceController::class,'index'])->name('admin.province');
Route::get('/admin/province/create', [ProvinceController::class,'create'])->name('admin.province.create');
Route::post('/admin/province/store', [ProvinceController::class, 'store'])->name('admin.province.store');

Route::get('/admin/category', [CategoryController::class,'index'])->name('admin.category');
Route::get('/admin/category/create', [CategoryController::class,'create'])->name('admin.category.create');
Route::post('/admin/category/store', [CategoryController::class,'store'])->name('admin.category.store');
Route::get('/admin/category/{id}/edit', [CategoryController::class,'edit'])->name('admin.category.store');
Route::put('/admin/category/{id}/update', [CategoryController::class,'update'])->name('admin.category.update');


Route::get('/admin/sub-category/create', [SubCategoryController::class,'create'])->name('admin.sub-category.create');
Route::post('/admin/sub-category/store', [SubCategoryController::class,'store'])->name('admin.sub-category.store');

// Route::get('/admin/city', [CityController::class,'index'])->name('admin.city');
// Route::get('/admin/category', [CategoryController::class,'index'])->name('admin.category');

Route::get('/admin/sub-category', [SubCategoryController::class,'index'])->name('admin.sub-category');


Route::get('/admin/skill', [CityController::class,'index'])->name('admin.skill');
Route::get('/admin/institute', [InstituteController::class,'index'])->name('admin.institute');
Route::get('/admin/job', [JobController::class,'index'])->name('admin.job');
Route::get('/admin/appication', [ApplicationController::class,'index'])->name('admin.appication');
Route::get('/admin/education', [EducationController::class,'index'])->name('admin.education');
Route::get('/admin/company', [CompanyController::class,'index'])->name('admin.company');


// front
Route::get('/', [HomeController::class,'index']);
Route::get('/front/about', [HomeController::class,'about']);
Route::get('/front/services', [HomeController::class,'services']);
Route::get('/front/portfolio', [HomeController::class,'portfolio']);
Route::get('/front/team', [HomeController::class,'team']);

Route::get('/ads/register', [AdsController::class,'register'])->name('ads.register');
Route::post('/ads/register-next', [AdsController::class,'registerNext'])->name('register-next');
Route::post('/ads/resgister-third', [AdsController::class,'resgisterThird'])->name('resgister-third');
Route::post('/ads/final-step', [AdsController::class,'finalStep'])->name('final-step');


Route::post('/ads/ad-post-details', [AdsController::class,'postDetail'])->name('ads.postDetail');
Route::get('/ads', [AdsController::class,'showAll'])->name('ads');
Route::get('/ads/myads', [AdsController::class,'myads'])->name('ads.myads');

Route::get('/ads-categories',[AdsController::class, 'loadList']);


Route::get('/ads-details/{id}',[AdsController::class,'show'])->name('ads-details');
Route::get('/ads-categories/{id}',[AdsController::class, 'loadCategories'])->name('ads-categories');



Route::get('login', [App\Http\Controllers\UserController::class,'login'])->name('front.users.login');
Route::get('register', [App\Http\Controllers\UserController::class,'register'])->name('register');

Route::get('ms-auth', [App\Http\Controllers\UserController::class,'authenticate_user'])->name('authenticate_user');

