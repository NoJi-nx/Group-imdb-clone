<?php

namespace App\Http\Controllers;

use App\Models\UserList;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;
use App\Models\Review;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Genre;

class MovieController extends Controller
{
    //

    public function movies(Request $request)
    {
        $movies = Movie::get();
        $user_id = $request->user_id;
        $lists = UserList::whereHas('users', function ($query) use ($user_id) {
            $query->where('id', $user_id);
        })->get();

        return view('movies', ['movies' => $movies, 'lists' => $lists]);
    }

    public function moviesIndex()
    {
        $movies = Movie::get();

        return view('index', ['movies' => $movies]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showOne($id)
    {
        //
        $movie = Movie::find($id);
        $reviews = Review::whereHas('movies', function ($query) use ($id) {
            $query->where('id', $id)->where('approved', 1);
        })->get();
        return view('items', compact('movie', 'reviews'));
    }

    public function showOneItem($id)
    {
        //
        $movie = Movie::find($id);
        $reviews = Review::whereHas('movies', function ($query) use ($id) {
            $query->where('id', $id)->where('approved', 1);
        })->get();
        return view('items', compact('movie', 'reviews'));
    }



    public function showOneReview($id)
    {
        //
        $movie = Movie::find($id);
        $reviews = Review::whereHas('movies', function ($query) use ($id) {
            $query->where('id', $id)->where('approved', 1);
        })->get();
        return view('items_reviews', compact('movie', 'reviews'));
    }

    public function showMoviesInGenre(Request $request, $genre)
    {
        $movies = Movie::where('genre', $genre)->get();
        $user_id = $request->user_id;
        $lists = UserList::whereHas('users', function ($query) use ($user_id) {
            $query->where('id', $user_id);
        })->get();

        return view('movies', ['movies' => $movies, 'lists' => $lists]);
    }


    public function avgReviewScore($id)
    {
        $avgScore = Review::avg('reviewScore');
        return $avgScore[$id];
    }
}
