<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;

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
    return view('welcome');
});

Route::get('/employee', [EmpController::class, 'index'])->name('employees.index');

Route::get('/employee/add', [EmpController::class, 'add'])->name('employees.add');

Route::get('/posts/create', [EmpController::class, 'post_create'])->name('posts.create');

Route::post('/posts/post', [EmpController::class, 'post_store'])->name('posts.store');

Route::post('/employee', [EmpController::class, 'store'])->name('employees.store');

Route::get('/employee/{emp}/edit', [EmpController::class, 'edit'])->name('employees.edit');

Route::put('/employee/{emp}', [EmpController::class, 'updated'])->name('employees.updated');

Route::delete('/employee/{emp}/destroy', [EmpController::class, 'destroy'])->name('employees.destroy');