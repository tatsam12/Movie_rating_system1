<?php

use App\Http\Controllers\PagesController;
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





Route::get('/',[\App\Http\Controllers\PagesController::class,'home']);
Route::get('/profile',[\App\Http\Controllers\PagesController::class,"profile"]);
Route::get('/create',[\App\Http\Controllers\PagesController::class,"create"]);
Route::post('/create',[\App\Http\Controllers\Pagescontroller::class,"store"]);
Route::get('/list',[\App\Http\Controllers\Pagescontroller::class,"list"]);
Route::get('/edit/{id}', [\App\Http\Controllers\PagesController::class,'edit']);
Route::post('edit', [\App\Http\Controllers\PagesController::class,'update']);
Route::get('/delete/{id}', [\App\Http\Controllers\PagesController::class,'delete']);



Route::get('index', [\App\Http\Controllers\PagesController::class,'index'] );
Route::get('/index/login', [\App\Http\Controllers\PagesController::class,'login']);
Route::post('/login', [\App\Http\Controllers\PagesController::class,'loginForm']);

Route::get('/index/register', [\App\Http\Controllers\PagesController::class,'register']);
Route::post('/index/register', [\App\Http\Controllers\PagesController::class,'RegisterForm']);
Route::post('/index/',[PagesController::class,'stored']);

Route::get('/index/movies',[\App\Http\Controllers\Moviecontroller::class,'movie_section']);
Route::post('movies',[\App\Http\Controllers\Moviecontroller::class,'movie_section']);
Route::post('/index/movies',[\App\Http\Controllers\Commentcontroller::class,'comment_section']);
Route::post('/index/movie_index',[\App\Http\Controllers\MovieController::class,'movie_index']);

Route::post('/index/comment',[\App\Http\Controllers\CommentController::class,'comment_index']);
