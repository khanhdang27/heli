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
]
?>
<div class="container-fluid show-video">
    <div class="mb-3 title-course">
        <p class="m-0">IELTS 英文課程</p>
        <p class="m-0">第一部分講解（共12堂)</p>
    </div>
    <p class="m-0 teacher-name">Ms. Polly Leung</p>
    <div class="row justify-content-between rating-bar">
        <div class="col-sm-8 d-flex flex-column justify-content-end text-primary rating-point">
            O O O O O 4.5/5
        </div>
        <div class="col-sm-4"><img class="ic-heart" src="{{ asset("images/ic/ic_heart.svg")}}"></div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="course-video">
                <video width="846" src="#" controls></video>
            </div>

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
