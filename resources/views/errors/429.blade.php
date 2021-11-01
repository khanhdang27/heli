@extends('errors::minimal')

@section('title', __('Too Many Requests'))

@section('code', '429')

@section('message', __('keywords.errors.tooManyRequests'))

@section('button')
<button onclick="window.location.reload()"> reload </button>
@endsection