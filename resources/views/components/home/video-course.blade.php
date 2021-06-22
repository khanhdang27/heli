<?php
$list_video = [
    '課程簡介',
    '第一部分：閱讀文章技巧一',
    '第一部分：閱讀文章技巧二',
    '第一部分：閱讀文章技巧三',
    '第一部分：閱讀文章技巧四',
    '第一部分：閱讀文章技巧五',
    '第一部分：閱讀文章技巧六',
    '第一部分：閱讀文章技巧七',
    '第一部分：閱讀文章技巧八',
    '第一部分：閱讀文章技巧九',
    '第一部分：閱讀文章技巧十',
    '第一部分：閱讀文章技巧十一',
    '第一部分：閱讀文章技巧十二',
];

?>
<div class="container-fluid show-video">
    <div class="mb-3 title-course">
        <p class="m-0">{{$courseDetail->course_description}}</p>
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
        <x-like.like :likeRef=$courseDetail :likeModule=\App\Models\Course::class></x-like.like>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <x-product-detail.lecture-course></x-product-detail.lecture-course>
        </div>
        <div class="col-sm-4">
            <div class="box-list-video text-primary">
                <ol>
                    @foreach($list_video as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
