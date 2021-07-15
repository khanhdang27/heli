
<div class="container-fluid show-video">
    <div class="row">
        <div id="detail" class="col-lg-8">
            <div class="product-box mt-0 row bg-white">
                <div class="top-product col-lg-6">
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
                            <div class="content-bot" title="{{$course->course_name}}">
                                {{$course->course_name}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between h-100">
                        <div class="name-product w-75 d-flex flex-column justify-content-between text-primary p-3">
                            <div class="text-multiline-truncate">
                                <h2>
                                    {{rtrim(mb_substr($course->course_description,0,100))}}
                                </h2>
                            </div>
                            <div class="h4 mt-auto">
                                {{$course->tutor->full_name}}
                            </div>
                            <div class="d-flex justify-content-between mb-5">
                                <div class="d-flex align-items-center text-primary">
                                    @for ($i = 0; $i < 4; $i++)
                                        <img src="{{asset('images/ic/ic_star.svg')}}" width="35">
                                    @endfor
                                    <img src="{{asset('images/ic/ic_star_border.svg')}}" width="35">
                                    <h4 class="mb-0 ml-3">4.5/5</h4>
                                </div>
                                <div class="ml-auto">
                                    @if(Auth::check())
                                        <x-like.like :likeRef=$course :likeModule=\App\Models\Course::class></x-like.like>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="detail" class="col-lg-4"></div>
    </div>
</div>
