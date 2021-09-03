@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))
@section('button')
<button onclick="window.location.reload()"> reload </button>
@endsection