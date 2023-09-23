<?php

use App\Http\Controllers\NaissancesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn() => redirect(route('naissances.create')));
Route::get('/create', [NaissancesController::class, 'create'])->name('naissances.create');
Route::post('/store', [NaissancesController::class, 'store'])->name('naissances.store');
// Route::resource('naissances', NaissancesController::class);
Route::get('naissances/recherche', [NaissancesController::class, 'rechercher'])->name('naissnaces.recherche');
Route::post('/naissances/find', [NaissancesController::class, 'find'])->name('naissances.find');