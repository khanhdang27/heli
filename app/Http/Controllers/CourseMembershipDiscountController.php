<?php

namespace App\Http\Controllers;

use App\Models\CourseMembershipDiscount;
use Illuminate\Http\Request;

class CourseMembershipDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses_priceTag = CourseMembershipDiscount::all();
        return view('admin.course-member-discount.index', [
            'courses_priceTag' => $courses_priceTag,
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseMembershipDiscount  $courseMembershipDiscount
     * @return \Illuminate\Http\Response
     */
    public function show(CourseMembershipDiscount $courseMembershipDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseMembershipDiscount  $courseMembershipDiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseMembershipDiscount $courseMembershipDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseMembershipDiscount  $courseMembershipDiscount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseMembershipDiscount $courseMembershipDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseMembershipDiscount  $courseMembershipDiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseMembershipDiscount $courseMembershipDiscount)
    {
        //
    }
}
