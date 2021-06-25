@php
    $course_card = $course->membershipCourses->course;

    
switch ($typeOfUI){
    case 'normal':
    case 'recommended':
    case 'certificate_filter':
    case 'hot':
        $class = 'col-lg-3';
        break;
    case 'welcome' :
    case 'lasted' :
        $class = 'col-lg-6';
        break;
    default:
        $class = '';
        break;
}
@endphp

<div class="pr-3 {{ $class }}">
    <div class="product-box">
        
        <div class="top-product">
            <div class="title-product bg-secondary">
                <h4>{{ $course_card->subject->subject_name }}</h4>
            </div>
            <div class="content-product row" style="background-color: {{$course_card->subject->subject_color_background}}">
                <div class="col-3">
                    <div class="color-bar">
                    </div>
                </div>
                <div class="body-product-content d-flex flex-column justify-content-between align-items-center col-9"
                        style="color: {{$course_card->subject->subject_color_text}}">
                    <div class="content-top text-wrap w-75">
                        {{ $course_card->certificate->certificate_code }}<br>
                        @if($course_card->type==1)
                            @lang('keywords.course-item.liveCourse')
                        @else
                            @lang('keywords.course-item.courseRecord')
                        @endif
                    </div>
                    <div class="content-bot">
                        {{$course_card->course_name}}
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-product2 bg-white p-4">
            <div class="card-name-product d-flex justify-content-between">
                <div class="name-product w-75 d-flex flex-column justify-content-between text-primary">
                    <div class="text-multiline-truncate">
                        <p>
                            {{rtrim(mb_substr($course_card->course_description,0,100))}}
                        </p>
                    </div>
                    <div class="pt-3">
                        {{$course_card->tutor->full_name}}
                    </div>
                </div>
                <div class="ic-heart w-25 text-right">
                    @if (Auth::check())
                        <x-like.like :likeRef=$course_card :likeModule=\App\Models\Course::class></x-like.like>
                    @endif
                </div>
            </div>
            <div class="d-flex">
                <a class="product-hover ml-auto" href="{{URL::route('site.course.show',$course_card->id)}}">
                    @if($course->getDiscount() > 0)
                    <h5> <del class="text-gray">HK$ {{$course->getPrice()}} / @lang('keywords.course-item.section')</del> </h5>
                    @endif
                    <h4 class="font-weight-bold">
                        HK$ {{$course->getPriceDiscount()}} / @lang('keywords.course-item.section') >
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>
