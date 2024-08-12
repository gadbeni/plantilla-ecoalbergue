<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoomController;
use App\Http\Controller\PackageController;
use App\Http\Controllers\SpecialPackageController;

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

Route::get('login', function () {
    return redirect('admin/login');
})->name('login');

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('paquetes-especiales', [PagesController::class, 'about'])->name('about');


Route::controller(PostController::class)->group(
    function () {
        Route::get('blog', [PostController::class, 'index'])->name('post.index');
        Route::get('blog/{slug}', [PostController::class, 'show'])->name('post.show');
    }
);
Route::controller(RoomController::class)->group(
    function () {
        Route::get('habitaciones', [RoomController::class, 'index'])->name('room.public.index');
        Route::get('habitaciones/{id}', [RoomController::class, 'showPublicRoom'])->name('room.public.show');
    }
);
Route::controller(SpecialPackageController::class)->group(
    function () {
        Route::get('paquetes-especialess', [SpecialPackageController::class, 'index'])->name('specialpackage.public.index');
        Route::get('paquetes-especiales/{id}', [SpecialPackageController::class, 'showPublicPackage'])->name('specialpackage.public.show');
    }
);


Route::get('maintenance', function () {
    return view('errors.maintenance');
})->name('errors.maintenance');

Route::group(['prefix' => 'admin', 'middleware' => 'desarrollo.creativo'], function () {
    Voyager::routes();
});

// Clear cache
Route::get('/admin/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect('/admin/profile')->with(['message' => 'Cache eliminada.', 'alert-type' => 'success']);
})->name('clear.cache');
