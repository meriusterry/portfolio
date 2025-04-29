<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[PageController::class, 'index'])->name('pages.index');

Route::get('/admin/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/admin/abouts',[AboutController::class, 'edit'])->name('abouts.edit');
Route::patch('/admin/abouts',[AboutController::class, 'update'])->name('abouts.update');

Route::get('/{any}', function(){
    return view('notFoundPage');
})->where('any', "*");