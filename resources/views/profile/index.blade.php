@extends('layout.app')

@section('title','Blog Page')

@section('content')
    <hr class="mt-0"/>
    <div class="mt-5 mb-5 pb-5">
        <div class="card w-50 mx-auto p-5 mb-5">
            <div class="text-center">
                <img width="150" height="150" class="rounded" src="/file/{{Auth::user()->file_id}}">
            </div>
            <h5 class="card-title text-center font-weight-bold text-30 mt-5">
                {{Auth::user()->name}}
            </h5>
            <p class="text-20 text-primary"><span class="text-14">Email: </span>{{Auth::user()->email}}</p>
            <p class="text-20 text-primary"><span class="text-14">Phone: </span> {{$student->phone_no}}</p>
            <p class="text-20 text-primary"><span class="text-14">Full name: </span>{{$student->full_name}}</p>
            <p class="text-20 text-primary"><span class="text-14">Date of birth: </span>{{$student->day_of_birth}}</p>
            <a href="{{ route('user.profile.edit',Auth::user()->id) }}" class="text-right font-weight-bold">Update your profile</a>
        </div>
    </div>
@endsection
