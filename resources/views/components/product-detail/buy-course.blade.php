<div class="product bg-white border-secondary p-4">
    <div class="mb-3 title-course">
        <p class="m-0">{{$courseDetail->course_name}}</p>
    </div>
    <p class="m-0 teacher-name">{{$courseDetail->tutor->full_name}}</p>
    <p class="price">HKD{{$courseDetail->course_price}}</p>
    @if(\Illuminate\Support\Facades\Auth::check())
        <a href="{{ route('site.payment.create') }}" class="btn btn-primary mt-3 btn-register-now product-btn">
            @lang('keywords.coursePage.buyNow')
        </a>
    @else
        <div class="btn-primary m-0 btn-register-now product-btn btn">
            @lang('keywords.coursePage.registerNow')
        </div>
    @endif
    <div class="d-flex share-bar">
        <span class="mr-2"><img width="36" src="{{ asset("images/ic/ic_share.svg")}}"></span>
        <p class="text-20 pt-1">@lang('keywords.coursePage.shareCourse')</p>
    </div>
</div>
