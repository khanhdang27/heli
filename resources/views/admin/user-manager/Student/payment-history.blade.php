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
                                <a href="{{ route('admin.user-manager.student') }}" class="btn btn-outline-dark btn-sm">
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
                                    <th>Date</th>
                                    <th>Course</th>
                                    <th>Total</th>
                                    <th>Invoice</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($payment_history as $item)
                                    <tr>
                                        <td class="goal-project">
                                            {{$item->created_at}}
                                        </td>
                                        <td class="goal-project">
                                            {{$item->course->course_name}}
                                        </td>
                                        <td class="goal-project">
                                            {{$item->final_price}}
                                        </td>
                                        <td class="goal-project">
                                            {{$item->payment_id}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$payment_history->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection


