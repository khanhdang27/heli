@extends('layout.app')

@section('title','Subject Page')

@section('content')
<div class="body-content bg-course">
    <div class="container-fluid top-news-page border-bottom m-0 border-white text-center">
        @lang('keywords.navBar.subjectClassification')
    </div>
    <x-sub-header :subjects=$subjects></x-sub-header>
    <div class="container-fluid container-course pt-5 mt-5">
        <div class="h2 font-weight-bold text-primary text-center pb-4 mb-0 mt-5 mt-md-0">
            {{$certificate->certificate_code}}
        </div>
        <div class="text-primary my-4 d-flex h5">
            <form name="sort_course" class="w-100">
                <div class="sort-lg d-none d-md-block">
                    <div class="d-flex">
                        <span class="mr-4">@lang('keywords.sort')</span>
                        <input class="btn-sort" type="radio" value="latest" name="sortable"
                            {{ app('request')->input('sort') == 'latest' ? 'checked' : null }}>
                        <label class="mr-5">@lang('keywords.upToDate')</label>

                        <input class="btn-sort" type="radio" value="price" name="sortable"
                            {{ app('request')->input('sort') == 'price' ? 'checked' : null }}>
                        <label class="mr-5">@lang('keywords.price')</label>

                        <input class="btn-sort" type="radio" value="live" name="sortable"
                            {{ app('request')->input('sort') == 'live' ? 'checked' : null }}>
                        <label class="mr-5">@lang('keywords.liveCourses')</label>

                        <input class="btn-sort" type="radio" value="record" name="sortable"
                            {{ app('request')->input('sort') == 'record' ? 'checked' : null }}>
                        <label class="mr-5">@lang('keywords.recordALesson')</label>

                        <input class="btn-sort" type="radio" value="document" name="sortable"
                            {{ app('request')->input('sort') == 'document' ? 'checked' : null }}>
                        <label class="mr-5 ">@lang('keywords.learningMaterial')</label>
                    </div>
                </div>
            </form>
            <form name="m_sort_course" class="w-100  d-block d-md-none">
                <div class="btn-group dropleft sort-sm text-right">
                    <button class="btn btn-outline-primary dropdown-toggle h5" id="navbardrop" data-toggle="dropdown">
                        Sort
                    </button>
                    <div class="dropdown-menu">
                        <label class="dropdown-item d-flex h5 mb-3">
                            <input class="btn-sort" type="radio" value="latest" name="m_sortable"
                                {{ app('request')->input('sort') == 'latest' ? 'checked' : null }}>
                            @lang('keywords.upToDate')
                        </label>
                        <label class="dropdown-item d-flex h5 mb-3">
                            <input class="btn-sort" type="radio" value="price" name="m_sortable"
                                {{ app('request')->input('sort') == 'price' ? 'checked' : null }}>
                            @lang('keywords.price')
                        </label>
                        <label class="dropdown-item d-flex h5 mb-3">
                            <input class="btn-sort" type="radio" value="live" name="m_sortable"
                                {{ app('request')->input('sort') == 'live' ? 'checked' : null }}>@lang('keywords.liveCourses')
                        </label>
                        <label class="dropdown-item d-flex h5 mb-3">
                            <input class="btn-sort" type="radio" value="record" name="m_sortable"
                                {{ app('request')->input('sort') == 'record' ? 'checked' : null }}>@lang('keywords.recordALesson')
                        </label>
                        <label class="dropdown-item d-flex h5">
                            <input class="btn-sort" type="radio" value="document" name="m_sortable"
                                {{ app('request')->input('sort') == 'document' ? 'checked' : null }}>@lang('keywords.learningMaterial')
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <div class="d-flex">
            <div class="ml-auto">
                {{ $courses->withQueryString()->links() }}
            </div>
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
            rad[i].addEventListener('change', function () {
                // (prev) ? console.log(prev.value): null;
                if (this !== prev) {
                    prev = this;
                }
                console.log(this.value)
                window.location.href = "{{ route('site.certificate.show',$certificate->id) }}" + "?sort=" + this.value
            });
        }
</script>
@endsection