@php
use Illuminate\Support\Facades\Auth;

@endphp

<div class="container-fluid py-5">
    <div class="row">
        <div class="bg-white col-lg-8">
            <div class="text-primary d-flex flex-column">
                <div class="d-flex">
                    <div class="h2 mb-0 mr-3">
                        {{ $courseDetail->course_name }}

                    </div>
                    <div class="mt-auto d-flex">
                        @if (Auth::check())
                        <like-component v-bind:user-id="{{ Auth::user()->id }}"
                            v-bind:like-ref-id="{{ $courseDetail->id }}" v-bind:like-module="'App\\Models\\Course'"
                            v-bind:like-no="0" v-bind:is-liked="{{ $courseDetail->likebyUser() }}">
                        </like-component>
                        @if ($studentCourse->passed)
                        <div class="h2 badge badge-success text-justify text-center align-middle">
                            Passed
                        </div>
                        @endif
                        @endif
                    </div>

                </div>
                <div>
                    <p class="h5 mt-2 text-primary">{{ $courseDetail->tutor->full_name }}</p>
                    <div class="d-flex flex-sm-wrap top-course-detail justify-content-between mb-5">
                        <div class="d-flex align-items-center text-primary">
                            <rating-component v-bind:rating="{{ $courseDetail->rating_average }}"
                                v-bind:read-only="true">
                            </rating-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
    <lecture-component v-bind:course-id="{{ $courseDetail->id }}" v-bind:user-id="{{ Auth::user()->id }}"
        v-bind:type-part="{{$courseDetail->type_part}}" v-bind:course-level="{{$courseDetail->level}}">
    </lecture-component>
</div>

{{-- @endif --}}
