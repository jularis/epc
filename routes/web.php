<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\ProduitController;

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
    return redirect(app()->getLocale());
});
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'
  ], function() {

    Route::get('/', [HomeController::class, 'index'])->name('accueil');
    Route::get('sitemap', [HomeController::class, 'sitemap']);
    Route::get('/presentation', [AboutController::class, 'index']);

    Route::get('/contacts', [AboutController::class, 'contact']);

    Route::get('/services/{slug}', [AboutController::class, 'services']);

    Route::get('/faire-un-don', [AboutController::class, 'fairedon']);

    Route::get('/formations/{categ}',[FormationController::class, 'category']);
    Route::get('/formations/inscription/{slug}',[FormationController::class, 'inscris']);

    Route::get('/examens/{categ}',[ExamenController::class, 'index']);
    Route::get('/examens/{categ}/{slug}',[ExamenController::class, 'show']);

    Route::get('/galeries',[GalerieController::class, 'index']);
    Route::get('/galeries/{slug}',[GalerieController::class, 'show']);
    Route::resource('produits', ProduitController::class);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
