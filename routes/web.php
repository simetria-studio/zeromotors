<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\FinanciamentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\ReciveController;
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

    Route::get('cars-site', [PainelController::class, 'siteCars'])->name('site.cars');
    Route::get('cars-site/show/{id}', [PainelController::class, 'carsSiteShow'])->name('site.cars.show');

    Route::post('car/store', [CarController::class, 'store'])->name('car.store');

    Route::get('financiamentos', [PainelController::class, 'financiamentos'])->name('financiamentos');
    Route::get('financiamento-show/{id}', [PainelController::class, 'financiamento'])->name('finaciamento.show');

    Route::get('site-config', [PainelController::class, 'siteConfig'])->name('painel.site.config');
    Route::post('site-config-post', [PainelController::class, 'siteConfigStore'])->name('painel.store.config');
    Route::post('site-config-update/{id}', [PainelController::class, 'siteConfigUpdate'])->name('painel.update.config');
});

Route::get('marcas', [CarController::class, 'create'])->name('car.marca');
Route::get('modelos', [CarController::class, 'modelos']);


Route::get('/', [SiteController::class, 'index'])->name('site');
Route::get('/car/detail/{id}', [SiteController::class, 'carDetail'])->name('site.car.detail');
Route::get('estoque', [SiteController::class, 'estoque'])->name('site.estoque');
Route::get('filtroModelo', [SiteController::class, 'filterModel']);
Route::get('filtroMarca', [SiteController::class, 'filterMarca'])->name('filtro.marca');

Route::get('/venda-seu-veiculo',[SiteController::class, 'vendaSeuVeiculo'])->name('site.venda');
Route::post('/venda-seu-veiculo/store', [ReciveController::class, 'store'])->name('recive.store');

Route::get('financimento', [SiteController::class, 'financiamento'])->name('financiamento');

Route::get('/thanks', [ReciveController::class, 'create'])->name('thanks');
Route::get('/buscarCep', [ReciveController::class, 'buscaCep'])->name('buscar.cep');

Route::post('financimento-store', [FinanciamentoController::class, 'store'])->name('financiamento.store');

Route::get('contato', [SiteController::class, 'contato'])->name('contato');
Route::post('contato-send', [SiteController::class, 'contatoSend'])->name('contato.send');

Route::get('priceFilter', [SiteController::class, 'filterPrice']);
