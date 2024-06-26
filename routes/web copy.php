<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', [HomeController::class, 'show']);

Route::get('/admin/',[DashboardController::class,'index']);




Route::get('/admin/country', [CountryController::class,'index'])->name('admin.country');
Route::get('/admin/country/create', [CountryController::class,'create'])->name('admin.district.create');
Route::post('/admin/country/store', [CountryController::class,'store'])->name('admin.country.store');

Route::get('/admin/city', [CityController::class,'index'])->name('admin.citys');
Route::get('/admin/city/create', [CityController::class,'create'])->name('admin.citys.create');
Route::post('/admin/city/store', [CityController::class,'store'])->name('admin.city.store');

Route::get('/admin/province', [ProvinceController::class,'index'])->name('admin.province');
Route::get('/admin/province/create', [ProvinceController::class,'create'])->name('admin.province.create');
Route::post('/admin/province/store', [ProvinceController::class, 'store'])->name('admin.province.store');

Route::get('/admin/city', [CityController::class,'index'])->name('admin.city');

Route::get('/admin/category', [CategoryController::class,'index'])->name('admin.category');


Route::get('/admin/subcategory', [SubCategoryController::class,'index'])->name('admin.subcategory');
Route::get('/admin/skill', [CityController::class,'index'])->name('admin.skill');
Route::get('/admin/institute', [InstituteController::class,'index'])->name('admin.institute');
Route::get('/admin/job', [JobController::class,'index'])->name('admin.job');
Route::get('/admin/appication', [ApplicationController::class,'index'])->name('admin.appication');
Route::get('/admin/education', [EducationController::class,'index'])->name('admin.education');
Route::get('/admin/company', [CompanyController::class,'index'])->name('admin.company');

