<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\WorkerController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\MoveController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('feature', function () {
    return view('feature');
})->name('feature');

Route::get('faq', function(){
    return view('faq');
})->name('faq');

Route::get('contact', function(){
    return view('contact');
})->name('contact');

Route::get('countries', [FrontController::class, 'country'])->name('countrie');

Route::get('allsponsorcvs', [FrontController::class, 'move'])->name('allsponsorcvs');

Route::get('track-order', [FrontController::class, 'order'])->name('track');
Route::post('track-order', [FrontController::class, 'track'])->name('track.submit');
Route::get('track-order/result', [FrontController::class, 'reslut'])->name('result');


Route::prefix('service/')->name('service.')->group(function (){

    Route::get('/', function () {
        return view('service');
    })->name('all');

    Route::get('arrive', function(){
        return view('arrive');
    })->name('arrive');
    
    Route::get('worker', [FrontController::class, 'worker'])->name('worker');

    Route::get('issuance', function(){
        return view('issuance');
    })->name('issuance');
});


// Admin Routes
Route::get('admin/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('admin/register', [RegisterController::class, 'index'])->name('register');
Route::post('admin/register', [RegisterController::class, 'register'])->name('register.submit');
// Auth::routes();
Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Worker Routes
    Route::prefix('workers/')->name('worker.')->group(function(){
        Route::get('/', [WorkerController::class, 'index'])->name('manage');
        Route::get('/add', [WorkerController::class, 'add'])->name('add');
        Route::post('/add', [WorkerController::class, 'store'])->name('store');
        Route::get('{id}/edit', [WorkerController::class, 'edit'])->name('edit');
        Route::post('{id}/edit', [WorkerController::class, 'update'])->name('update');
        Route::get('{id}/view', [WorkerController::class, 'show'])->name('view');
        Route::get('{id}/delete', [WorkerController::class, 'delete'])->name('delete');
        Route::post('/', [WorkerController::class, 'search'])->name('search');
    });

    // Move Routes
    Route::prefix('allsponsorcvs/')->name('move.')->group(function(){
        Route::get('/', [MoveController::class, 'index'])->name('manage');
        Route::get('/add', [MoveController::class, 'add'])->name('add');
        Route::post('/add', [MoveController::class, 'store'])->name('store');
        Route::get('{id}/edit', [MoveController::class, 'edit'])->name('edit');
        Route::post('{id}/edit', [MoveController::class, 'update'])->name('update');
        Route::get('{id}/view', [MoveController::class, 'show'])->name('view');
        Route::get('{id}/delete', [MoveController::class, 'delete'])->name('delete');
        Route::post('/', [MoveController::class, 'search'])->name('search');
    });

    // Users Routes
    Route::prefix('users/')->name('users.')->group(function(){
        Route::get('/', [UsersController::class, 'index'])->name('manage');
        Route::get('/add', [UsersController::class, 'add'])->name('add');
        Route::post('/add', [UsersController::class, 'store'])->name('store');
        Route::get('{id}/edit', [UsersController::class, 'edit'])->name('edit');
        Route::post('{id}/edit', [UsersController::class, 'update'])->name('update');
        Route::get('{id}/view', [UsersController::class, 'show'])->name('view');
        Route::get('{id}/delete', [UsersController::class, 'delete'])->name('delete');
        // Route::post('/', [WorkerController::class, 'search'])->name('search');
    });

    // Order Routes
    Route::prefix('order/')->name('order.')->group(function(){
        Route::get('/', [OrderController::class, 'index'])->name('manage');
        Route::get('/add', [OrderController::class, 'add'])->name('add');
        Route::post('/add', [OrderController::class, 'store'])->name('store');
        Route::get('{id}/edit', [OrderController::class, 'edit'])->name('edit');
        Route::post('{id}/edit', [OrderController::class, 'update'])->name('update');
        Route::get('{id}/view', [OrderController::class, 'show'])->name('view');
        Route::get('{id}/delete', [OrderController::class, 'delete'])->name('delete');
        // Route::post('/', [WorkerController::class, 'search'])->name('search');
    });

    // Country 
    Route::prefix('country/')->name('country.')->group(function(){
        Route::get('/', [CountryController::class, 'index'])->name('manage');
        Route::get('/add', [CountryController::class, 'add'])->name('add');
        Route::post('/add', [CountryController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CountryController::class, 'edit'])->name('edit');
        Route::post('/{id}/edit', [CountryController::class, 'update'])->name('update');
        Route::get('/{id}/delete', [CountryController::class, 'delete'])->name('delete');
    });
});