<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\UserList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserListController extends Controller
{
    public function showLists($id)
    {
        $users = User::find($id);
        $movies = Movie::whereHas('users', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();
        $lists = UserList::whereHas('users', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();
        return view('user_lists', ['users' => $users, 'movies' => $movies, 'lists' => $lists]);
    }

    public function showListsMovies($id)
    {
        $user = User::find($id);
        return view('movies')->with('user', $user);
    }

    public function store(Request $request)
    {
        $list = new UserList;

        $list->title = $request->title;
        $list->description = $request->description;
        $list->save();
        $list->users()->syncWithoutDetaching($request->user_id);

        return Redirect::route('user_lists.showAll', $request->user_id);
    }


    public function update(Request $request, $id)
    {
        $lists = UserList::find($request->id);

        if ($request->title) {
            $lists->title = $request->title;
        }

        if ($request->description) {
            $lists->description = $request->description;
        }

        $lists->save();

        return Redirect::route('user_lists.showAll', $id);
    }

    public function destroy(Request $request)
    {
        $list = UserList::find($request->id);
        $list->delete();
        return view('user_lists/{id}');
    }

    public function showList($id)
    {
        //
        $users = User::find($id);

        $movies = Movie::whereHas('users', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

        $lists = UserList::whereHas('users', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

        return view('user_lists', ['users' => $users, 'movies' => $movies, 'lists' => $lists,]);
    }

    public function showListsTopRated($id)
    {
        //
        $user = User::find($id);
        return view('top_rated')->with('user', $user);
    }

    public function addMoviesToList(Request $request)
    {
        $list = UserList::find($request->list_id);
        $movies = Movie::get();
        $id = $request->user_id;
        $lists = UserList::whereHas('users', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

        $list->users()->syncWithoutDetaching($request->user_id);
        $list->movies()->syncWithoutDetaching($request->movie_id);
        return view('movies', ['movies' => $movies, 'lists' => $lists]);
    }
}
