<?php

namespace App\Http\Controllers\Auth;

use App\Models\Review;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\User;
use App\Models\UserList;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => '0',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function displayDashboard($id)
    {
        //
        $users = User::find($id);

        $movies = Movie::whereHas('users', function ($query) use ($id) {
            $query->where('id', $id);
        })->skip(0)->take(3)->get();

        $lists = UserList::whereHas('users', function ($query) use ($id) {
            $query->where('id', $id);
        })->skip(0)->take(4)->get();

        $pendingReviews = Review::where('approved', 0)->get();

        return view('dashboard', ['users' => $users, 'pendingReviews' => $pendingReviews, 'movies' => $movies, 'lists' => $lists]);
    }
}
