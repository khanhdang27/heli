@extends('layout.app')
@section('title','Team Page')
@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.starTutorTeam')
        </div>
        <div class="container-fluid content-team-page">
            <div class="row w-100 m-0">
                @foreach(\App\Models\Tutor::with('user')->get() as $key => $value)
                    @if($value->id != 1)
                        <div class="col-lg-6 d-flex justify-content-center px-5">
                            <div class="card-team">
                                <div class="row m-0">
                                    <div class="col-sm-6 info-left p-0">
                                        @if(empty($value->user->avatar))
                                            <div class="thumb border border-primary bg-white"
                                                 style="background-image: url({{asset("images/photo_default.svg")}})"></div>
                                        @else
                                            <div class="thumb"
                                                 style="background-image: url({{asset('/file/'.$value->user->avatar->id)}})"></div>
                                        @endif
                                        <div
                                            class="d-flex flex-column align-items-center justify-content-center info-tutor text-white">
                                            <div class="name-tutor">{{ $value->full_name }}</div>
                                            <div class="position-tutor text-center">Tutor/Admission Consultant</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 info-right p-0">
                                        <div
                                            class="bg-dark d-flex flex-column justify-content-between pt-5 px-5 pb-3 tutor-background">
                                            <div class="content-info-right text-white">
                                                <div>{{ $value->tutor_info }}</div>
                                                <br>
                                                <div>► {{ $value->tutor_level }}</div>
                                                <div>► {{ $value->tutor_specialized }}</div>
                                                <div>► {{ $value->tutor_experience }}</div>
                                            </div>
                                            {{--                                        <div class="d-flex justify-content-end bottom-info-right">--}}
                                            {{--                                            <div class="ic-tutor ic-light">--}}
                                            {{--                                                <img src={{asset("images/ic/ic_light.svg")}}>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="ic-tutor ic-clock">--}}
                                            {{--                                                <img src={{asset("images/ic/ic_clock.svg")}}>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="ic-tutor ic-az">--}}
                                            {{--                                                <img src={{asset("images/ic/ic_az.svg")}}>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
