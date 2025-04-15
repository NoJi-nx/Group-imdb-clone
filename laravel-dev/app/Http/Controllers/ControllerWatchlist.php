<?php

namespace App\Http\Controllers;

use App\Models\watchlist;
use Illuminate\Http\Request;

class ControllerWatchlist extends Controller
{
    public function index()
    {
        return response(watchlist::all(), 200);
    }

    public function store(Request $request)
    {
        $watchlist = new watchlist;
        $watchlist->title = $request->title;
        $watchlist->year = $request->year;
        $watchlist->hour = $request->hour;
        $watchlist->genre = $request->genre;
        $watchlist->director = $request->director;
        $watchlist->actor = $request->actor;
        $watchlist->description = $request->description;

        if ($watchlist->save()) {
            return response()->json([
                'success' => true,
                'message' => 'The movie is saved to Watchlist'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'The movie is not saved to Watchlist'
            ], 409);
        }
    }

/*     public function showOne($id)
    {
        //
        $watchlist = watchlist::find($id);
        return view('items',compact('movie'));
    } */

    public function update(Request $request, $id)
    {
        $watchlist = watchlist::find($id);
        $watchlist->update($request->all());
        return response($watchlist, 201);
    }

    public function destroy($id)
    {
        $watchlist = watchlist::find($id);
        $watchlist->delete();
        return response()->json([
            'success' => true,
            'message' => 'The movie is deleted from Watchlist'
        ], 200);
    }
}
