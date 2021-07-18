@php

$list_lecture = $courseDetail->lecture;
$fisrt_lecture = $list_lecture->first();

$defaultSource = '';
if (!empty($fisrt_lecture)) {
    $defaultSource = 'https://player.vimeo.com/video/' . $fisrt_lecture->video_resource . '?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=217713';
}

$is_bought = false;
$student_courses = null;

if (Auth::check() && !empty(Auth::user()->student_courses())) {
    if (Auth::user()->student_courses()->get()->count()) {
        
        $student_courses = Auth::user()->student_courses()->get();
        $is_bought = $student_courses[0]->course_id == $fisrt_lecture->course_id;
    }
}

@endphp 
{{-- @if (!empty($fisrt_lecture)) --}}
<div class="container-fluid show-video" id="video-lecture">
    <div class="bg-white mt-5">
        <div class="mb-3 text-primary">
            <div class="h1 m-0">{{ $courseDetail->course_name }}</div>

            <div class="h1 m-0">{{ $courseDetail->lecture->first(function($item) use ($latesLecture, $fisrt_lecture) {
                $checker = $latesLecture ? $latesLecture : $fisrt_lecture->id;
                return $item->id == $checker;
            })->lectures_name }}</div>
        </div>
        <p class="h2 text-primary">{{ $courseDetail->tutor->full_name }}</p>
        <div class="d-flex flex-sm-wrap top-course-detail justify-content-between mb-5">
            <div class="d-flex align-items-center text-primary">
                @for ($i = 0; $i < 4; $i++)
                    <img src="{{ asset('images/ic/ic_star.svg') }}" width="35">
                @endfor
                <img src="{{ asset('images/ic/ic_star_border.svg') }}" width="35">
                <h4 class="mb-0 ml-3">4.5/5</h4>
            </div>
            @if (Auth::check())
                <x-like.like :likeRef=$courseDetail :likeModule=\App\Models\Course::class></x-like.like>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 bg-white">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe id="videoView" src={{ $defaultSource }} class="embed-responsive-item" frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="Default name"></iframe>
            </div>
        </div>
        <div class="col-lg-4 bg-white">
            <div class="box-list-video text-primary">
                <ol>
                    @foreach ($list_lecture as $index => $item)
                        @if ($index == 0)
                            <li class="lecture-active h2" role="button" v-on:click="clickLecture" 
                                data-id="{{ $item->video_resource }}"
                                data-lecture={{ $item->id }}>
                                {{ $item->lectures_name }}
                            </li>
                        @else
                            <li class="lecture-{{ $is_bought ? 'active' : 'inactive'}} h2" 
                                role="button" 
                                v-on:click="clickLecture" 
                                data-id="{{  $is_bought  ? $item->video_resource : null }}"
                                data-lecture={{ $item->id }} >
                                {{ $item->lectures_name }}
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>

<script>
    var videoLecture = new Vue({
        el: "#video-lecture",
        data: {
            videoLink: "",
        },
        methods: {
            clickLecture: function() {
                if (event.target.getAttribute('data-id')) {
                    /** 
                    *@TODO Update logic load page
                    */
                    // this.videoLink = "https://player.vimeo.com/video/" + event.target.getAttribute('data-id') +
                    //     "?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=217713"
                    // document.getElementById('videoView').src = this.videoLink

                    let user_id = {{ Auth::check() ? Auth::user()->id : 0 }};
                    let lecture_id = event.target.getAttribute('data-lecture');

                    axios.put( "{{config('app.home_url').'/lecture/'}}"+event.target.getAttribute('data-lecture'), {
                            user_id: user_id,
                            course_id: {{$courseDetail->id}}
                        }).then(function (response) {
                                console.info(response);
                                window.location.reload(true);
                            })
                            .catch(function (error) {
                                console.error(error);
                            });
                } else {
                    alert("you not buy this course yet")
                }
            }
        }
    });
</script>

{{-- @endif --}}
