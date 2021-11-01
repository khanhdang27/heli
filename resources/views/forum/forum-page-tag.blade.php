@extends('layout.app')

@section('title','Forum Page')

@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.navBar.q&aArea')
        </div>
        <div class="container-fluid">
            <div class="row pt-5 pb-5 justify-content-center">
                <div class="col-md-8">
                    <x-slide-tag.slide-tag :tags=$tags type="post"></x-slide-tag.slide-tag>
                    <div class="pb-5">
                        @foreach($posts as $value)
                            <x-forum.forum-post :post=$value :tags=$tags>
                            </x-forum.forum-post>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

