<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\CitiesController;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Cities;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SubCategoryResource;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::resource("country","");
// Route::resource("province","");
// Route::resource('provinces',"");

// Route::apiResource('/province/{id}',ProvinceController::class,'load' )->name('load');
// Route::resource("/province/{id}",[ProvinceController::class ,"index"]);
// Route::apiResource('/provinces/{id}', [ProvinceController::class, 'show']);
Route::resource("/cities", CitiesController::class);
Route::resource("/provinces", ProvinceController::class);


// Route::get("/category",[CategoryController::class]);
Route::get("/sub-category", [SubCategoryController::class]);

Route::get('/categories',function () {
    return CategoryResource::collection(Category::all());
});

Route::get('/sub-categories',function () {
    return SubCategoryResource::collection(SubCategory::all());
});
Route::post('/final-step/{id}', [AdsController::class, 'finalStep'])->name('final-step');

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});
Route::get('/ads-details/{id}',[AdsController::class,'show'])->name('ads-details');
// Route::get('/ads-categories/{id}',[AdsController::class, 'loadCategories'])->name('ads-categories');