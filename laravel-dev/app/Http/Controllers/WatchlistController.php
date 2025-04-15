<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Movie;

class WatchlistController extends Controller
{
    //
    public function showWatchlist($id)
    {
        //
        $users = User::find($id);
        $movies = Movie::find($id);
        return view('user_watchlist', ['users' => $users, 'movies' => $movies]);
    }

    public function showWatchlistItems($id)
    {
        //
        $users = User::find($id);
        return view('items')->with('users', $users);
    }

    public function showWatchlistMovies($id)
    {
        //
        $users = User::find($id);
        return view('movies')->with('users', $users);
    }

    public function showWatchlistUserDashboard($id)
    {
        //
        $users = User::find($id);
        return view('user_dashboard')->with('users', $users);
    }

    public function showWatchlistTopRated($id)
    {
        //
        $user = User::find($id);
        return view('top_rated')->with('user', $user);
    }
}
