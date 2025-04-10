<?php

use App\Http\Controllers\ProfileController;
use App\Models\Societe;
use App\Models\Partenaire;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\PartenaireController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $partenaires=Partenaire::all();
    return view('welcome',compact('partenaires'));
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/filtres', function () {
    $societes=Societe::all();
    return view('filtre',compact('societes'));
});
Route::get('/get-article-details', [SocieteController::class, 'getArticleDetails'])->name('get.article.details');
Route::get('societes', [SocieteController::class, 'index']);
Route::get('societe', [SocieteController::class, 'indexs']);
Route::post('societes', [SocieteController::class, 'store']);
Route::get('societes/{id}/destroy', [SocieteController::class, 'destroy']);
Route::put('societes/{id}/update', [SocieteController::class, 'update']);
Route::get('partenaires', [PartenaireController::class, 'index']);
Route::post('partenaires', [PartenaireController::class, 'store']);
Route::get('partenaires/{id}/destroy', [PartenaireController::class, 'destroy']);
Route::put('partenaires/{id}/update', [PartenaireController::class, 'update']);
Route::get('/dashboard', function () {
    $societes=Societe::all();
    return view('dashboard',compact('societes'));
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/partenaire', function () {
    $partenaires=Partenaire::all();
    return view('partenaire',compact('partenaires'));
})->middleware(['auth', 'verified'])->name('partenaire');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
