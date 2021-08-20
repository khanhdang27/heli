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
        $tkb = [];
        foreach ($schedule as $item){
            $start_date = $item->studySession == null ? $item->date.'T00:00:00': $item->date.'T'.explode(' ', $item->studySession->session_start)[1];
            $end_date = $item->studySession == null ? $item->date.'T24:00:00': $item->date.'T'.explode(' ', $item->studySession->session_end)[1];
            $tkb[] = array('start'=>$start_date, 'end'=>$end_date, 'title' => $item->course->course_name.' '.$item->note, 'description' => '');
        }
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
                googleCalendarApiKey: '{{config('app.google_api_calendar')}}',
                initialDate: '{{date("Y-m-d")}}',
                businessHours: true, // display business hours
                selectable: true,
                fixedWeekCount: false,
                displayEventEnd: true,
                eventSources: [
                    {
                        googleCalendarId: 'en.hong_kong.official#holiday@group.v.calendar.google.com',
                    },
                    [
                    @php
                        
                        foreach ($tkb as $e){
                                echo('{');
                                echo("title: '{$e['title']}',");
                                echo("start: '{$e['start']}',");
                                echo("end: '{$e['end']}',");
                                echo('},');
                            }
                    @endphp
                    ]

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

    <style>
        .fc-daygrid-dot-event .fc-event-title {
            flex-grow: 1;
            flex-shrink: 1;
            min-width: 0;
            overflow: hidden;
            font-weight: bold;
            white-space: normal;
        }
    </style>
@endsection
