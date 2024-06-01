<?php

use App\Http\Controllers\BesoinController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatiereController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UniteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CarburantController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::name('admin.')->middleware('auth')->group(function () {
    /*Route::get('/', function () {
        return view('home', HomeController::class);
    })->name('home');*/
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('carburant', CarburantController::class)->except(['show']);
    Route::resource('besoin', BesoinController::class)->except(['show']);
    Route::resource('compte', CompteController::class)->except(['show']);
    Route::resource('matiere', MatiereController::class)->except(['show']);
    Route::resource('materiel', MaterielController::class)->except(['show']);

    //Exports
    Route::get('/export-carburant', [CarburantController::class, 'export'])->name('export.carburant');
    Route::get('/export-besoin', [BesoinController::class, 'export'])->name('export.besoin');
    Route::get('/export-compte', [CompteController::class, 'export'])->name('export.compte');
    Route::get('/export-matiere', [MatiereController::class, 'export'])->name('export.matiere');
    Route::get('/export-materiel', [MaterielController::class, 'export'])->name('export.materiel');
});






