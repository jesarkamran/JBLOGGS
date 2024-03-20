<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;

use App\Models\post;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Main Page Route
Route::get('/', [Controller::class, 'index']);

// Sign In Routes
Route::get('/signin', [Controller::class, 'indexSignin']);
Route::post('/signin', [Controller::class, 'signin']);

// Register routes
Route::get('/register', [Controller::class, 'indexRegister']);
Route::post('/register', [Controller::class, 'register']);

//Dashboard routes
Route::get('/dashboard', [Controller::class, 'indexDashboard']);

// Logout Routes
Route::get('/logout', [Controller::class, 'logout']);

// Posting a Blogg routes
Route::get('/post_blog', [PostController::class, 'index']);
Route::post('/post_blog', [PostController::class, 'store']);

// Reading a Blogg
Route::get('/read_blog', [PostController::class, 'read']);
Route::get('/read_blog/{id}', [PostController::class, 'show']);
