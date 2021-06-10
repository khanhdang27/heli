@foreach($course as $value)
    <div class="pr-3">
        <div class="product-box2">
            <div class="top-product">
                <div class="title-bar">
                    <div class="title-product bg-secondary">
                        <span>{{ $value->subject->subject_name }}</span>
                    </div>
                </div>
                <div class="content-product" style="background-color: {{$value->subject->subject_color_background}} !important;">
                    <div class="color-bar">
                    </div>
                    <div class="body-product-content d-flex flex-column justify-content-between align-items-center"
                         style="color: {{$value->subject->subject_color_text}} !important;">
                        <div class="content-top text-wrap w-75">
                            {{ $value->certificate->certificate_code }}<br>
                            @if($value->type==1)
                                @lang('keywords.course-item.courseRecord')
                            @else
                                @lang('keywords.course-item.liveCourse')
                            @endif
                        </div>
                        <div class="content-bot">
                            {{$value->course_name}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-product2 bg-white p-4">
                <div class="card-name-product d-flex justify-content-between">
                    <div class="name-product w-70 d-flex flex-column justify-content-between text-primary">
                        <div class="w-100">
                            {{$value->course_description}}
                        </div>
                        <div class="teacher pt-3">
                            {{$value->tutor->full_name}}
                        </div>
                    </div>
                    <div class="ic-heart w-25 text-right">
                        <img src={{asset("images/ic/ic_heart.svg")}}>
                    </div>
                </div>

                <div class="price-bar2 d-flex justify-content-end align-items-center">
                    <a class="product-hover" href="{{URL::route('site.course-detail',$value->id)}}">
                        HK${{$value->course_price}}/ @lang('keywords.course-item.section')

                    <img src="{{asset("images/ic/ic_drop2.svg")}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach
