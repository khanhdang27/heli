@extends('layout.app')

@section('title','Calendar Page')

@section('content')
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.footer.mySchedule')
    </div>
    {{-- <x-sub-header :subjects=$subjects></x-sub-header> --}}
    <div class="container-fluid calendar">
        <div class="row">
            <div class="col-xl-7 pr-5">
                <div id='calendar'></div>
            </div>
            <div class="col-xl-5 pl-5">
                <div class="event-calendar">
                    <div class="row">
                        <div class="col-sm-4">
                            <p><img class="mr-2" src="{{asset("images/ic/ic_ellipse1.svg")}}"
                                    width="34">@lang('keywords.HongKongPublicHolidays')</p>
                            <p><img class="mr-2" src="{{asset("images/ic/ic_polygon1.svg")}}"
                                    width="34">@lang('keywords.HongKongPublicHolidays')</p>
                        </div>
                        <div class="col-sm-4">
                            <p><img class="mr-2" src="{{asset("images/ic/ic_ellipse2.svg")}}"
                                    width="34">@lang('keywords.HongKongPublicHolidays')</p>
                            <p><img class="mr-2" src="{{asset("images/ic/ic_polygon2.svg")}}"
                                    width="34">@lang('keywords.HongKongPublicHolidays')</p>
                        </div>
                        <div class="col-sm-4">
                            <p><img class="mr-2" src="{{asset("images/ic/ic_ellipse3.svg")}}"
                                    width="34">@lang('keywords.HongKongPublicHolidays')</p>
                            <p><img class="mr-2" src="{{asset("images/ic/ic_polygon3.svg")}}"
                                    width="34">@lang('keywords.HongKongPublicHolidays')</p>
                        </div>
                    </div>
                </div>
                <div class="event-calendar">
                    <div class="d-flex flex-wrap mb-5">
                        <div class="mr-5 mb-3">
                            <img src="{{asset("images/bookmark.png")}}" width="50">
                        </div>
                        <div class="mr-5 mb-3">
                            <img src="{{asset("images/bookmark.png")}}" width="50">
                        </div>
                        <div>
                            <img src="{{asset("images/bookmark.png")}}" width="50">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @php
        $tkb[0] = array('start'=>'2021-07-14T13:00:00', 'end'=>'2021-07-14T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[1] = array('start'=>'2021-07-16T13:00:00', 'end'=>'2021-07-16T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[2] = array('start'=>'2021-07-18T13:00:00', 'end'=>'2021-07-18T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[3] = array('start'=>'2021-07-20T13:00:00', 'end'=>'2021-07-20T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[4] = array('start'=>'2021-07-22T13:00:00', 'end'=>'2021-07-22T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[5] = array('start'=>'2021-07-24T13:00:00', 'end'=>'2021-07-24T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
    @endphp
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: null,
                    center: 'prev title next',
                    right: null
                },
                googleCalendarApiKey: '{{env('GOOGLE_API_CALENDAR')}}',
                initialDate: '{{date("Y-m-d")}}',
                businessHours: true, // display business hours
                selectable: true,
                fixedWeekCount: false,
                displayEventEnd: true,
                eventSources: [{
                    googleCalendarId: 'en.hong_kong.official#holiday@group.v.calendar.google.com',
                },
                    [
                        @php
                            foreach ($schedule as $item){
                                $start_date = $item->studySession == null ? $item->date.'T00:00:00':str_replace(' ','T',$item->studySession->session_start);
                                $end_date = $item->studySession == null ? $item->date.'T24:00:00':str_replace(' ','T',$item->studySession->session_end);
                                echo('{');
                                echo("title: '{$item->course->course_name} {$item->note}',");
                                echo("start: '".$start_date."',");
                                echo("end: '".$end_date."',");
                                echo('},');
                            }
                        @endphp
                    ],

                ],
                eventTimeFormat: { // like '14:30:00'
                    hour: '2-digit',
                    minute: '2-digit',
                    meridiem: false,
                    hour12: false
                },
            });

            calendar.render();
        });
    </script>
@endsection
