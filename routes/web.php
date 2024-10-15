<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlamaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedigriController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|s
*/
Route::get('/', [UserController::class, 'index'])->name('loginView');   
Route::get('/login', [UserController::class, 'index'])->name('loginView');
Route::middleware(['guest'])->group(function(){
    Route::get('/llama', [LlamaController::class, 'index'])->name('llamaView');
    Route::get('/pedigri', [PedigriController::class, 'index'])->name('pedigriView');
    Route::get('/productores', [ProductController::class, 'index'])->name('productView');
    Route::get('/graficas', [UserController::class, 'graficas'])->name('graficaView');
    Route::get('/reportes', [UserController::class, 'report'])->name('reportView');
    Route::get('/dashboard', [UserController::class, 'create'])->name('mainView');
}); 

