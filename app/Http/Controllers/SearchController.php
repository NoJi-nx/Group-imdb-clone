<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Actor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function search (Request $request)
    {
        $query = $request->query('query');

        $movies = Movie::where('title', 'LIKE', '%'.$query.'%')
            ->orWhere('genre', 'LIKE', '%'.$query.'%')
            ->orWhere('releaseYear', 'LIKE', '%'.$query.'%')
            ->paginate(5);
        $actors = Actor::where('firstName', 'LIKE', '%'.$query.'%')
            ->orWhere('lastName', 'LIKE', '%'.$query.'%')
            ->paginate(5);
        return view('search_results', [
            'query' => $query,
            'movies' => $movies,
            'actors' => $actors,
        ]);

}};
?>
