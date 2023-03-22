<?php


use Illuminate\Support\Facades\Route;
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

Route::get('/admin/settings/general', [GeneralController::class, 'index'])->name('admin.settings.general');
Route::put('/admin/settings/general', [GeneralController::class, 'update'])->name('admin.settings.general.update');
