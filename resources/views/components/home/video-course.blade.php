@php

$lecture_default = null;

$defaultSource = '';
$list_lecture = $courseDetail->lecture;

if (empty($latesLecture)) {
$lecture_default = $list_lecture->first();
} else {
$lecture_default = $courseDetail->lecture->first(function($item) use ($latesLecture) {
return $item->id == $latesLecture;
});
}

if (!empty($lecture_default)) {
$defaultSource = 'https://player.vimeo.com/video/' . $lecture_default->video_resource .
'?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id='.config('vimeo_app_id');
}


$is_bought = false;
$student_courses = null;

if (Auth::check() && !empty(Auth::user()->student_courses())) {
if (Auth::user()->student_courses()->get()->count()) {
$student_courses = Auth::user()->student_courses()->get();
$is_bought = $student_courses->firstWhere('course_id', $lecture_default->course_id);
}
}
@endphp

<div class="container-fluid show-video py-5">
    <div class="row">
        <div class="bg-white col-lg-8">
            <div class="text-primary d-flex">
                <div class="h2 mb-0 mr-3">{{ $courseDetail->course_name }}</div>
                <br>
                <div class="mt-auto">
                    @if (Auth::check())
                    <x-like.like :likeRef=$courseDetail :likeModule=\App\Models\Course::class></x-like.like>
                    @endif
                </div>
            </div>
            <div class="h2 m-0 text-primary">
                {{ $courseDetail->lecture->first(function($item) use ($lecture_default) {
                    return $item->id == $lecture_default->id;
                })->lectures_name }}
            </div>
            <p class="h5 mt-5 text-primary">{{ $courseDetail->tutor->full_name }}</p>
            <div class="d-flex flex-sm-wrap top-course-detail justify-content-between mb-5">
                <div class="d-flex align-items-center text-primary">
                    @php
                    $rate = (int)floor($courseDetail->rating_average);
                    @endphp
                    @for ($i = 0; $i < $rate; $i++) <img src="{{ asset('images/ic/ic_star.svg') }}" width="29">
                        @endfor
                        @for ($i = 0; $i < 5-$rate; $i++) <img src="{{ asset('images/ic/ic_star_border.svg') }}"
                            width="29">
                            @endfor
                            <h5 class="mb-0 ml-3">{{$courseDetail->rating_average}}/5</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
    <div class="row mb-4" id="video-lecture">
        <div class="col-lg-8 bg-white">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe id="videoView" src={{ $defaultSource }} class="embed-responsive-item" frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="Default name"></iframe>
            </div>
        </div>
        <div class="col-lg-4 bg-white">
            <div class="box-list-video text-primary pt-3">
                <ol>
                    @foreach ($list_lecture as $index => $item)
                    @if ($index == 0)
                    <li class="lecture-active h2" role="button" v-on:click="clickLecture"
                        data-id="{{ $item->video_resource }}" data-lecture={{ $item->id }}>
                        {{ $item->lectures_name }}
                    </li>
                    @else
                    <li class="lecture-{{ $is_bought ? 'active' : 'inactive'}} h2" role="button"
                        v-on:click="clickLecture" data-id="{{  $is_bought  ? $item->video_resource : null }}"
                        data-lecture={{ $item->id }}>
                        {{ $item->lectures_name }}
                    </li>
                    @endif
                    @endforeach
                </ol>
            </div>
            @if(!Auth::check())
            <div class="text-center btn-above-video mt-5">
                <button class="btn-register-now mt-0" id="" data-toggle="modal" data-target="#registerModal">
                    <h4 class="mb-0 font-weight-bold">@lang('keywords.tryItNow')</h4>
                </button>
            </div>
            @endif

        </div>
    </div>
</div>

<script>
    // var videoLecture = new Vue({
    //     el: "#video-lecture",
    //     data: {
    //         videoLink: "",
    //     },
    //     methods: {
    //         clickLecture: function () {
    //             if (event.target.getAttribute('data-id')) {

    //                 let user_id = {{ Auth::check() ? Auth::user()->id : 0 }};
    //                 let lecture_id = event.target.getAttribute('data-lecture');

    //                 axios.put("{{config('app.home_url').'/lecture/'}}" + event.target.getAttribute('data-lecture'), {
    //                     user_id: user_id,
    //                     course_id: {{$courseDetail->id}}
    //                 }).then(function (response) {
    //                     console.info(response);
    //                     window.location.reload(true);
    //                 })
    //                     .catch(function (error) {
    //                         console.error(error);
    //                     });
    //             } else {
    //                 alert("you not buy this course yet")
    //             }
    //         }
    //     }
    // });
</script>

{{-- @endif --}}