@extends('layout.app')

@section('title','Subject Page')

@section('content')
    <div class="body-content bg-course">
        <div class="container-fluid top-news-page border-bottom m-0 border-white text-center">
            @lang('keywords.navBar.subjectClassification')
        </div>
        <x-sub-header :subjects=$subjects ></x-sub-header>
        <div class="container-fluid container-course">
            <div class="title-subject h2 font-weight-bold text-primary text-center">
                {{$certificate->certificate_code}}
            </div>
            <div class="text-primary my-4 d-flex h5">
                <form name="sort_course" class="w-100">
                    <div class="sort-lg">
                        <span class="mr-4">@lang('keywords.sort')</span>
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
                    </div>
                    <div class="btn-group dropleft sort-sm text-right" style="display: none">
                        <button class="btn btn-outline-primary dropdown-toggle h5" id="navbardrop" data-toggle="dropdown">
                            Sort
                        </button>
                        <div class="dropdown-menu">
                            <label class="radio-inline mr-5 dropdown-item">
                                <input class="btn-sort" type="radio" value="latest" name="sortable" {{ app('request')->input('sort') == 'latest' ? 'checked' : null }}> @lang('keywords.upToDate')
                            </label>
                            <label class="radio-inline mr-5 dropdown-item">
                                <input class="btn-sort" type="radio" value="price" name="sortable" {{ app('request')->input('sort') == 'price' ? 'checked' : null }}> @lang('keywords.price')
                            </label>
                            <label class="radio-inline mr-5 dropdown-item">
                                <input class="btn-sort" type="radio" value="live" name="sortable" {{ app('request')->input('sort') == 'live' ? 'checked' : null }}>@lang('keywords.liveCourses')
                            </label>
                            <label class="radio-inline mr-5 dropdown-item">
                                <input class="btn-sort" type="radio" value="record" name="sortable" {{ app('request')->input('sort') == 'record' ? 'checked' : null }}>@lang('keywords.recordALesson')
                            </label>
                            <label style="color: red" class="radio-inline mr-5 dropdown-item">
                                <input class="btn-sort" type="radio" value="document" name="sortable" {{ app('request')->input('sort') == 'document' ? 'checked' : null }}>@lang('keywords.learningMaterial')
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            @foreach( $certificate->subject as $subject)
                @php
                    $course = $courses->where('membershipCourses.course.subject_id',$subject->id)
                @endphp
                <div>
                    <h2 class="text-primary" id="tab-title">
                        {{$subject->subject_name}}
                    </h2>
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
