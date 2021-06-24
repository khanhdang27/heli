<?php
$list_lecture = $courseDetail->lecture

?>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<div class="container-fluid show-video" id="video-lecture">
    <div class="mb-3 ">
        <h1 class="m-0">{{$courseDetail->course_description}}</h1>
    </div>
    <p class="teacher-name text-primary">{{$courseDetail->tutor->full_name}}</p>
    <div class="d-flex top-course-detail justify-content-between mb-5">
        <div class="d-flex align-items-center">
            @for ($i = 0; $i < 4; $i++)
                <img src="{{asset('images/ic/ic_star.svg')}}" width="35">
            @endfor
            <img src="{{asset('images/ic/ic_star_border.svg')}}" width="35">
            <p class="point mb-0 text-primary ml-3">4.5/5</p>
        </div>
        @if(Auth::check())
        <x-like.like :likeRef=$courseDetail :likeModule=\App\Models\Course::class></x-like.like>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-8">
            <x-product-detail.lecture-course :videoId='566506789' ></x-product-detail.lecture-course>
        </div>
        <div class="col-sm-4">
            <div class="box-list-video text-primary">
                <ol>
                    @foreach($list_lecture as $item)
                        <li v-on:click="clickLecture" data-id="{{$item->video_resource}}">{{$item->lectures_name}}</li>
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
            videoId: '',
        },
        methods: {
            clickLecture: function () {
                console.log(event.target.data)
            }
        }
    });
</script>