<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PartenaireController;

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
    Route::get('/qui-sommes-nous/{slug}', [AboutController::class, 'show']);

    Route::get('/notre-mission-reveler-la-beaute-avec-responsabilite', [AboutController::class, 'mission']);

    Route::get('/nos-actifs-and-engagements', [AboutController::class, 'engagement']);

    Route::get('/contactez-nous', [ContactController::class, 'index']);

    Route::get('/ou-trouver-nos-produits', [PartenaireController::class, 'index']);

    Route::resource('produits', ProduitController::class);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
