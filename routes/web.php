<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Setting\AddressController;
use App\Http\Controllers\Admin\Setting\GeneralController;
use App\Http\Controllers\Admin\Product\ProductCategoryController;
use App\Http\Controllers\Admin\Product\VariationOptionController;
use App\Http\Controllers\Admin\Product\ProductVariationController;

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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.dashboard');


// Admin Settings Routes
Route::group(['prefix' => 'admin/settings', 'as' => 'admin.settings.'], function () {
    // General Settings
    Route::group(['prefix' => 'general', 'as' => 'general.'], function () {
        Route::get('/', [GeneralController::class, 'index'])->name('index');
        Route::put('/', [GeneralController::class, 'update'])->name('update');
    });
    // Website Addresses Settings
    Route::resource('/address', AddressController::class)->names('address');
});

Route::resource('admin/products/categories', ProductCategoryController::class)->names('admin.products.categories')->except('show');
Route::resource('admin/products/variations/options', VariationOptionController::class)->names('admin.products.variations.options')->except('show');
Route::resource('admin/products/variations', ProductVariationController::class)->names('admin.products.variations')->except('show');
Route::resource('admin/products', ProductController::class)->names('admin.products');
