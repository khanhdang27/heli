@extends('layout.app')

@section('title','Course Page')

@section('content')
    <div class="body-content">
        @include('layout.sub-header')
        <div class="container-fluid pt-5 pb-5 pl-0 pr-0">
            <div class="video m-auto">
                <div class="info-course-right">
                    <p class="title-course">
                        IELTS 英文課程
                        第一部分講解
                        實時直播 (共6堂）
                    </p>
                    <p class="m-0 teacher-name">Ms. Polly Leung</p>
                </div>
                <div class="pt-5">
                    <video width="100%" src="#" controls></video>
                </div>
            </div>


        </div>
    </div>
@endsection

