@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
@section('button')
<button onclick="window.location.reload()"> reload </button>
@endsection