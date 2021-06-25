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
<div class="container-fluid show-video text-primary">
    <h1 class="font-weight-bold mb-3">{{$courseDetail->course_description}}</h1>
    <h3>{{$courseDetail->tutor->full_name}}</h3>
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
        <div class="col-lg-8">
            <x-product-detail.lecture-course></x-product-detail.lecture-course>
        </div>
        <div class="col-lg-4">
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
