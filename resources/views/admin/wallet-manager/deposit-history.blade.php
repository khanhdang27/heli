@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="pr-2">
                                <a href="{{ route('admin.wallet-manager.index') }}" class="btn btn-outline-dark btn-sm">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Deposit histories - Holder name: {{$user->name}}
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
                                    <th>UUID</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td class="goal-project">
                                            {{$transaction->uuid}}
                                        </td>
                                        <td class="goal-project">
                                            {{$transaction->created_at}}
                                        </td>
                                        <td class="goal-project">
                                            {{$transaction->amount}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$transactions->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection

