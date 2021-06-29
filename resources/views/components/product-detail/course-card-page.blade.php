
<div class="row">
    <div id="detail" class="col-8">
        <div class="product-box row">
            <div class="top-product col-6">
                <div class="content-product row" style="background-color: {{$course->subject->subject_color_background}}">
                    <div class="col-3">
                        <div class="color-bar">
                        </div>
                    </div>
                    <div class="body-product-content d-flex flex-column justify-content-between align-items-center col-9"
                            style="color: {{$course->subject->subject_color_text}}">
                        <div class="content-top text-wrap w-75">
                            {{ $course->subject->certificate->certificate_code }}<br>
                            @if($course->type==1)
                                @lang('keywords.course-item.liveCourse')
                            @else
                                @lang('keywords.course-item.courseRecord')
                            @endif
                        </div>
                        <div class="content-bot">
                            {{$course->course_name}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-product2 bg-white col-6">
                <div class="card-name-product d-flex justify-content-between">
                    <div class="name-product w-75 d-flex flex-column justify-content-between text-primary">
                        <div class="text-multiline-truncate">
                            <p>
                                {{rtrim(mb_substr($course->course_description,0,100))}}
                            </p>
                        </div>
                        <div class="pt-3">
                            {{$course->tutor->full_name}}
                        </div>
                    </div>
                    <div class="ic-heart w-25 text-right">
                        @if (Auth::check())
                            <x-like.like :likeRef=$course :likeModule=\App\Models\Course::class></x-like.like>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="detail" class="col-4"></div>
</div>
