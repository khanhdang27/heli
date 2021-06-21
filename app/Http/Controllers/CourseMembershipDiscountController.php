<?php

namespace App\Http\Controllers;

use App\Models\CourseMembershipDiscount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseMembershipDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses_priceTag = CourseMembershipDiscount::with('membershipCourses.course', 'membershipCourses.membership')->get();
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
     * @param  \App\Models\CourseMembershipDiscount  $price_tag
     * @return \Illuminate\Http\Response
     */
    public function show(CourseMembershipDiscount $price_tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseMembershipDiscount  $price_tag
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseMembershipDiscount $price_tag)
    {
        $courseMembershipDiscount = CourseMembershipDiscount::with('membershipCourses', 'courseDiscounts')
            ->where('id', $price_tag->id)->first();
        return view('admin.course-member-discount.edit', [
            'price_tag'=>$courseMembershipDiscount
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseMembershipDiscount  $price_tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseMembershipDiscount $price_tag)
    {
        $input = $request->input();
        $new_price_tag = CourseMembershipDiscount::with('membershipCourses')
                ->where('id', $price_tag->id)->first();
        DB::beginTransaction();

        try {
            $new_price_tag->recommend = $input->recommend;
            $new_price_tag->description = $input->description;
            $new_price_tag->membershipCourses->price_value = $input->price_value;

            DB::commit();

            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return back()->with('success', 'Update error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseMembershipDiscount  $price_tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseMembershipDiscount $price_tag)
    {
        //
    }
}
