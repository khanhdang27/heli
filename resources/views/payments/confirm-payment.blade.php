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
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-lg-7 col-xl-6">
                            <h1 class="font-weight-bold text-center mb-5">Confirm Payment</h1>
                            <h3 class="font-weight-bold mb-5">Invoice Details</h3>
                            <table width="100%" class="mb-5">
                                <tr>
                                    <td><h4 class="font-weight-bold mb-4">Recipient</h4></td>
                                    <td class="text-right"><h4 class="font-weight-bold mb-4">Helios Education</h4></td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">Course Price</h4></td>
                                    <td class="text-right"><h4 class="font-weight-bold mb-4">49 tokens</h4></td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">Course Name</h4></td>
                                    <td class="text-right">
                                        <h4 class="font-weight-bold mb-4">IGCSE基礎數學2課程基礎數學第二部分</h4>
                                    </td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">Invoice No</h4></td>
                                    <td class="text-right">
                                        <h4 class="font-weight-bold mb-4">#19098776235</h4>
                                    </td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold">Time</h4></td>
                                    <td class="text-right">
                                        <h4 class="font-weight-bold">16-09-21,15:00</h4>
                                    </td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a class="btn btn-white text-primary border-primary py-3 h4 font-weight-bold w-100">Back</a>
                                </div>
                                <div class="col-sm-8">
                                    <a class="btn btn-primary py-3 h4 font-weight-bold w-100">Completed</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

