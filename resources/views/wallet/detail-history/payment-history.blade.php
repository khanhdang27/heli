@extends('layout.app')
@section('title','Wallet')
@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.wallet.paymentHistory')
        </div>
        <div class="container-fluid pb-5">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1 class="font-weight-bold my-5 text-primary">@lang('keywords.wallet.paymentHistory')</h1>
                    <div class="border-2 border-primary py-4 px-5 text-primary mb-5">
                        <div class="mx-5">
                            @include('wallet.detail-history.head-invoice')
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h1 class="pt-5 font-weight-bold">Invoice</h1>
                                    <h4>Course Payment</h4>
                                </div>
                                <div>
                                    <div class="pt-4 d-flex flex-column align-items-center">
                                        <img class="" src="{{asset('images/ic/ic_helios.svg')}}" width="64px">
                                        <p class="font-weight-bold">Helios Education, Inc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5 pb-3 border-bottom border-primary">
                                <div class="d-flex">
                                    <h4 class="mr-5">Date Issued:<span class="font-weight-bold ml-3">16-09-21</span></h4>
                                    <h4>Date Due:<span class="font-weight-bold ml-3">17-09-21</span></h4>
                                </div>
                                <h4>Invoice No:<span class="font-weight-bold ml-3">#19098776235</span></h4>
                            </div>
                            <div class="d-flex my-5">
                                <h3 class="font-weight-bold mr-5">Billed To:</h3>
                                <div>
                                    <h3>Kenny Or</h3>
                                    <h3>Phone: +852 9098 0989</h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-primary border border-primary mb-0">
                                    <thead class="thead-light text-center">
                                    <tr>
                                        <th class="h3 border-bottom border-primary" scope="col">Course Name</th>
                                        <th class="h3 border-bottom border-primary" scope="col">Course Price</th>
                                        <th class="h3 border-bottom border-primary" scope="col">Time</th>
                                        <th class="h3 border-bottom border-primary" scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <tr>
                                        <td class="h3 p-5 w-50">IGCSE基礎數學2課程基礎數學第二部分</td>
                                        <td class="h3 py-5">49 tokens</td>
                                        <td class="h3 py-5">16-09-21, 15:00</td>
                                        <td class="h3 py-5">Paid</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between mt-5 flex-wrap">
                                <h5>All payment are in Tokens, via E-wallet of Helios.</h5>
                                <table width="25%">
                                    <tr>
                                        <td> <h4>Sub Total:</h4></td>
                                        <td><h4 class="font-weight-bold text-right">49 tokens</h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Discount:</h4></td>
                                        <td><h4 class="font-weight-bold text-right">0 token</h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Total:</h4></td>
                                        <td><h4 class="font-weight-bold text-right">49 tokens</h4></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mb-5">
                        <div class="col-2">
                            <a class="btn border border-primary w-100 h4 font-weight-bold py-3">
                                Cancel
                            </a>
                        </div>
                        <div class="col-3">
                            <a class="btn btn-primary border border-primary w-100 h4 font-weight-bold py-3">
                                Print
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
