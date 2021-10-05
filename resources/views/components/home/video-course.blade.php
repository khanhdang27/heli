@php
use Illuminate\Support\Facades\Auth;

$lecture_default = null;

$defaultSource = '';
$list_lecture = $courseDetail->lecture;

if (empty($latesLecture)) {
    $lecture_default = $list_lecture->first();
} else {
    $lecture_default = $courseDetail->lecture->first(function ($item) use ($latesLecture) {
        return $item->id == $latesLecture;
    });
}

if (!empty($lecture_default)) {
    $defaultSource = 'https://player.vimeo.com/video/' . $lecture_default->video_resource . '?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=' . config('vimeo_app_id');
}

$is_bought = false;
$student_courses = null;

if (Auth::check() && !empty(Auth::user()->student_courses())) {
    if (
        Auth::user()
            ->student_courses()
            ->get()
            ->count()
    ) {
        $student_courses = Auth::user()
            ->student_courses()
            ->get();
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
                        <like-component v-bind:user-id="{{ Auth::user()->id }}"
                            v-bind:like-ref-id="{{ $courseDetail->id }}" v-bind:like-module="'App\\Models\\Course'"
                            v-bind:like-no="0" v-bind:is-liked="{{ $courseDetail->likebyUser() }}">
                        </like-component>
                    @endif
                </div>
            </div>
            <div class="h2 m-0 text-primary">
                {{ $courseDetail->lecture->first(function ($item) use ($lecture_default) {
    return $item->id == $lecture_default->id;
})->lectures_name }}
            </div>
            <p class="h5 mt-5 text-primary">{{ $courseDetail->tutor->full_name }}</p>
            <div class="d-flex flex-sm-wrap top-course-detail justify-content-between mb-5">
                <div class="d-flex align-items-center text-primary">
                    <rating-component v-bind:rating="{{ $courseDetail->rating_average }}" v-bind:read-only="true">
                    </rating-component>
                </div>
            </div>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
    <lecture-component v-bind:is-login="{{ Auth::check() ? 'true' : 'false' }}" v-bind:course-id="2">
    </lecture-component>
</div>

{{-- @endif --}}
