<?php
$guestPhoto = 'images/ava2.jpg';
$guestName = 'Kenny Or';
$content = 'Nice!';
$courseName = 'IELTS 英文課程 第一部分講解';
$date = '10/03/2021'
?>
<div>
    @if(\Illuminate\Support\Facades\Auth::check())
        <x-comment.comment :refComment=$courseDetail :commentModule=\App\Models\UserComment::$COURSE></x-comment.comment>
    @endif
    <div class="pt-3 reviews">
        <div class="row review-bar">
            <div class="col-xl-3 avatar-review">
                <img width="147" src="{{ asset($guestPhoto)}}">
            </div>
            <div class="col-xl-9 d-flex justify-content-between">
                <div class="d-flex flex-column justify-content-between">
                    <div class="name-guest text-primary">{{$guestName}}</div>
                    <div class="content-review text-primary">{{$content}}</div>
                    <div class="name-course text-primary">{{$courseName}}</div>
                </div>
                <div class="rating">
                    <div class="d-flex align-items-center">
                        @for ($i = 0; $i < 4; $i++)
                            <img src="{{asset('images/ic/ic_star.svg')}}" width="24">
                        @endfor
                        <img src="{{asset('images/ic/ic_star_border.svg')}}" width="24">
                        <p class="point mb-0 text-primary ml-3">4.5/5</p>
                    </div>
                    <div class="text-primary">{{$date}}</div>
                </div>
            </div>

        </div>
    </div>
</div>
