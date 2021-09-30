@extends('layout.app')
@section('title','Wallet')
@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.wallet.topUpHistory')
        </div>
        <div class="container-fluid pb-5">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1 class="font-weight-bold my-5 text-primary">@lang('keywords.wallet.topUpHistory')</h1>
                    <div class="border-2 border-primary py-4 px-5 text-primary mb-5">
                        <div class="mx-5">
                            @include('wallet.detail-history.head-invoice')
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h1 class="pt-5 font-weight-bold">Invoice</h1>
                                    <h4>Top-up to Wallet</h4>
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
                                    <h4 class="mr-5">Date Issued:<span class="font-weight-bold ml-3">16-09-21</span>
                                    </h4>
                                    <h4>Date Due:<span class="font-weight-bold ml-3">17-09-21</span></h4>
                                </div>
                                <h4>Top-up ID:<span class="font-weight-bold ml-3">#0000124</span></h4>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap">
                                <div class="d-flex my-5">
                                    <h3 class="font-weight-bold mr-5">From:</h3>
                                    <div>
                                        <h3>Kenny Or</h3>
                                        <h3>Visa Card: **** **** **** 8097</h3>
                                    </div>
                                </div>
                                <div class="d-flex my-5">
                                    <h3 class="font-weight-bold mr-5">To:</h3>
                                    <div>
                                        <h3>Wallet</h3>
                                        <h3>Wallet ID: 5csdpare38576xvfbhyl</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-primary border border-primary mb-0">
                                    <thead class="thead-light text-center">
                                    <tr>
                                        <th class="h3 border-bottom border-primary" scope="col">Amount</th>
                                        <th class="h3 border-bottom border-primary" scope="col">Received</th>
                                        <th class="h3 border-bottom border-primary" scope="col">Visa card</th>
                                        <th class="h3 border-bottom border-primary" scope="col">Time</th>
                                        <th class="h3 border-bottom border-primary" scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <tr>
                                        <td class="h3 py-5">1000HK$</td>
                                        <td class="h3 py-5">100 tokens</td>
                                        <td class="h3 py-5">**** **** **** 8097</td>
                                        <td class="h3 py-5">16-09-21, 15:00</td>
                                        <td class="h3 py-5">Successful</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5">Top-up tokens to Helios wallet with no fees.</h5>
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

