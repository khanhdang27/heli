@php
    use App\Models\Course;
    $course = $courseDetail->membershipCourses->course;
@endphp
@error('room_id')
<div class="alert text-center alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Must select a class in Course frequency !</strong>
</div>
@enderror

<div class="bg-white border border-primary p-5 text-primary buy-course-box mb-5">
    <div class="mb-3 title-course">
        <p class="h2 m-0 font-weight-bold">
            {{ $course->course_name }}
        </p>
    </div>
    @if ($course->type != Course::DOCUMENT)
        <p class="my-5 h4">{{ $course->tutor->full_name }}</p>
    @endif
    <h2 class="my-5 font-weight-bold">HKD: {{ $courseDetail->getPriceDiscount() }}$ </h2>
    @if (Auth::check())
        @if (Auth::user()->hasRole('student'))
            @if(Auth::user()->student->level)
                @if ($course->type == Course::LIVE)
                    <div id="buy_live">
                        <form id="form-room" class="form-inline" method="get"
                              action="{{ route('site.user.payment', ['product_id' => $courseDetail->id]) }}">
                            @csrf
                            <input name="product_id" value="{{ $courseDetail->id }}" form="form-room" required hidden>
                            <div class="btn-above-video w-100">
                                <button type="submit"
                                        class="btn btn-register-now w-100 border-primary h4 m-0 py-1 px-2">
                                    @lang('keywords.coursePage.buyNow')
                                </button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="btn-above-video">
                        <a href="{{ route('site.user.payment', ['product_id' => $courseDetail->id]) }}">
                            <div class="btn btn-register-now w-100 border-primary h4 m-0 py-1 px-2">
                                @lang('keywords.coursePage.buyNow')
                            </div>
                        </a>
                    </div>
                @endif
            @else
                <div class="btn-above-video">
                    <button class="btn btn-register-now w-100 border-primary h4 m-0 py-1 px-2" data-toggle="modal"
                            data-target="#staticBackdrop">
                        @lang('keywords.coursePage.buyNow')
                    </button>
                </div>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="staticBackdropLabel">First assessment</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4>You need to complete the assessment before starting the course !</h4>
                                <assessment-component :type-exam="1"
                                                :course-id="21"
                                                :exam-id="10"></assessment-component>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @else
        <div class="btn-above-video">
            <button class="btn btn-register-now w-100 border-primary h4 m-0 py-1 px-2" data-toggle="modal"
                    data-target="#registerModal">
                @lang('keywords.coursePage.registerNow')
            </button>
        </div>
    @endif
    <div class="d-flex align-items-center share-bar">
        <span class="mr-2"><img width="36" src="{{ asset('images/ic/ic_share.svg') }}"></span>
        <a data-toggle="collapse" href="#collapseShare" role="button" aria-expanded="false"
           aria-controls="collapseShare">
            <h5 class="pt-1 mb-0">@lang('keywords.coursePage.shareCourse')</h5>
        </a>
    </div>
    <div class="collapse" id="collapseShare">
        <div class="sharethis-inline-share-buttons"></div>
    </div>
</div>
