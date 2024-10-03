<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'review' => 'required',
        ]);

        Review::create($request->all());

        return redirect()->back()->with('success', 'Review berhasil ditambahkan!');
    }
}

