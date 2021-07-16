@extends('layout.app')

@section('title','Course Page')

@section('content')
    <div class="body-content">
        {{-- <x-sub-header :subjects=$subjects></x-sub-header> --}}
        <div class="container-fluid pt-5 pb-5 pl-0 pr-0">
            <div class="w-75 m-auto">
                <div class="row">
                    <div id="detail" class="col-lg-8">
                        <div class="product-box mt-0 row bg-white m-0">
                            <div class="top-product col-lg-5 px-0">
                                <div class="content-product row" style="background-color: brown">
                                    <div class="col-3">
                                        <div class="color-bar">
                                        </div>
                                    </div>
                                    <div
                                        class="body-product-content d-flex flex-column justify-content-between align-items-center col-9"
                                        style="color: white">
                                        <div class="content-top text-wrap w-75">
                                            IGCSE<br>
                                        </div>
                                        <div class="content-bot" title="英文第一部分">
                                            英文
                                            第一部分
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="d-flex justify-content-between h-100">
                                    <div
                                        class="name-product w-75 d-flex flex-column justify-content-between text-primary p-3">
                                        <div class="text-multiline-truncate">
                                            <h2 class="font-weight-bold">
                                                IELTS 英文課程
                                                第一部分講解
                                                實時直播 (第1堂/共6堂）
                                            </h2>
                                        </div>
                                        <div class="h4 mt-auto">
                                            Ms. Polly Leung
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="detail" class="col-lg-4"></div>
                </div>
                <div class="pt-5">
                    <x-product-detail.lecture-course></x-product-detail.lecture-course>
                </div>
            </div>
        </div>
    </div>
@endsection

