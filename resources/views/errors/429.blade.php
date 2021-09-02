@extends('errors::minimal')

@section('title', __('Too Many Requests'))

@section('code', '429')

<button class="flex-center" onclick="window.location.reload()"> reload </button>

@section('message', __('keywords.errors.tooManyRequests'))