<?php
$list_video = [
    '課程簡介',
    '閱讀理解一：閱讀文章技巧',
    '閱讀理解二：閱讀文章技巧',
    '閱讀理解三：閱讀文章技巧',
    '閱讀理解四：閱讀文章技巧',
    '閱讀理解五：閱讀文章技巧',
    '閱讀理解六：閱讀文章技巧',
    '閱讀理解六：閱讀文章技巧',
    '閱讀理解六：閱讀文章技巧',
    '閱讀理解六：閱讀文章技巧',
    '閱讀理解六：閱讀文章技巧',
    '閱讀理解六：閱讀文章技巧',
    '閱讀理解六：閱讀文章技巧',
]
?>
<div class="container-fluid show-video">
    <div class="mb-3 title-course">
        <p class="m-0">IELTS 英文課程</p>
        <p class="m-0">第一部分講解（共12堂)</p>
    </div>
    <p class="m-0 teacher-name">Ms. Polly Leung</p>
    <div class="row justify-content-between rating-bar">
        <div class="col-sm-8 d-flex flex-column justify-content-end rating-point">O O O O O 4.5/5</div>
        <div class="col-sm-4"><img class="ic-heart" src="{{ asset("images/ic/Group29.png")}}"></div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="course-video">
                <video width="846" src="#" controls></video>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="box-list-video">
                <ol>
                    @foreach($list_video as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
