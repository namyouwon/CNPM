<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\loginController;

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

Route::get('login', [loginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [loginController::class, 'store']);
Route::post('logout',[loginController::class, 'logout']);
Route::get('register',[loginController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('index')->group(function () {
        Route::get('/', [mainController::class, 'index'])->name('index');
        Route::get('/viewDetail', [mainController::class, 'detail']);
        Route::get('/edit', [mainController::class, 'edit']);
    });
    Route::get('/main', [mainController::class, 'main'])->name('main');
    Route::get('/employee', [mainController::class, 'employee']);
    Route::get('/MCP', [mainController::class, 'MCP']);
    Route::get('/vehicle', [mainController::class, 'vehicle']);
});




