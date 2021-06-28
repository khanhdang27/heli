@extends('layout.app')

@section('title','Calendar Page')

@section('content')
    @include('layout.sub-header')
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
                            <img src="{{asset("images/bookmark.png")}}" width="142">
                        </div>
                        <div class="mr-5 mb-3">
                            <img src="{{asset("images/bookmark.png")}}" width="142">
                        </div>
                        <div>
                            <img src="{{asset("images/bookmark.png")}}" width="142">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @php
        $tkb[0] = array('start'=>'2021-06-14T13:00:00', 'end'=>'2021-06-14T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[1] = array('start'=>'2021-06-16T13:00:00', 'end'=>'2021-06-16T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[2] = array('start'=>'2021-06-18T13:00:00', 'end'=>'2021-06-18T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[3] = array('start'=>'2021-06-20T13:00:00', 'end'=>'2021-06-20T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[4] = array('start'=>'2021-06-22T13:00:00', 'end'=>'2021-06-22T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
        $tkb[5] = array('start'=>'2021-06-24T13:00:00', 'end'=>'2021-06-24T15:00:00', 'title' => 'Toeic 900', 'description' => 'description of Toeic 900');
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
                googleCalendarApiKey: 'AIzaSyD7TfsO9cuJatNQyxQOcS5kAkFK8enPWF8',
                initialDate: '{{date('Y-m-d')}}',
                businessHours: true, // display business hours
                selectable: true,
                fixedWeekCount: false,
                displayEventEnd: true,
                eventSources: [{
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
