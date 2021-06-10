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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: '2020-09-12',
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                events: [
                    {
                        title: 'Business Lunch',
                        start: '2020-09-03T13:00:00',
                        constraint: 'businessHours'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-09-13T11:00:00',
                        constraint: 'availableForMeeting', // defined below
                        color: '#257e4a'
                    },
                    {
                        title: 'Conference',
                        start: '2020-09-18',
                        end: '2020-09-20'
                    },
                    {
                        title: 'Party',
                        start: '2020-09-29T20:00:00'
                    },

                    // areas where "Meeting" must be dropped
                    {
                        groupId: 'availableForMeeting',
                        start: '2020-09-11T10:00:00',
                        end: '2020-09-11T16:00:00',
                        display: 'background'
                    },
                    {
                        groupId: 'availableForMeeting',
                        start: '2020-09-13T10:00:00',
                        end: '2020-09-13T16:00:00',
                        display: 'background'
                    },

                    // red areas where no events can be dropped
                    {
                        start: '2020-09-24',
                        end: '2020-09-28',
                        overlap: false,
                        display: 'background',
                        color: '#ff9f89'
                    },
                    {
                        start: '2020-09-06',
                        end: '2020-09-08',
                        overlap: false,
                        display: 'background',
                        color: '#ff9f89'
                    }
                ]
            });

            calendar.render();
        });

    </script>
@endsection
