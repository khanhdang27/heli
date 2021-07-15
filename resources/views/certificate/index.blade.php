@extends('layout.app')

@section('title','Subject Page')

@section('content')
    <div class="body-content bg-course">
        <div class="container-fluid text-center top-news-page h1">
            @lang('keywords.navBar.subjectClassification')
        </div>
        <x-sub-header :subjects=$subjects ></x-sub-header>
        <div class="container-fluid p-0 container-course">
            <div class="title-subject text-primary text-center">
                {{$certificate->certificate_name}}
            </div>
            <div class="text-primary my-4 d-flex h2">

                <span class="mr-4">@lang('keywords.sort')</span>
                <form name="sort_course" >
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" value="latest" name="sortable" {{ app('request')->input('sort') == 'latest' ? 'checked' : null }}> @lang('keywords.upToDate')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" value="price" name="sortable" {{ app('request')->input('sort') == 'price' ? 'checked' : null }}> @lang('keywords.price')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" value="live" name="sortable" {{ app('request')->input('sort') == 'live' ? 'checked' : null }}>@lang('keywords.liveCourses')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" value="record" name="sortable" {{ app('request')->input('sort') == 'record' ? 'checked' : null }}>@lang('keywords.recordALesson')
                    </label>
                    <label style="color: red" class="radio-inline mr-5 ">
                        <input class="btn-sort" type="radio" value="document" name="sortable" {{ app('request')->input('sort') == 'document' ? 'checked' : null }}>@lang('keywords.learningMaterial')
                    </label>
                </form>
            </div>
            @foreach( $certificate->subject as $subject)
                @php
                    $course = $courses->where('membershipCourses.course.subject_id',$subject->id)
                @endphp
                <div>
                    <h1 class="text-primary" id="tab-title">
                        {{$subject->subject_name}}
                    </h1>
                    <x-product.course-list :courses=$course typeOfUI="certificate_filter"></x-product.course-list>
                </div>
            @endforeach
        </div>
    </div>

<script>

    var rad = document.sort_course.sortable;
    var prev = null;
    for (var i = 0; i < rad.length; i++) {
        rad[i].addEventListener('change', function() {
            // (prev) ? console.log(prev.value): null;
            if (this !== prev) {
                prev = this;
            }
            console.log(this.value)
            window.location.href = "{{ route('site.certificate.show',$certificate->id) }}"+"?sort="+this.value
        });
    }
    </script>
@endsection
