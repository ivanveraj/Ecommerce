<?php

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


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home_admin');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Elements page
    Route::group(['prefix' => 'elements'], function () {
        Route::get('buttons', function () {
            return view('modelos.buttons');
        })->name('buttons');
        Route::get('cards', function () {
            return view('modelos.cards');
        })->name('cards');
        Route::get('forms', function () {
            return view('modelos.forms');
        })->name('forms');
        Route::get('modals', function () {
            return view('modelos.modals');
        })->name('modals');
        Route::get('tables', function () {
            return view('modelos.tables');
        })->name('tables');
    });

    /* //PEDIDOS
    Route::group(['prefix' => 'pedidos'], function () {
        Route::get('crear', [OrderController::class, 'list'])->name('create_order');
        Route::get('productos/{product}', [OrderController::class, 'viewReferncesByProduct'])->name('references_by_product');
        Route::get('categoria/{category}', [OrderController::class, 'viewReferncesByCategory'])->name('references_by_category');
    }); */
});
