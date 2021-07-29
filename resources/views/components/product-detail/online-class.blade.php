@php
    use Illuminate\Support\Carbon;

    $rooms = clone $courseDetail->rooms;
    $schedule = clone $courseDetail->schedule;
@endphp


<div>
    <p class="pt-5 text-primary h2">請按你的需要選擇合適班次，每班名額有限，額滿將停止收生</p>

    <div class="room-selection">
        <input type="radio" name="room_id" value="" form="form-room" checked required>
        @foreach ($rooms as $idx => $room)

            <input id="room_{{ $room->id }}" type="radio" name="room_id" value="{{$room->id}}" form="form-room">

            <label for="room_{{ $room->id }}" class="pt-3 reviews">
                <div class="row review-bar">
                    <div class="col-xl-3 avatar-review">
                        <div>
                            <img src="{{ asset("images/tv.svg")}}" class="img-thumbnail border-0"
                                alt="TV"
                                width="170" height="170">
                        </div>
                        <p class="quantity text-primary text-center pt-1">
                            其余的: {{ $room->number_member_maximum - $room->number_member }}
                        </p>
                    </div>
                    <div class="col-xl-9 text-primary">
                        <p class="h4 font-weight-bold">
                            {{ $courseDetail->course_name }} : {{ $courseDetail->course_description }}
                        </p>
                        <p class="h4 pt-2">{{ Carbon::parse($room->start_date)->format('l') }}｜{{ $room->studySession->session_name }}</p>
                        <p class="h4 pt-2">
                            @foreach ($schedule as $item)
                                <span> 
                                    {{ Carbon::parse($item->date)->format('d/m') }}, &nbsp;
                                </span>
                            @endforeach
                        </p>
                        <p class="h4 pt-2 m-0">
                            直播班(安在家中輕鬆上堂，課堂後亦可無限次重溫課堂影片)
                        </p>
                    </div>
                </div>
            </label>
        @endforeach
    </div>
</div>
