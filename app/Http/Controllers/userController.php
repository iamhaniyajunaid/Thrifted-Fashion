<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\product;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function index()
    {
        $reviews = Review::where('is_approved', true)
            ->latest()
            ->take(10)
            ->get();
            $products = product::latest()
            ->take(10)
            ->get();
        return view('user-panel.index', compact('reviews','products'));
    }
    public function storeReview(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:225',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);
        Review::create([
            'user_name' => $request->user_name,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'is_approved' => false,

        ]);
        return redirect()->back()->with('success', 'Your review has been submitted and is pending approval!');
    }
}
