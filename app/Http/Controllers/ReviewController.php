<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function showOne($id)
    {
        //
        $reviews = Review::find($id);
        return view('items_reviews', compact('movie'));
    }

    public function store(Request $request, $id)
    {
        $review = new Review();

        $review->username = $request->username;
        $review->reviewTitle = $request->reviewTitle;
        $review->reviewDescription = $request->reviewDescription;
        $review->reviewScore = $request->reviewScore;
        $review->save();
        $review->movies()->syncWithoutDetaching($id);
        $review->users()->syncWithoutDetaching($request->user_id);
        return Redirect::route('review.showOne', $id);
    }

    public function showUnapproved()
    {
        $reviews = Review::where('approved', 0)->get();
        return view('dashboard/{id}', ['reviews', $reviews]);
    }

    public function showReviewsForMovie($id)
    {
        $reviews = Review::whereHas('movies', function ($query) use ($id) {
            $query->where('id', $id)->where('approved', 1);
        })->get();
        return view('items', ['reviews', $reviews, 'id', $id]);
    }

    public function destroy(Request $request, $id)
    {
        Review::where('id', $id)->delete();

        return Redirect::route('dashboard', $request->user_id);
    }

    public function approveReview(Request $request, $id)
    {
        $review = Review::find($id);
        $review->approved = 1;
        $review->save();

        return Redirect::route('dashboard', $request->user_id);
    }
}
