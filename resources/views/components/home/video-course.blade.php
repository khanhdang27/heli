@php
    $list_lecture = $courseDetail->lecture;

    $fisrt_lecture = $list_lecture->first();
    $defaultSource = "https://player.vimeo.com/video/".$fisrt_lecture->video_resource."?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=217713"
@endphp

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<div class="container-fluid show-video" id="video-lecture">
    <div class="mb-3 text-primary">
        <h1 class="m-0">{{$courseDetail->course_description}}</h1>
    </div>
    <p class="teacher-name text-primary">{{$courseDetail->tutor->full_name}}</p>
    <div class="d-flex top-course-detail justify-content-between mb-5">
        <div class="d-flex align-items-center text-primary">
            @for ($i = 0; $i < 4; $i++)
                <img src="{{asset('images/ic/ic_star.svg')}}" width="35">
            @endfor
            <img src="{{asset('images/ic/ic_star_border.svg')}}" width="35">
            <h4 class="mb-0 ml-3">4.5/5</h4>
        </div>
        @if(Auth::check())
            <x-like.like :likeRef=$courseDetail :likeModule=\App\Models\Course::class></x-like.like>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-8">
            <iframe
                id="videoView"
                src={{$defaultSource}}
                    width="840"
                height="420"
                frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen
                title="Default name"></iframe>
        </div>
        <div class="col-lg-4">
            <div class="box-list-video text-primary">
                <ol>
                    @foreach($list_lecture as $item)
                        <li role="button" v-on:click="clickLecture" data-id="{{$item->video_resource}}">
                            {{$item->lectures_name}}
                        </li>
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
            clickLecture: function () {
                this.videoLink = "https://player.vimeo.com/video/" + event.target.getAttribute('data-id') + "?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=217713"
                document.getElementById('videoView').src = this.videoLink
            }
        }
    });
</script>
