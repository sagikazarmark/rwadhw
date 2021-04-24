<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PhotoController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/foundation', [HomeController::class, 'foundation'])->name('foundation');
Route::get('/board-members', [HomeController::class, 'boardMembers'])->name('boardMembers');
Route::get('/volunteers', [HomeController::class, 'volunteers'])->middleware('auth')->name('volunteers');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/photos', [PhotoController::class, 'index'])->name('photos');

Route::get('/dashboard', [Dashboard\HomeController::class, 'home'])->name('dashboard');
Route::get('/dashboard/contact-messages', [Dashboard\HomeController::class, 'contactMessages'])->name('dashboard.contactMessages');

Route::get('/dashboard/board-members', [Dashboard\BoardMemberController::class, 'index'])->name('dashboard.boardMembers');
Route::get('/dashboard/board-members/create', [Dashboard\BoardMemberController::class, 'create'])->name('dashboard.boardMembers.create');
Route::get('/dashboard/board-members/{id}', [Dashboard\BoardMemberController::class, 'show'])->name('dashboard.boardMember');
Route::post('/dashboard/board-members', [Dashboard\BoardMemberController::class, 'store']);
Route::get('/dashboard/board-members/{id}/edit', [Dashboard\BoardMemberController::class, 'edit'])->name('dashboard.boardMembers.edit');
Route::put('/dashboard/board-members/{id}', [Dashboard\BoardMemberController::class, 'update']);
Route::delete('/dashboard/board-members/{id}', [Dashboard\BoardMemberController::class, 'destroy']);

require __DIR__.'/auth.php';
