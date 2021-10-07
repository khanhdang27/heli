@extends('layout.app')
@section('title','Payment')
@section('content')
    @php
        use App\Models\Course;
        $course = $course_with_group->membershipCourses->course;
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.coursePayment')
        </div>
        <div class="container-fluid text-primary pb-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-sm-10 col-lg-12">
                    <h1 class="my-5 font-weight-bold">@lang('keywords.coursePayment')</h1>
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-lg-7 col-xl-6">
                            <h1 class="font-weight-bold text-center mb-5">Confirm Payment</h1>
                            <h3 class="font-weight-bold mb-5">Details</h3>
                            <table width="100%" class="mb-5">
                                <tr>
                                    <td><h4 class="font-weight-bold mb-4">Recipient</h4></td>
                                    <td class="text-right"><h4 class="font-weight-bold mb-4">Helios Education</h4></td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">Course Price</h4></td>
                                    <td class="text-right"><h4 class="font-weight-bold mb-4">
                                            @if ($course_with_group->getDiscount() > 0)
                                                {{ $course_with_group->getPriceDiscount() }}
                                            @else
                                                {{ $course_with_group->getPrice() }}
                                            @endif
                                            tokens</h4>
                                    </td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">Course Name</h4></td>
                                    <td class="text-right">
                                        <h4 class="font-weight-bold mb-4">{{$course->course_name}}</h4>
                                    </td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-sm-4">
                                    <button class="btn btn-white text-primary border-primary py-3 h4 font-weight-bold w-100"
                                    onclick="window.history.go(-1)">Back</button>
                                </div>
                                <div class="col-sm-8">
                                    <a class="btn btn-primary py-3 h4 font-weight-bold w-100"
                                    href="{{route('site.user.success', ['product_id'=> $product_id, 'room' => $room])}}">Completed</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

