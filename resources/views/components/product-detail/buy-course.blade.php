<div class="product bg-white border-secondary p-4">
    <div class="mb-3 title-course">
        <p class="m-0">{{$courseDetail->course_name}}</p>
    </div>
    <p class="m-0 teacher-name">{{$courseDetail->tutor->full_name}}</p>
    <p class="price">HKD{{$courseDetail->course_price}}</p>
    @if(\Illuminate\Support\Facades\Auth::check())
        <a href="#">
            <div class="btn-primary mt-3 btn-register-now product-btn">
                @lang('keywords.coursePage.buyNow')
            </div>
        </a>
    @else
        <button class="btn-register-now m-0 btn-primary product-btn p-0 w-100" data-toggle="modal" data-target="#registerModal">
            <span>@lang('keywords.coursePage.registerNow')</span>
        </button>
    @endif
    <div class="d-flex share-bar">
        <span class="mr-2"><img width="36" src="{{ asset("images/ic/ic_share.svg")}}"></span>
        <p class="text-20 pt-1">@lang('keywords.coursePage.shareCourse')</p>
    </div>
</div>
