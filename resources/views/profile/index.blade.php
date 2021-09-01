@extends('layout.app')

@section('title','Blog Page')

@section('content')
    <hr class="mt-0"/>
    <div class="container-fluid mt-5 mb-5 pb-5">
        <div class="card mx-auto card-profile pt-5 pb-5 pl-3 pr-3 mb-5">
            <div class="mx-auto grid-width-30">
                @if(empty(Auth::user()->avatar))
                    <img width="150" height="150" class="img-thumbnail rounded" src="{{asset('images/user_default.png')}}">
                @else
                    <img width="150" height="150" class="img-thumbnail rounded" src="{{asset('/file/'.Auth::user()->avatar->id)}}">
                @endif
            </div>
            <h5 class="card-title text-center font-weight-bold text-30 mt-5">
                {{Auth::user()->name}}
            </h5>
            <table class="text-dark">
                <tr>
                    <td width="150px">
                        <p>Email:</p>
                    </td>
                    <td>
                        <p class="text-primary">{{Auth::user()->email}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Phone:</p>
                    </td>
                    <td>
                        <p class="text-primary">{{$user_info->phone_no ?? null}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Full name:</p>
                    </td>
                    <td>
                        <p class="text-primary">{{$user_info->full_name ?? null}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Date of birth:</p>
                    </td>
                    <td>
                        <p class="text-primary">{{$user_info->day_of_birth ?? null}}</p>
                    </td>
                </tr>
            </table>
            <div class="row">

                <div class="col-sm-4">
                    <a href="{{ route('site.profile.edit',Auth::user()->id) }}" class="btn btn-outline-primary font-weight-bold w-100 mb-3">
                        Update your profile
                    </a>
                </div>
                @if(Auth::User()->hasRole('student'))
                    <div class="col-sm-4">
                        <a href="{{ route('site.payment-history') }}" class="btn btn-outline-primary font-weight-bold w-100 mb-3">
                            Payment History
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('site.order.updateCard',Auth::user()->id) }}" class="btn btn-outline-primary font-weight-bold w-100 mb-3">
                            Update Payment Card
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
