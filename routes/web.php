<?php



use App\Http\Controllers\AboutLayoutController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceLayoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;



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

Route::controller(CoffeeController::class)->group(function (){
    Route::get('','home')->name('home');
    Route::get('about','about')->name('about');
    Route::get('menu','menu')->name('menu');
    Route::get('service','service')->name('service');
    Route::get('reservation','reservation')->name('reservation');
    Route::get('testimonial','testimonial')->name('testimonial');
    Route::get('contact','contact')->name('contact');
});
Route::controller(LayoutController::class)->group(function (){
    Route::get('layout','index')->name('layout.index');
    Route::get('layout/create','create')->name('layout.create');
    Route::post('layout','store')->name('layout.store');
    Route::get('layout/{layout}/edit','edit')->name('layout.edit');
    Route::put('layout/{layout}','update')->name('layout.update');
    Route::delete('layout/{layout}','destroy')->name('layout.destroy');
});
Route::controller(ServiceLayoutController::class)->group(function (){
    Route::get('servicelayout','index')->name('servicelayout.index');
    Route::get('servicelayout/create','create')->name('servicelayout.create');
    Route::post('servicelayout','store')->name('servicelayout.store');
    Route::get('servicelayout/{servicelayout}/edit','edit')->name('servicelayout.edit');
    Route::put('servicelayout/{servicelayout}','update')->name('servicelayout.update');
    Route::delete('servicelayout/{servicelayout}','destroy')->name('servicelayout.destroy');
});
Route::controller(AboutLayoutController::class)->group(function (){
    Route::get('aboutlayout','index')->name('aboutlayout.index');
    Route::post('aboutlayout','store')->name('aboutlayout.store');
    Route::get('aboutlayout/{aboutlayout}/edit','edit')->name('aboutlayout.edit');
    Route::put('aboutlayout/{aboutlayout}','update')->name('aboutlayout.update');
    Route::delete('aboutlayout/{aboutlayout}','destroy')->name('aboutlayout.destroy');
});
Route::controller(ReservationController::class)->group(function () {
    Route::get('reservationlayout', 'index')->name('reservationlayout.index');
    Route::post('reservationlayout','store')->name('reservationlayout.store');
});

