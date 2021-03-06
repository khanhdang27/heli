<?php

namespace App\Http\Controllers;

use App\Models\CourseMembershipDiscount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Utilities\Constants;

class CourseMembershipDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $courses_priceTag = CourseMembershipDiscount::with('membershipCourses.course', 'membershipCourses.membership')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        return view('admin.course-member-discount.index', [
            'courses_priceTag' => $courses_priceTag,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.course-member-discount.create');
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
            ->where('id', $price_tag->id)
            ->first();
        return view('admin.course-member-discount.edit', [
            'price_tag' => $courseMembershipDiscount,
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

        $new_price_tag = CourseMembershipDiscount::with('membershipCourses', 'membershipCourses.course', 'membershipCourses.course.courseMaterial', 'membershipCourses.course.rooms', 'membershipCourses.course.lecture')
            ->where('id', $price_tag->id)
            ->first();

        if ($this->canPublic($new_price_tag->membershipCourses->course)) {
            DB::beginTransaction();
            try {
                $new_price_tag->recommended = $input['recommend'] ?? false;
                $new_price_tag->welcomes = $input['welcomes'] ?? false;
                $new_price_tag->hot = $input['hot'] ?? false;
                $new_price_tag->publish = $input['publish'] ?? false;
                $new_price_tag->description = $input['description'];
                $new_price_tag->membershipCourses->price_value = $input['price_value'];

                $new_price_tag->save();
                DB::commit();

                return back()->with('success', 'Update success!');
            } catch (\Throwable $th) {
                DB::rollBack();
                return back()->withErrors($th->getMessage());
            }
        } else {
            $_course_type = \Constants::COURSE_TYPES[$new_price_tag->membershipCourses->course->type];
            $_url = '';
            switch ($new_price_tag->membershipCourses->course->type) {
                case \Constants::COURSE_LIVE:
                    $_url = route('admin.course.index');
                    break;
                case \Constants::COURSE_RECORD:
                    $_url = route('admin.course.index');
                    break;
                case \Constants::COURSE_DOCUMENT:
                    $_url = route('admin.course-material.index');
                    break;
                default:
                    return false;
            }
            return back()->withErrors('please check cousre <a href="' . $_url . '" ><strong> [' . $_course_type . '] </strong> </a> already before public');
        }
    }

    public function canPublic($course): bool
    {
        switch ($course->type) {
            case \Constants::COURSE_LIVE:
                return $course->rooms->isNotEmpty();
            case \Constants::COURSE_RECORD:
                return $course->lecture->isNotEmpty();
            case \Constants::COURSE_DOCUMENT:
                return $course->courseMaterial->isNotEmpty();
            default:
                return false;
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
