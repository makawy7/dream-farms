<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Setting\AddressController;
use App\Http\Controllers\Admin\Setting\GeneralController;

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
