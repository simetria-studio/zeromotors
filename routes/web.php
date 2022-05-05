<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\SiteController;

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


Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [PainelController::class, 'index'])->name('painel');
    Route::get('cars', [PainelController::class, 'cars'])->name('cars');
    Route::get('carAdd', [PainelController::class, 'carAdd'])->name('cars.add');

    Route::get('marcas', [CarController::class, 'create'])->name('car.marca');

    Route::get('modelos', [CarController::class, 'modelos']);
    Route::get('ano', [CarController::class, 'ano']);
    Route::get('info', [CarController::class, 'info']);

    Route::post('car/store', [CarController::class, 'store'])->name('car.store');
});

Route::get('marcas', [CarController::class, 'create'])->name('car.marca');
Route::get('modelos', [CarController::class, 'modelos']);


Route::get('/', [SiteController::class, 'index'])->name('site');
Route::get('/car/detail/{id}', [SiteController::class, 'carDetail'])->name('site.car.detail');
Route::get('estoque', [SiteController::class, 'estoque'])->name('site.estoque');
Route::get('filtroModelo', [SiteController::class, 'filterModel']);
Route::get('filtroMarca', [SiteController::class, 'filterMarca'])->name('filtro.marca');

Route::get('/venda-seu-veiculo',[SiteController::class, 'vendaSeuVeiculo'])->name('site.venda');
