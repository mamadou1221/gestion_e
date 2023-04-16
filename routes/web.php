<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [NotificationController::class, 'donne'])->name('home');
Route::get('/formulaire/{id_cours}', [EvaluationController::class, 'formulaire'])->name('formulaire');
Route::post('/formulaire/{id_cours}', [EvaluationController::class, 'soumettre'])->name('formulaire.soumettre');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')
->middleware('is_admin');
// Route::get('/admin/home/l1', [AdminHomeController::class, 'l1'])->name('l1');
// Route::get('/admin/home/l2', [AdminHomeController::class, 'l2'])->name('l2');
// Route::get('/admin/home/l3', [AdminHomeController::class, 'l3'])->name('l3');
Route::get('/admin/home/messagerie', [AdminHomeController::class, 'showEnvoyerMessage'])->name('messagerie');
Route::get('/admin/home/historique', [NotificationController::class, 'histo'])->name('admin.historiques');
Route::post('/admin/home/messagerie', [NotificationController::class, 'store'])->name('messagerie');
Route::get('/admin/home/{niveau}', [CoursController::class, 'niveau'])->name('cours.niveau');
Route::get('/admin/home/{niveau}/apercus/{id_cours}', [CoursController::class, 'showEval'])->name('apercus');
Route::get('/admin/home', [AdminHomeController::class, 'showCourbe'] )->name('admin.home');




