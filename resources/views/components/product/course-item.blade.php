@php
use App\Models\Course;

$course_card = $course->membershipCourses->course;
switch ($typeOfUI){
    case 'normal':
    case 'recommended':
    case 'certificate_filter':
    case 'hot':
        $class = 'col-lg-3 col-md-6';
        break;
    case 'welcome' :
    case 'lasted' :
        $class = 'col-md-6';
        break;
    default:
        $class = '';
        break;
}
@endphp

@if (!empty($course_card))
<div class="{{ $class }} product-category-padding animate-up">
    <div class="product-box">
        <div class="top-product">
            <div class="content-product row rounded-top-course"
                 style="background-color: {{$course_card->subject->subject_color_background}}">
                <div class="body-product-content d-flex flex-column justify-content-between align-items-center col-10"
                     style="color: {{$course_card->subject->subject_color_text}}">
                    <div class="content-top text-wrap w-100">
                        {{ $course_card->subject->certificate->certificate_code }}<br>
                        @if($course_card->type== Course::LIVE)
                            @lang('keywords.course-item.liveCourse')
                        @elseif($course_card->type== Course::RECORD)
                            @lang('keywords.course-item.courseRecord')
                        @else
                            Document
                        @endif
                    </div>
                    <div class="content-bot" title="{{$course_card->course_name}}">
                        {{$course_card->course_name}}
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-product2 bg-white pt-3">
            @if ($typeOfUI != 'welcome')    
                <div class="card-name-product d-flex justify-content-between p-4">
                    <div class="name-product w-75 text-primary">
                        <div class="text-multiline-truncate">
                            <p>
                                {{rtrim(mb_substr($course_card->course_description,0,100))}}
                            </p>
                        </div>
                        <div class="pt-3 align-bottom">
                            @if($course_card->type != Course::DOCUMENT)
                                {{$course_card->tutor->full_name}}
                            @endif
                        </div>
                    </div>
                    <div class="ic-heart w-25 text-right">
                        @if (Auth::check())
                            <x-like.like :likeRef=$course_card :likeModule=\App\Models\Course::class></x-like.like>
                        @endif
                    </div>
                </div>
            @endif
            <div class="d-flex">
                <div class="title-product bg-primary text-white my-auto">
                    <h6>{{ $course_card->subject->subject_name }}</h6>
                </div>
                <a class="product-hover my-auto ml-auto" href="{{URL::route('site.course.show',$course_card->id)}}">
                    @if($course->getDiscount() > 0)
                        <h4 class="font-weight-bold text-danger">
                            HK$ {{$course->getPrice()}} / @lang('keywords.course-item.section')<strong> ﹥ </strong>
                        </h4>
                    @else
                        <h4 class="font-weight-bold">
                            HK$ {{$course->getPriceDiscount()}} / @lang('keywords.course-item.section')<strong> ﹥ </strong>
                        </h4>
                    @endif
                </a>
            </div>
        </div>
    </div>
</div>

@endif