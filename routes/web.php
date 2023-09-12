<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;

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
    return view('welcome');
});

Auth::routes();

$postsController = PostsController::class;
Route::get('/p/create', [$postsController, 'create']);
Route::post('/p', [$postsController, 'store']);
Route::get('/p/{post}', [$postsController, 'show']);

$profilesController = ProfilesController::class;
Route::get('/profile/{user}', [$profilesController, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [$profilesController, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [$profilesController, 'update'])->name('profile.update');
