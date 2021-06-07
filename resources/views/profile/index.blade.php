@extends('layout.app')

@section('title','Blog Page')

@section('content')
    <hr class="mt-0"/>
    <div class="container-fluid mt-5 mb-5 pb-5">
        <div class="card mx-auto card-profile pt-5 pb-5 pl-3 pr-3 mb-5">
            <div class="mx-auto grid-width-30">
                <img width="150" height="150" class="rounded" src="{{asset('images/user_default.png')}}">
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
                        <p class="text-primary">{{$student->phone_no}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Full name:</p>
                    </td>
                    <td>
                        <p class="text-primary">{{$student->full_name}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Date of birth:</p>
                    </td>
                    <td>
                        <p class="text-primary">{{$student->day_of_birth}}</p>
                    </td>
                </tr>
            </table>
            <div class="text-right">
                <a href="{{ route('user.profile.edit',Auth::user()->id) }}" class="font-weight-bold">@lang('keywords.updateYourProfile')</a>
            </div>
        </div>
    </div>
@endsection