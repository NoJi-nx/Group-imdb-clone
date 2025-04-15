<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class AdminMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_movies');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_movies_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie;

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->genre = $request->genre;
        $movie->releaseYear = $request->releaseYear;
        $movie->photo = $request->photo;
        $movie->itemPhoto = $request->itemPhoto;
        $movie->trailer = $request->trailer;
        $movie->duration = $request->duration;
        $movie->save();
        return redirect('admin_movies')->with('status', 'Added new movie successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);

        return redirect('admin_movies', ['movies' => $movie]);
    }

    public function showAll()
    {
        $movies = Movie::get();
        return view('admin_movies', ['movies' => $movies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('admin_movies_update', ['movies' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $movie = Movie::find($request->id);

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->genre = $request->genre;
        $movie->releaseYear = $request->releaseYear;
        $movie->photo = $request->photo;
        $movie->trailer = $request->trailer;
        $movie->duration = $request->duration;
        $movie->save();
        return redirect('admin_movies')->with('status', 'Updated movie successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $movie = Movie::find($request->id);
        $movie->delete();
        return redirect('admin_movies');
    }
}
