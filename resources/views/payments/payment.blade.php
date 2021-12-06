@php
use App\Models\Course;
$course = $course_with_group->membershipCourses->course;
@endphp
@extends('layout.app')
@section('title', 'Payment')
@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.coursePayment')
        </div>
        @if ($duplicate == true)
            <div class="modal show d-block overlay" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                        </div>
                        <div class="modal-body text-center">
                            Duplicate schedule! Please check your schedule.
                        </div>
                        <div class="modal-footer border-0 pb-5">
                            <a type="button" class="btn btn-secondary mx-auto"
                                href="{{ route('site.course.show', $course->id) }}">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        @endif
        <div class="container-fluid text-primary pb-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-sm-10 col-lg-12">
                    <h1 class="my-5 font-weight-bold">@lang('keywords.coursePayment')</h1>
                    <div class="row flex-wrap-reverse">
                        <div class="col-lg-7">
                            <div class="card border-2 border-primary mb-5">
                                <div class="card-body text-primary p-5">
                                    <h4 class="card-title font-weight-bold border-bottom border-primary pb-3">
                                        Your Course
                                    </h4>
                                    <div class="card border-0 mt-4">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="product-payment card-body mb-3"
                                                    style="background-color: {{ $course->subject->subject_color_background }};
                                                                                                         color: {{ $course->subject->subject_color_text }}">
                                                    <div class="text-center">
                                                        <small>{{ $course->subject->certificate->certificate_code }}</small>
                                                    </div>
                                                    <p class="text-center">
                                                        <small>
                                                            @if ($course->type == \Constants::COURSE_LIVE)
                                                                @lang('keywords.course-item.liveCourse')
                                                            @elseif($course->type== \Constants::COURSE_RECORD)
                                                                @lang('keywords.course-item.courseRecord')
                                                            @endif
                                                        </small>
                                                    </p>
                                                    <div class="py-2 px-4 border border-white">
                                                        <p class="text-center m-0">
                                                            <small>{{ $course->course_name }}</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="card-body p-0">
                                                    <h5 class="text-limit-3">{{ $course->course_description }}</h5>
                                                    <p class="card-text">
                                                        <small>{{ $course->tutor->full_name }}</small>
                                                    </p>
                                                    <h3 class="font-weight-bold">
                                                        {{ $course_with_group->getPriceDiscount() }}
                                                        tokens
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table width="100%" class="my-5">
                                        <tr>
                                            <td>
                                                <h4 class="font-weight-bold">Sub Total</h4>
                                            </td>
                                            <td class="text-right">
                                                <h4 class="font-weight-bold"> {{ $course_with_group->getPrice() }} tokens
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr class="font-weight-bold">
                                            <td>
                                                <h4 class="font-weight-bold">Discount</h4>
                                            </td>
                                            <td class="text-right">
                                                <h4 class="font-weight-bold">
                                                    {{ $course_with_group->getDiscount() }} tokens
                                                </h4>
                                            </td>
                                        </tr>
                                    </table>
                                    <div
                                        class="d-flex justify-content-between align-items-center bg-btn-payment p-4 shadow-sm
                                                mb-5">
                                        <h3 class="m-0 font-weight-bold">Total</h3>
                                        <h3 class="m-0 font-weight-bold">
                                            {{ $course_with_group->getPriceDiscount() }}
                                            tokens
                                        </h3>
                                    </div>
                                    @if ($course_with_group->getPriceDiscount() > Auth::user()->balance)
                                        <a class="btn btn-secondary w-100 py-3 h5 font-weight-bold"
                                            href="{{ route('site.user.wallet') }}">
                                            Purchase Token
                                        </a>
                                    @else
                                        <a class="btn btn-primary w-100 py-3 h5 font-weight-bold"
                                            href="{{ route('site.user.confirm', ['product_id' => $product_id, 'room' => $room]) }}">
                                            Payment</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card border-2 border-primary mb-5">
                                <div class="card-body p-5">
                                    <h4 class="card-title font-weight-bold pb-3">
                                        Your Information
                                    </h4>
                                    <div class="d-flex mb-5">
                                        <div class="rounded-circle border border-primaryr"> </div>
                                        <div>
                                            <h4 class="mb-3 font-weight-bold">{{ Auth::user()->name }}</h4>
                                            <h5>{{ Auth::user()->email }}</h5>
                                        </div>
                                    </div>
                                    <table width="100%" class="mt-5">
                                        <tr>
                                            <td>
                                                <h4 class="font-weight-bold">Wallet Balance </h4>
                                            </td>
                                            <td class="text-right">
                                                <h4 class="font-weight-bold">{{ Auth::user()->balance }} tokens</h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            @if ($course_with_group->getPriceDiscount() > Auth::user()->balance)
                                <div class="alert alert-danger" role="alert" id="noToken">
                                    <h5 class="font-weight-bold text-center">Not enough tokens to pay</h5>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
