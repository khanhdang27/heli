@php
use App\Utilities\SelectionByClass;
@endphp

@extends('layout.app')

@section('title', 'Subject Page')

@section('content')

<div class="body-content bg-course">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.searchResult')
    </div>
    {{-- <x-sub-header :subjects=$subjects></x-sub-header> --}}

    <div class="container-fluid container-course mt-5">
        <div class="text-primary mb-4 d-flex h5">
            <form class="w-100">
                <div class="sort-lg">
                    <span class="mr-4">@lang('keywords.sort')</span>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio" checked> @lang('keywords.upToDate')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio"> @lang('keywords.price')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.liveCourses')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.recordALesson')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.learningMaterial')
                    </label>
                </div>
                <div class="btn-group dropleft sort-sm text-right" style="display: none">
                    <button class="btn btn-outline-primary dropdown-toggle h5" id="navbardrop" data-toggle="dropdown">
                        Sort
                    </button>
                    <div class="dropdown-menu">
                        <label class="radio-inline mr-5 dropdown-item">
                            <input class="btn-sort" type="radio" name="optradio" checked> @lang('keywords.upToDate')
                        </label>
                        <label class="radio-inline mr-5 dropdown-item">
                            <input class="btn-sort" type="radio" name="optradio"> @lang('keywords.price')
                        </label>
                        <label class="radio-inline mr-5 dropdown-item">
                            <input class="btn-sort" type="radio" name="optradio">@lang('keywords.liveCourses')
                        </label>
                        <label class="radio-inline mr-5 dropdown-item">
                            <input class="btn-sort" type="radio" name="optradio">@lang('keywords.recordALesson')
                        </label>
                        <label class="radio-inline mr-5 dropdown-item">
                            <input class="btn-sort" type="radio" name="optradio">@lang('keywords.learningMaterial')
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
        <div>
            <x-product.course-list :courses=$courses typeOfUI="certificate_filter"></x-product.course-list>
        </div>
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
            window.location.href = "{{ route('site.course.search') }}"+"?sort="+this.value
        });
    }
</script>
@endsection
