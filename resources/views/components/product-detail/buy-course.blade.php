@php
use App\Models\Course;
$course = $courseDetail->membershipCourses->course
@endphp

<div class="bg-white border border-primary p-5 text-primary buy-course-box mb-5">
    <div class="mb-3 title-course">
        <p class="h2 m-0 font-weight-bold">
            {{$course->course_name}}
        </p>
    </div>
    @if($course->type != Course::DOCUMENT)
    <p class="my-5 h4">{{$course->tutor->full_name}}</p>
    @endif
    <h2 class="my-5 font-weight-bold">HKD: {{$courseDetail->getPriceDiscount()}}$ </h2>
    @if(Auth::check())
    @if(Auth::user()->stripe_id != null)
    @if ($course->type == Course::LIVE)
    <div id="buy_live">
        <form id="form-room" class="form-inline" method="get" v-on:submit="buyCourse">
            @csrf
            <input name="product_id" value="{{$courseDetail->id}}" form="form-room" required hidden>
            <div class="btn-above-video w-100">
                <button type="submit" class="btn-register-now w-100 border-primary h4 m-0 py-2">
                    @lang('keywords.coursePage.buyNow')
                </button>
            </div>
        </form>
    </div>
    @else
    <div class="btn-above-video">
        <a href="{{route('site.order.create', ['product_id'=>$courseDetail->id])}}">
            <div class="btn-register-now w-100 border-primary h4 m-0 py-2">
                @lang('keywords.coursePage.buyNow')
            </div>
        </a>
    </div>
    @endif
    @endif
    @else
    <div class="btn-above-video">
        <button class="btn-register-now w-100 border-primary h4 m-0 py-2" data-toggle="modal"
            data-target="#registerModal">
            @lang('keywords.coursePage.registerNow')
        </button>
    </div>
    @endif
    <div class="d-flex align-items-center share-bar">
        <span class="mr-2"><img width="36" src="{{ asset("images/ic/ic_share.svg")}}"></span>
        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            <h5 class="pt-1 mb-0">@lang('keywords.coursePage.shareCourse')</h5>
        </a>
    </div>
    <div class="collapse" id="collapseExample">
        <div class="sharethis-inline-share-buttons"></div>
    </div>
</div>


<script>
    $(document).ready(function () {
            $("form").submit(function (event) {
                let myForm = $('#form-room').serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

            if (myForm.room_id) {
                $.ajax({
                    type: "GET",
                    url: "{{route('site.order.create', ['product_id'=>$courseDetail->id] )}}",
                    data: myForm,
                    dataType: "json",
                    encode: true,
                }).done(function (data) {
                    window.location.replace(data.path);
                }).fail(function (response){
                    alert('Duplicate schedule! Please check your schedule.');
                })
            } else {
                alert('must select a room');
            }

            event.preventDefault()
        })
    })
</script>
