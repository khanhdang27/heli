@php
use App\Models\Course;
use App\Models\StudentCourses;
use App\Models\CourseMembershipDiscount;

switch ($typeOfUI) {
            case 'normal':
            case 'recommended':
            case 'certificate_filter':
                $class = 'col-lg-3 col-md-6';
                break;
            case 'hot':
                $class = 'px-3';
                break;
            case 'welcome':
            case 'lasted':
                $class = 'col-md-6';
                break;
            default:
                $class = '';
                break;
        }
    $IdRandom = Str::random(10);
@endphp

@if ($course instanceof CourseMembershipDiscount)
    @php
        $course_card = $course->membershipCourses->course;
        if (Auth::check()) {
            $user_liked = $course_card->likeable
                ->filter(function ($item) {
                    return $item->user_id == Auth::user()->id;
                })
                ->first();
            $liked = empty($user_liked) ? 0 : $user_liked->like_style;
        }
    @endphp
    <div class="{{ $class }} product-category-padding">
        <div class="product-box animate-up rounded-top-course border"
            id="{{ $screen }}_{{ $IdRandom }}">
            <div class="top-product">
                <div class="content-product rounded-top-course"
                    style="background-color: {{ $course_card->subject->subject_color_background }}">
                    <div class="body-product-content d-flex flex-column justify-content-between align-items-center col-10 mx-auto"
                        style="color: {{ $course_card->subject->subject_color_text }}">
                        <div class="content-top text-wrap w-100">
                            {{ $course_card->subject->certificate->certificate_code }}<br>
                            @if ($course_card->type == \Constants::COURSE_LIVE)
                                @lang('keywords.course-item.liveCourse')
                            @elseif($course_card->type== \Constants::COURSE_RECORD)
                                @lang('keywords.course-item.courseRecord')
                            @else
                                Document
                            @endif
                        </div>
                        <div class="box-content-bot p-4 w-100">
                            <div class="content-bot" title="{{ $course_card->course_name }}">
                                {{ $course_card->course_name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-product2 d-flex flex-column justify-content-between bg-white pt-2">
                @if ($typeOfUI != 'welcome' && $typeOfUI != 'lasted')
                    <div class="card-name-product d-flex justify-content-between p-4">
                        <div class="name-product w-75 text-primary">
                            <div class="text-multiline-truncate">
                                {{ rtrim(mb_substr($course_card->course_description, 0, 100)) }}
                            </div>
                            <div class="pt-3 align-bottom">
                                @if ($course_card->type != \Constants::COURSE_DOCUMENT)
                                    {{ $course_card->tutor->full_name }}
                                @endif
                            </div>
                        </div>
                        <div class="ic-heart text-right h-50"
                            id="heart_{{ $IdRandom }}">
                            @if (Auth::check())
                                <like-component v-bind:user-id="{{ Auth::user()->id }}"
                                    v-bind:like-ref-id="{{ $course_card->id }}"
                                    v-bind:like-module="'App\\Models\\Course'" v-bind:like-no="0"
                                    v-bind:is-liked="{{ $liked }}">
                                </like-component>
                            @endif
                        </div>
                    </div>
                @endif
                <div class="d-flex justify-content-between">
                    <div class="title-product bg-primary text-white mt-auto">
                        <a class="btn text-white h6 mb-0 text-nowrap text-truncate px-2 product-hover">
                            {{ $course_card->subject->subject_name }}</a>
                    </div>
                    <a class="product-hover my-auto w-75 text-right">
                        @if ($typeOfUI != 'welcome' && $typeOfUI != 'lasted' && $typeOfUI != 'recommended')
                            @if ($course->getDiscount() > 0)
                                <h4 class="font-weight-bold text-danger">
                                    {{ $course->getPriceDiscount() }} token﹥
                                </h4>
                            @else
                                <h4 class="font-weight-bold">
                                    {{ $course->getPrice() }} token﹥
                                </h4>
                            @endif
                        @else
                            @if ($course->getDiscount() > 0)
                                <h4 class="font-weight-bold text-danger">
                                    {{ $course->getPriceDiscount() }} token﹥
                                </h4>
                            @else
                                <h4 class="font-weight-bold">
                                    {{ $course->getPrice() }} token﹥
                                </h4>
                            @endif
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
@else
    @php
        $course_card = $course->course->first()->membershipCourses->course;
        if (Auth::check()) {
            $user_liked = $course_card->likeable
                ->filter(function ($item) {
                    return $item->user_id == Auth::user()->id;
                })
                ->first();
            $liked = empty($user_liked) ? 0 : $user_liked->like_style;
        }
    @endphp
    <div class="{{ $class }} product-category-padding">
        <div class="position-relative product-box animate-up rounded-top-course border {{ !empty($course->failed) ? 'bg-fail': '' }}"
             id="{{$screen}}_{{$IdRandom}}">
            @if(!empty($course->failed))
            <img class="position-absolute w-100" src="{{asset('images/ic/ic_fail.png')}}">
            @endif
            <div class="top-product">
                <div class="content-product rounded-top-course"
                     style="background-color: {{ $course_card->subject->subject_color_background }}">
                    <div class="body-product-content d-flex flex-column justify-content-between align-items-center col-10 mx-auto"
                         style="color: {{ $course_card->subject->subject_color_text }}">
                        <div class="content-top text-wrap w-100">
                            {{ $course_card->subject->certificate->certificate_code }}<br>
                            @if ($course_card->type == \Constants::COURSE_LIVE)
                                @lang('keywords.course-item.liveCourse')
                            @elseif($course_card->type== \Constants::COURSE_RECORD)
                                @lang('keywords.course-item.courseRecord')
                            @else
                                Document
                            @endif
                        </div>
                        <div class="box-content-bot p-4 w-100">
                            <div class="content-bot" title="{{ $course_card->course_name }}">
                                {{ $course_card->course_name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-product2 d-flex flex-column justify-content-between bg-white pt-2">
                @if ($typeOfUI != 'welcome' && $typeOfUI != 'lasted')
                    <div class="card-name-product d-flex justify-content-between p-4">
                        <div class="name-product w-75 text-primary">
                            <div class="text-multiline-truncate">
                                {{ rtrim(mb_substr($course_card->course_description, 0, 100)) }}
                            </div>
                            <div class="pt-3 align-bottom">
                                @if ($course_card->type != \Constants::COURSE_DOCUMENT)
                                    {{ $course_card->tutor->full_name }}
                                @endif
                            </div>
                        </div>
                        <div class="ic-heart text-right h-50"
                             id="heart_{{$IdRandom}}">
                            @if (Auth::check())
                                <like-component v-bind:user-id="{{ Auth::user()->id }}"
                                                v-bind:like-ref-id="{{ $course_card->id }}"
                                                v-bind:like-module="'App\\Models\\Course'" v-bind:like-no="0"
                                                v-bind:is-liked="{{ $liked }}">
                                </like-component>
                            @endif
                        </div>
                    </div>
                @endif
                <div class="d-flex justify-content-between">
                    <div class="title-product bg-primary text-white mt-auto">
                        <a class="btn text-white h6 mb-0 text-nowrap text-truncate px-2 product-hover">
                            {{ $course_card->subject->subject_name }}</a>
                    </div>
                    <a class="product-hover my-auto w-75 text-right">
                        @if ($typeOfUI != 'welcome' && $typeOfUI != 'lasted' && $typeOfUI != 'recommended')
                            @if ($course->course->first()->getDiscount() > 0)
                                <h4 class="font-weight-bold text-danger">
                                    {{ $course->course->first()->getPriceDiscount() }} token﹥
                                </h4>
                            @else
                                <h4 class="font-weight-bold">
                                    {{ $course->course->first()->getPrice() }} token﹥
                                </h4>
                            @endif
                        @else
                            @if ($course->course->first()->getDiscount() > 0)
                                <h4 class="font-weight-bold text-danger">
                                    {{ $course->course->first()->getPriceDiscount() }} token﹥
                                </h4>
                            @else
                                <h4 class="font-weight-bold">
                                    {{ $course->course->first()->getPrice() }} token﹥
                                </h4>
                            @endif
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif
@push('scripts')
    <script type="application/javascript">
        var clickedHeart = false;

        var element{{ $screen }}_{{$IdRandom}} = document.getElementById(
            '{{ $screen }}_{{ $IdRandom }}');

        if ("{{ $typeOfUI }}" != 'welcome' && "{{ $typeOfUI }}" != 'lasted') {
            var heart_{{ $IdRandom }} = document.getElementById(
                'heart_{{ $IdRandom }}');
            heart_{{ $IdRandom }}.onclick = function() {
                clickedHeart = true;
            };
        }

        element{{ $screen }}_{{$IdRandom}}.onclick = function() {
            if (!clickedHeart) {
                    window.location.href = "{{route('site.course.show', ['course' => $course_card->id])}}"
            } else {
                clickedHeart = false;
            }
        };
    </script>
@endpush
