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
                <div class="sort-lg d-none d-md-block">
                    <div class="d-flex">
                        <span class="mr-4">@lang('keywords.sort')</span>
                        <input class="btn-sort" type="radio" name="optradio" checked>
                        <label class="mr-5">@lang('keywords.upToDate')</label>

                        <input class="btn-sort" type="radio" name="optradio">
                        <label class="mr-5">@lang('keywords.price')</label>

                        <input class="btn-sort" type="radio" name="optradio">
                        <label class="mr-5">@lang('keywords.liveCourses')</label>

                        <input class="btn-sort" type="radio" name="optradio">
                        <label class="mr-5">@lang('keywords.recordALesson')</label>

                        <input class="btn-sort" type="radio" name="optradio">
                        <label class="mr-5 ">@lang('keywords.learningMaterial')</label>
                    </div>
                </div>
                <div class="btn-group dropleft sort-sm text-right d-block d-md-none">
                    <button class="btn btn-outline-primary dropdown-toggle h5" id="navbardrop" data-toggle="dropdown">
                        Sort
                    </button>
                    <div class="dropdown-menu">
                        <label class="dropdown-item d-flex h5 mb-3">
                            <input class="btn-sort" type="radio" name="optradio" checked> @lang('keywords.upToDate')
                        </label>
                        <label class="dropdown-item d-flex h5 mb-3">
                            <input class="btn-sort" type="radio" name="optradio"> @lang('keywords.price')
                        </label>
                        <label class="dropdown-item d-flex h5 mb-3">
                            <input class="btn-sort" type="radio" name="optradio">@lang('keywords.liveCourses')
                        </label>
                        <label class="dropdown-item d-flex h5 mb-3">
                            <input class="btn-sort" type="radio" name="optradio">@lang('keywords.recordALesson')
                        </label>
                        <label class="dropdown-item d-flex h5">
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

@push('scripts')
<script type="application/javascript">
    var rad = document.sort_course.sortable;
    var prev = null;
    for (var i = 0; i < rad.length; i++) {
        rad[i].addEventListener('change', function() {
            if (this !== prev) {
                prev = this;
            }
            window.location.href = "{{ route('site.course.search') }}"+"?sort="+this.value
        });
    }
</script>
@endpush
@endsection