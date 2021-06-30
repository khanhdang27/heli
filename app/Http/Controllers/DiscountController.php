<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseDiscount;
use App\Models\CourseMembershipDiscount;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discount = Discount::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.discount.index',[
            'discount' => $discount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.discount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);

        DB::beginTransaction();

        try {
            Discount::create($input);
            DB::commit();
            return redirect()->back()->with('success','Save Success');

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('errors','Save Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        return view('admin.discount.edit',[
            'discount' => $discount
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        $discount->update(
            $request->validate([
                'name' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'description' => 'required',
            ])
        );
        return back()->with('success', 'Update success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();
        return back()->with('success', 'Delete success!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function apply($id)
    {
        $discount = Discount::find($id);
        $courses = Course::query()->paginate(15);

        $courseDiscount = CourseDiscount::with('course')->where('discount_id', $id)->paginate(15);

        return view('admin.discount.apply',compact('discount', 'courses', 'courseDiscount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function storeApply($id, Request $request)
    {
        DB::beginTransaction();
        $input = $request->input();
        
        try {
            foreach ($request->input('course_id') as $key => $value) {
                if (empty($input['discount_'.$value])) {
                    DB::rollback();
                    return back()->withErrors(['discount_'.$value => 'Discount value is required']);
                }
                $courseDiscourse = CourseDiscount::updateOrCreate([
                    'course_id' => $value,
                    'discount_id' => $id,
                ],[
                    'discount_value' => $input['discount_'.$value]
                ]);
                $priceTags = CourseMembershipDiscount::with('membershipCourses')->whereHas('membershipCourses', function ($query) use ($value){
                       return $query->where('course_id', $value);
                    })->get();

                foreach ($priceTags as $priceTag) {
                    $priceTag->course_discount_id = $courseDiscourse->id;
                    $priceTag->save();
                }
            }
            
            DB::commit();
            return back()->with(['success'=> "Update Succeed"]);
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return back()->with(['errors'=> "Update Error"]);
        }
    }
}
