<?php

use App\Http\Controllers\UserListController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Models\Review; //Säger att vi vill använda modellen review

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

Route::get('/', [MovieController::class, 'moviesIndex'])->name('moviesIndex.show');

Route::get('/item_card', function () {
    return view('item_card');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/new_header', function () {
    return view('new_header');
});

Route::get('/new_footer', function () {
    return view('new_footer');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/user_profile', function () {
    return view('user_profile');
});

Route::get('/user_settings', function () {
    return view('user_settings');
});

Route::get('/user_watchlist', function () {
    return view('user_watchlist');
})->middleware(['auth', 'verified'])->name('user_watchlist');


Route::get('/reset_password', function () {
    return view('reset_password');
});

Route::get('/items/{id}', [MovieController::class, 'showOne'])->name('movies.showOne');


Route::get('/item_card', [MovieController::class, 'showAll']);

Route::get('/movies', [MovieController::class, 'movies'])->name('movies.show');
Route::get('/movies/{genre}', [MovieController::class, 'showMoviesInGenre'])->name('movies.showGenre');
Route::get('/movies/items/{id}', [MovieController::class, 'showOneItem'])->name('movies.showOneItem');
Route::post('/movies/addToList', [UserListController::class, 'addMoviesToList'])->name('movies.addMoviesToList');



Route::get('/items_reviews/{id}', [MovieController::class, 'showOneReview'])->name('review.showOne');
Route::post('/items_reviews/{id}', [MovieController::class, 'showOneReview']);
Route::post('/items_reviews/{id}', [ReviewController::class, 'store'])->name('review.store');

Route::get('/user_watchlist/{id}', [WatchlistController::class, 'showWatchlist']);

Route::get('/user_lists/{id}', [UserListController::class, 'showList'])->middleware(['auth', 'verified'])->name('user_lists.showAll');
Route::post('/user_lists/add', [UserListController::class, 'store'])->middleware(['auth', 'verified'])->name('user_lists.store');
Route::put('/user_lists/{id}', [UserListController::class, 'update'])->middleware(['auth', 'verified'])->name('user_lists.update');
Route::delete('/user_lists/{id}', [UserListController::class, 'destroy'])->middleware(['auth', 'verified'])->name('user_lists.destroy');


Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/search_results/{query?}', [SearchController::class, 'search'])->name('search_results');



Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'verified'])->name('admin_dashboard');


Route::get('/admin_movies', [AdminMovieController::class, 'showAll'])->middleware(['auth', 'verified'])->name('admin_movies.showAll');
Route::get('/admin_movies/edit/{id}', [AdminMovieController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin_movies.edit');
Route::get('/admin_movies_add', [AdminMovieController::class, 'create'])->middleware(['auth', 'verified'])->name('admin_movies.add');
Route::post('/admin_movies/store', [AdminMovieController::class, 'store'])->middleware(['auth', 'verified'])->name('admin_movies.store');
Route::get('/admin_movies/show/{id}', [AdminMovieController::class, 'show'])->middleware(['auth', 'verified'])->name('admin_movies.show');
Route::delete('/admin_movies/delete/{id}', [AdminMovieController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin_movies.delete');
Route::put('/admin_movies/update/{id}', [AdminMovieController::class, 'update'])->middleware(['auth', 'verified'])->name('admin_movies.update');

Route::get('/admin_users', [AdminUserController::class, 'showAll'])->middleware(['auth', 'verified'])->name('admin_users.showAll');
Route::get('/admin_users/edit/{id}', [AdminUserController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin_users.edit');
Route::get('/admin_users/show/{id}', [AdminUserController::class, 'show'])->middleware(['auth', 'verified'])->name('admin_users.show');
Route::delete('/admin_users/delete/{id}', [AdminUserController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin_users.delete');
Route::put('/admin_users/update/{id}', [AdminUserController::class, 'update'])->middleware(['auth', 'verified'])->name('admin_users.update');


/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

Route::view('/home', 'index');

Route::get('/dashboard/{id}', [RegisteredUserController::class, 'displayDashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::put('dashboard/approveReview/{id}', [ReviewController::class, 'approveReview'])->middleware(['auth', 'verified'])->name('review.approve');
Route::delete('dashboard/deleteReview/{id}', [ReviewController::class, 'destroy'])->middleware(['auth', 'verified'])->name('review.delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
