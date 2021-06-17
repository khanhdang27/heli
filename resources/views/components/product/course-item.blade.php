
<div class="pr-3">
    <div class="product-box">
        <div class="top-product">
            <div class="title-product bg-secondary">
                <h4>{{ $course->subject->subject_name }}</h4>
            </div>
            <div class="content-product d-flex" style="background-color: {{$course->subject->subject_color_background}} !important;">
                <div class="color-bar">
                </div>
                <div class="body-product-content d-flex flex-column justify-content-between align-items-center"
                        style="color: {{$course->subject->subject_color_text}} !important;">
                    <div class="content-top text-wrap w-75">
                        {{ $course->certificate->certificate_code }}<br>
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
        <div class="bottom-product2 bg-white p-4">
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
                    <img src={{asset("images/ic/ic_heart.svg")}}>
                </div>
            </div>
            <div class="d-flex">
                <a class="product-hover ml-auto" href="{{URL::route('site.course.show',$course->id)}}">
                    <h4>
                        HK${{$course->course_price}}/ @lang('keywords.course-item.section') >
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>
