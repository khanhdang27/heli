@foreach($course as $value)
    <div class="pr-3">
        <a class="product-hover" href="{{URL::route('site.course-detail',$value->id)}}">
            <div class="product-box2">
                <div class="top-product">
                    <div class="title-bar">
                        <div class="title-product bg-secondary">
                            <span>{{ $value->subject->subject_name }}</span>
                        </div>
                    </div>
                    <div class="content-product">
                        <div class="color-bar">
                        </div>
                        <div
                            class="body-product-content text-white d-flex flex-column justify-content-between align-items-center">
                            <div class="content-top text-wrap w-75">
                                Haha
                            </div>
                            <div class="content-bot">
                                {{$value->course_description}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-product2 bg-white p-4">
                    <div class="card-name-product d-flex justify-content-between">
                        <div class="name-product w-70 d-flex flex-column justify-content-between">
                            <div class="w-100">
                                {{$value->course_name}}
                            </div>
                            <div class="teacher pt-3">
                                {{$value->tutor->full_name}}
                            </div>
                        </div>
                        <div class="ic-heart w-25 text-right">
                            <img src={{asset("images/ic/ic_heart.svg")}}>
                        </div>
                    </div>

                    <div class="price-bar2 d-flex justify-content-end">
                        <div>HK{{$value->course_price}}/@lang('keywords.section')</div>
                        <div> ></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach
