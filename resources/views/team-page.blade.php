@extends('layout.app')
@section('title','Team Page')
@section('content')
<div class="body-content">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.starTutorTeam')
    </div>
    <div class="container-fluid content-team-page">
        <div class="row w-100 m-0">
            @foreach(\App\Models\Tutor::with('user')->get() as $key => $value)
            @if($value->id)
            <x-tutor.card-design-v2 :tutor=$value></x-tutor.card-design-v2>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
