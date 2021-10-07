@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    List Wallets
                                </h4>
                            </div>
                            <div class="ml-auto col-auto">
                                <!-- Button -->

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-0" data-toggle="lists"
                             data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>Holder name</th>
                                    <th>Balance</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($wallets as $wallet)
                                    <tr>
                                        <td class="goal-project">
                                            {{$wallet->name}}
                                        </td>
                                        <td class="goal-project">
                                            {{$wallet->wallet->balance}}
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                       href="{{route('admin.wallet-manager.edit', $wallet->wallet->id)}}">
                                                        Update balance
                                                    </a>
                                                    <a class="dropdown-item"
                                                       href="{{route('admin.wallet-manager.show', $wallet->wallet->id)}}">
                                                        Deposit history
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$wallets->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
