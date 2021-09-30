@extends('layout.app')
@section('title','Payment')
@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.coursePayment')
        </div>
        <div class="container-fluid text-primary pb-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-sm-10 col-lg-12">
                    <h1 class="my-5 font-weight-bold">@lang('keywords.coursePayment')</h1>
                    <div class="row flex-wrap-reverse">
                        <div class="col-lg-7">
                            <div class="card border-2 border-primary mb-5">
                                <div class="card-body text-primary p-5">
                                    <h4 class="card-title font-weight-bold border-bottom border-primary pb-3">
                                        Your Course
                                    </h4>
                                    <div class="card border-0 mt-4">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="product-payment card-body mb-3 bg-secondary">
                                                    <div class="text-center">
                                                        <small>IGCSE</small>
                                                    </div>
                                                    <p class="text-center">
                                                        <small>實時直播課程</small>
                                                    </p>
                                                    <div class="py-2 px-4 border border-white">
                                                        <p class="text-center m-0">
                                                            <small>英文英文課程第一部分講解</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="card-body p-0">
                                                    <h5 class="text-limit-3">IGCSE基礎數學2課程基礎數學 第二部分</h5>
                                                    <p class="card-text"><small>Ms. Polly Leung</small>
                                                    </p>
                                                    <h3 class="font-weight-bold">49 tokens</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table width="100%" class="my-5">
                                        <tr>
                                            <td>
                                                <h4 class="font-weight-bold">Sub Total</h4>
                                            </td>
                                            <td class="text-right">
                                                <h4 class="font-weight-bold">49 tokens</h4>
                                            </td>
                                        </tr>
                                        <tr class="font-weight-bold">
                                            <td>
                                                <h4 class="font-weight-bold">Discount</h4>
                                            </td>
                                            <td class="text-right">
                                                <h4 class="font-weight-bold">0 token</h4>
                                            </td>
                                        </tr>
                                    </table>
                                    <div
                                        class="d-flex justify-content-between align-items-center bg-btn-payment p-4 shadow-sm
                                                mb-5">
                                        <h3 class="m-0 font-weight-bold">Total</h3>
                                        <h3 class="m-0 font-weight-bold">49 tokens</h3>
                                    </div>
                                    <button class="btn btn-primary w-100 py-3 h5 font-weight-bold">Payment</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card border-2 border-primary mb-5">
                                <div class="card-body py-5 px-4">
                                    <h4 class="card-title font-weight-bold pb-3">
                                        Your Course
                                    </h4>
                                    <div class="d-flex mb-5">
                                        <div class="rounded-circle border border-primary mr-4 bg-user user-avatar"
                                             style="background-image: url('{{ asset(empty(Auth::user()->avatar)
                                                                        ? "images/user_default.png"
                                                                        : '/file/'.Auth::user()->avatar->id
                                                                        )}}');">
                                        </div>
                                        <div>
                                            <h4 class="mb-3 font-weight-bold">Kenny Or</h4>
                                            <h5>+852 9098 0989</h5>
                                        </div>
                                    </div>
                                    <table width="100%" class="my-5">
                                        <tr>
                                            <td><h4 class="font-weight-bold">Wallet Balance </h4></td>
                                            <td class="text-right">
                                                <h4 class="font-weight-bold">49 tokens</h4>
                                            </td>
                                        </tr>
                                        <tr class="font-weight-bold">
                                            <td><h4 class="font-weight-bold">Linked Visa </h4></td>
                                            <td class="text-right">
                                                <h4 class="font-weight-bold">**** **** **** 8097</h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
