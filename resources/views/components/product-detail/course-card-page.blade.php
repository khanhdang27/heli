<div class="container-fluid show-video my-5">
    <div class="row">
        <div id="detail" class="col-xl-8">
            <div class="product-box mt-0 row mx-0 bg-white course-card-page">
                <div class="top-product col-md-5">
                    <div class="content-product py-5 rounded-top-course"
                        style="background-color: {{ $course->subject->subject_color_background }}">
                        <div class="body-product-content d-flex flex-column justify-content-between align-items-center col-10 mx-auto"
                            style="color: {{ $course->subject->subject_color_text }}">
                            <div class="content-top text-wrap w-100">
                                {{ $course->subject->certificate->certificate_code }}<br>
                                @if ($course->type == 1)
                                    @lang('keywords.course-item.liveCourse')
                                @else
                                    @lang('keywords.course-item.courseRecord')
                                @endif
                            </div>
                            <div class="box-content-bot py-4 px-5 w-100">
                                <div class="content-bot" title="{{ $course->course_name }}">
                                    {{ $course->course_name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="">
                        <div class=" name-product d-flex flex-column
                        justify-content-between text-primary py-4">
                        <div class="d-flex flex-md-nowrap flex-sm-wrap">
                            <div class="text-limit-3 pr-4">
                                <a class="h3 font-weight-bold"
                                    href="{{ empty($studentCourse) ? '#' : route('site.live_show', $studentCourse->room_live_course_id) }}">
                                    {{ rtrim(mb_substr($course->course_description, 0, 100)) }}
                                    If you use this site regularly and would like to help keep the site on the
                                    Internet, please consider donating a small sum to help pay for the hosting and
                                    bandwidth bill.
                                </a>
                            </div>
                            <div class="mt-auto">
                                @if (Auth::check())
                                    {{-- <x-like.like :likeRef=$course :likeModule=\App\Models\Course::class></x-like.like> --}}
                                    <like-component v-bind:user-id="{{ Auth::user()->id }}"
                                        v-bind:like-ref-id="{{ $course->id }}"
                                        v-bind:like-module="'App\\Models\\Course'" v-bind:like-no="0"
                                        v-bind:is-liked="{{ 0 }}">
                                    </like-component>
                                @endif
                            </div>
                        </div>
                        <div class="h5 mt-5">
                            {{ $course->tutor->full_name }}
                        </div>
                        <div class="d-flex align-items-center text-primary">
                            @php
                                $rate = (int) floor($course->rating_average);
                            @endphp
                            @for ($i = 0; $i < $rate; $i++) <img
                                    src="{{ asset('images/ic/ic_star.svg') }}" width="29">
                            @endfor
                            @for ($i = 0; $i < 5 - $rate; $i++) <img
                                    src="{{ asset('images/ic/ic_star_border.svg') }}" width="29">
                            @endfor
                            <h5 class="mb-0 ml-3">{{ $course->rating_average }}/5</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="detail" class="col-xl-4"></div>
</div>
</div>
