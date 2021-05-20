<?php
$tutor = new \App\Models\Tutor();
?>
@extends('layout.app')
@section('title','Team Page')
@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.starTutorTeam')
        </div>
        <div class="container-fluid content-team-page">
            <div class="row">
                @foreach($tutor->getTutor() as $value)
                    <div class="col-xl-6 col-sm d-flex justify-content-center">
                        <div class="card-team">
                            <div class="row">
                                <div class="col-sm info-left">
                                    <div class="thumb"
                                         style="background-image: url({!! Storage::url($value->tutor_photo) !!})"></div>
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center info-tutor text-white">
                                        <div class="name-tutor">{{ $value->tutor_name }}</div>
                                        <div class="position-tutor">Tutor/Admission Consultant</div>
                                    </div>
                                </div>
                                <div class="col-sm ">
                                    <div class="info-right bg-dark d-flex flex-column justify-content-between">
                                        <div class="content-info-right text-white m-auto">
                                            <div>{{ $value->tutor_info }}</div>
                                            <br>
                                            <div>{{ $value->tutor_level }}</div>
                                            <div>{{ $value->tutor_specialized }}</div>
                                            <div>{{ $value->tutor_experience }}</div>
                                        </div>
                                        <div class="d-flex justify-content-end bottom-info-right">
                                            <div class="ic-tutor ic-light">
                                                <img src={{asset("images/ic/ic_light.svg")}}>
                                            </div>
                                            <div class="ic-tutor ic-clock">
                                                <img src={{asset("images/ic/ic_clock.svg")}}>
                                            </div>
                                            <div class="ic-tutor ic-az">
                                                <img src={{asset("images/ic/ic_az.svg")}}>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
