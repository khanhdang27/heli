@extends('errors::minimal')

@section('title', __('Page Not Found'))
@section('code', '404')
@section('message', __('Page Not Found'))
@section('button')
<button onclick="window.location.reload()"> reload </button>
@endsection