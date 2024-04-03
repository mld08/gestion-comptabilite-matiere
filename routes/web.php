<?php

use App\Http\Controllers\BesoinController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UniteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CarburantController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::name('admin.')->group(function () {
    /*Route::get('/', function () {
        return view('home', HomeController::class);
    })->name('home');*/
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('produit', ProduitController::class)->except(['show']);
    Route::resource('categorie', CategorieController::class)->except(['show']);
    Route::resource('unite', UniteController::class)->except(['show']);
    Route::resource('client', ClientController::class)->except(['show']);
    Route::resource('commande', CommandeController::class)->except(['show']);
    Route::resource('carburant', CarburantController::class)->except(['show']);
    Route::resource('besoin', BesoinController::class)->except(['show']);
    Route::resource('compte', CompteController::class)->except(['show']);
});

Route::get('/export-commande', [CommandeController::class, 'export'])->name('export.commande');
Route::get('/export-client', [ClientController::class, 'export'])->name('export.client');
Route::get('/export-produit', [ProduitController::class, 'export'])->name('export.produit');
Route::get('/export-categorie', [CategorieController::class, 'export'])->name('export.categorie');
Route::get('/export-unite', [UniteController::class, 'export'])->name('export.unite');
Route::get('/export-carburant', [CarburantController::class, 'export'])->name('export.carburant');
Route::get('/export-besoin', [BesoinController::class, 'export'])->name('export.besoin');
Route::get('/export-compte', [CompteController::class, 'export'])->name('export.compte');



