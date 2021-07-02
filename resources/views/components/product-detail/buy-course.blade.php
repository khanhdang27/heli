@php
    use App\Models\Course;
    $course = $courseDetail->membershipCourses->course;
@endphp

<div class="bg-white border border-secondary p-4 text-primary">
    <div class="mb-3 title-course">
        <p class="m-0">
            {{$course->course_name}}
        </p>
    </div>
    @if($course->type != Course::$DOCUMENT)
        <p class="m-0 teacher-name">Tutor Name: {{$course->tutor->full_name}}</p>
    @endif
    <h2 class="font-weight-bold">HKD: {{$courseDetail->getPriceDiscount()}}$ </h2>
    @if(\Illuminate\Support\Facades\Auth::check())
        <a href="{{route('site.order.create', ['product_id'=>$courseDetail->id])}}">
            <div class="btn-primary mt-3 btn-register-now product-btn">
                @lang('keywords.coursePage.buyNow')
            </div>
        </a>
    @else
        <button class="btn-register-now m-0 btn-primary product-btn p-0 w-100" data-toggle="modal"
                data-target="#registerModal">
            <span>@lang('keywords.coursePage.registerNow')</span>
        </button>
    @endif
    <div class="d-flex share-bar">
        <span class="mr-2"><img width="36" src="{{ asset("images/ic/ic_share.svg")}}"></span>
        <a href="#">
            <h2 class="pt-1">@lang('keywords.coursePage.shareCourse')</h2>
        </a>
    </div>
</div>
