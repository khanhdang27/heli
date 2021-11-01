<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_rate = $request->all();
        $course = Course::query()
            ->where('id', $request_rate['course_id'])
            ->first();
        if (!empty($request_rate)) {
            $already_rating = Rating::query()
                ->where('user_id', $request_rate['user_id'])
                ->where('ratingable_id', $request_rate['course_id'])
                ->first();
            if (empty($already_rating)) {
                $rating = new Rating([
                    'user_id' => $request_rate['user_id'],
                    'rating' => $request_rate['rate'],
                    'ratingable_id' => $request_rate['course_id'],
                    'ratingable_type' => Cousre::class,
                ]);

                if ($rating->save()) {
                    if ($course->rating_average == 0) {
                        $course->update([
                            'rating_no' => $course->rating_no + 1,
                            'rating_average' => $request_rate['rate'],
                        ]);
                    } else {
                        $course->update([
                            'rating_no' => $course->rating_no + 1,
                            'rating_average' => ($course->rating_average + $request_rate['rate']) / 2,
                        ]);
                    }
                }
            } else {
                $already_rating->delete();
                $rating = new Rating([
                    'user_id' => $request_rate['user_id'],
                    'rating' => $request_rate['rate'],
                    'ratingable_id' => $request_rate['course_id'],
                    'ratingable_type' => Cousre::class,
                ]);
                $rating->save();
                if ($course->rating_average == 0) {
                    $course->update([
                        'rating_average' => $request_rate['rate'],
                    ]);
                } else {
                    $course->update([
                        'rating_average' => ($course->rating_average + $request_rate['rate']) / 2,
                    ]);
                }
            }
        }
        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
