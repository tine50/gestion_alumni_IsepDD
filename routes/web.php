<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\DepartementController;

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

/**
 * Cette route affiche la page d'acceuil administrateur
 */
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
/**
 * Cette route permet d'afficher les departements d'un promo
 */
Route::get('/departements', [DepartementController::class, 'index'])->name('departements');
/**
 * cette route permet d'afficher l'ensemble des routes d'un département
 */
Route::get('/filieres', [FiliereController::class, 'index'])->name('filieres');
/**
 * Cette route permet d'afficher la liste des etudiants d'une filière
 */

Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
