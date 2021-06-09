<?php

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




Route::prefix('coffee')->group(function () {
    Route::get('/',[CoffeeController::class, 'index'])->name('coffee.index');
    Route::get('/edit/{id}', [CoffeeController::class, 'showEdit'])->name('coffee.show-edit');
    Route::post('/edit/{id}', [CoffeeController::class, 'update'])->name('coffee.update');
    Route::get('/create', [CoffeeController::class, 'create'])->name('coffee.create');
    Route::post('/create', [CoffeeController::class, 'store'])->name('coffee.store');
    Route::get('/delete/{id}', [CoffeeController::class, 'delete'])->name('coffee.delete');
    Route::get('/search/{name}', [CoffeeController::class, 'searchName'])->name('coffee.search-name');
    Route::get('/custom-validation', [CoffeeController::class, 'checkValidation'])->name('coffee.form-submit');
    Route::get('/test',[CoffeeController::class, 'test'])->name('coffee.test');
    Route::get('/test2',[CoffeeController::class, 'test2'])->name('coffee.test2');
});
