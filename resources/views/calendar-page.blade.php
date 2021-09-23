@extends('layout.app')

@section('title','Calendar Page')

@section('content')
<div class="container-fluid text-center top-news-page">
    @lang('keywords.footer.mySchedule')
</div>
{{-- <x-sub-header :subjects=$subjects></x-sub-header> --}}
<div class="container-fluid calendar">
    <div class="row">
        <div class="col-xl-7 px-0">
            <div id='calendar'></div>
        </div>
        <div class="col-xl-1"></div>
        <div class="col-xl-4">
            <div class="event-calendar">
                <div class="row" id="item-event-list">
                    @foreach ($event as $item)
                    <div class="col-md-4">
                        <div class="d-flex align-items-start mb-3">
                            <img class="mr-2" src="{{asset("images/ic/ic_ellipse1.svg")}}" width="34">
                            <p class="mb-0">{{$item->googleEvent->summary}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="event-calendar">
                <div class="row mb-5">
                    <div class="col-xl-10">
                        <div class="row" id="item-schedule-list">
                            @foreach($schedule as $item)
                            @if(date('m', strtotime($item->date)) == date('m'))
                            <div class="col-sm-4 col-lg-2 col-xl-4 col-6">
                                <div class="item-schedule mb-5">
                                    <div class="pt-3 px-2">
                                        <p class="text-center text-limit-3">
                                            {{$item->course->course_name}}
                                        </p>
                                        <p class="text-center mb-0">
                                            <small>
                                                {{\Carbon\Carbon::createFromTimestamp(strtotime($item->studySession->session_start))->format("H:i")}}
                                                -
                                                {{\Carbon\Carbon::createFromTimestamp(strtotime($item->studySession->session_end))->format("H:i")}}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </div>
        </div>
    </div>

</div>

@php
$tkb = [];
foreach ($schedule as $item){
$start_date = $item->studySession == null ? $item->date.'T00:00:00': $item->date.'T'.explode(' ',
$item->studySession->session_start)[1];
$end_date = $item->studySession == null ? $item->date.'T24:00:00': $item->date.'T'.explode(' ',
$item->studySession->session_end)[1];
$tkb[] = array('start'=>$start_date, 'end'=>$end_date, 'title' => $item->course->course_name.' '.$item->note,
'description' => '');
}
@endphp
<script type="application/javascript">
    function getHolidays(events) {
            return events.filter(event => event.id.length > 1);
        }

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

            // var calendarUrl = 'https://www.googleapis.com/calendar/v3/calendars/en.hongkong%23holiday%40group.v.calendar.google.com/events?key=AIzaSyDfKWdpeRjC-731P6PQkR8DsKuuVewHpqc';


            $('.calendar').on('click', 'button', function (e) {
                var button = $(this).attr('aria-label');
                if (button === "next" || button === "prev") {
                    var date = calendar.getDate();
                    var month = date.getMonth();
                    var current_month = month + 1;
                    $.ajax({
                        type: "GET",
                        url: "{{route('site.user.getMonth', '')}}/" + current_month,
                        dataType: "json",
                    }).done(function (data) {
                        var schedule = '';
                        var holidays = '';
                        data.schedule.forEach(function (item) {
                            schedule += `<div class="col-sm-4 col-lg-2 col-xl-4 col-6">
                                        <div class="item-schedule mb-5">
                                            <div class="pt-3 px-2">
                                                <p class="text-center text-limit-3">
                                                    ${item.course.course_name}
                                                </p>
                                                <p class="text-center mb-0">
                                                    <small>
                                                        ${getTime(item.study_session.session_start)}
                                                        -
                                                        ${getTime(item.study_session.session_end)}
                                                    </small>
                                                </p>
                                             </div>
                                        </div>
                                    </div>`;
                        })
                        data.event.forEach(function (item) {
                            holidays += `<div class="col-md-4">
                                            <div class="d-flex align-items-start mb-3">
                                                <img class="mr-2" src="{{asset("images/ic/ic_ellipse1.svg")}}"width="34">
                                                <p class="mb-0">${item.googleEvent.summary}</p>
                                            </div>
                                         </div>`;
                        })

                        $("#item-schedule-list").html(schedule)
                        $("#item-event-list").html(holidays)
                    });

                }
            });

        });

        function getTime(time) {
            var _time = new Date(time);
            var hour = _time.getHours();
            if (parseInt(hour) < 10) {
                hour = '0' + hour;
            }
            var minute = _time.getMinutes();
            if (parseInt(minute) < 10) {
                minute = '0' + minute;
            }

            return hour + ':' + minute;
        }

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