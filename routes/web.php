<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ParcInfoController;
use App\Http\Controllers\ChangMatController;
use App\Http\Controllers\AutresequipController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TachEffectueeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImprimeParcInfoController;
use App\Http\Controllers\ImprimeStagiaireController;
use App\Http\Controllers\ImprimeTachEffectueeController;
use App\Http\Controllers\ImprimeChangementmatController;
use App\Http\Controllers\ImprimeAutresequipController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\ServiceController;

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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

Route::resource('parcinfo', ParcInfoController::class);
Route::resource('changmat', ChangMatController::class);
Route::resource('autresequip', AutresequipController::class);
Route::resource('message', MessageController::class);
Route::resource('TachEffectuee', TachEffectueeController::class);
Route::resource('User', UserController::class);
Route::resource('Stagiaire', StagiaireController::class);
Route::resource('departement', DepartementController::class);
Route::resource('service', ServiceController::class);

Route::resource('imprimerparc',ImprimeParcInfoController::class);
Route::resource('imprimerstag',ImprimeStagiaireController::class);
Route::resource('imprimertach',ImprimeTachEffectueeController::class);
Route::resource('imprimerchang',ImprimeChangementmatController::class);
Route::resource('imprimerautre',ImprimeAutresequipController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
