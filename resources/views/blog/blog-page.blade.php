@php
use App\Utilities\SelectionByClass;
@endphp

@extends('layout.app')

@section('title', 'Blog Page')

@section('content')
<div class="body-content">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.blog-page.learningColumn')
    </div>
    @if (empty($blog_top))
    <div class="d-flex justify-content-center">
        <H3>
            No Data Fount
        </H3>
    </div>
    @else
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <x-slide-tag.slide-tag :tags=$tags type="blog"></x-slide-tag.slide-tag>
            </div>
        </div>
        <div class="row justify-content-center pt-5 pb-5">
            {{--    </div>--}}
            {{--    <div class="w-75 ml-auto mr-auto pb-5 body-blog-page">--}}
            <div class="col-md-9">
                <h2 class="font-weight-bold text-primary bg-white">
                    @lang('keywords.blog-page.popularArticlesThisWeek')
                </h2>
                <div class="row">
                    <!--Component blog top this week-->
                    <div class="col-xl-7 px-4 post-spotlight mb-5">
                        <x-blog.blog-top-week :blogs=$blog_top></x-blog.blog-top-week>
                    </div>
                    <!--Component blog list this week-->
                    <div class="col-xl-5 px-4 popular-articles-right">
                        @foreach ($blogs as $item)
                        <x-blog.blog-list-week :blog=$item></x-blog.blog-list-week>
                        @endforeach
                    </div>
                </div>
                <h1 class="pt-5 font-weight-bold text-primary">
                    @lang('keywords.blog-page.latestArticles')
                </h1>
                <div id="show-blog">
                    <div class="row">
                        <!--Component Latest Blog List-->
                        <div class="col-xl-4 col-lg-6 pt-4 blog-item-latest-display" v-for='post in posts'>
                            <div class="mt-2 popular-item shadow animate-up" id="latest">
                                <div class="thumb-article d-flex flex-column justify-content-end position-relative">

                                    <div class="mt-2 popular-item shadow animate-up" id="latest">
                                        <div
                                            class="thumb-article d-flex flex-column justify-content-end position-relative">

                                            <img v-if="post.photo"
                                                class="main-photo img-thumbnail border-0 p-0 rounded-0"
                                                :src="'/helios/public/file/'+post.photo.id">
                                            <img v-else class="main-photo img-thumbnail border-0 p-0 rounded-0"
                                                src="{{ asset('images/default-image.jpg')}}">

                                            <div
                                                class="container-fluid pt-2 info-article d-flex flex-column justify-content-between position-absolute">
                                                <a :href="'view-blog/'+post.id"
                                                    class="h4 font-weight-bold title-article">
                                                    <span v-cloak>@{{ post.title }}</span>
                                                </a>
                                                <div class="">
                                                    <div class="d-flex align-items-center text-white">
                                                        <p class="h5 mr-5">
                                                            <span v-cloak>@{{ post.created_at | formatDate }}</span>
                                                        </p>
                                                        <img class="mb-2 mr-2" src="{{asset("images/ic/ic_eye.svg")}}"
                                                            width="26">
                                                        <h5>
                                                            <span v-cloak>@{{ post.view_no }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="d-flex flex-wrap pb-3">
                                                        <div v-for='tag in post.tags'>
                                                            <button class="btn-hashtag-small">
                                                                <span v-cloak>@{{ tag.tag_name }}</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="!isFinished" class="d-flex pt-5 mt-5 pb-5 justify-content-center">
                        <button class="btn-more h5 bg-white text-primary border-primary" @click='getPosts()' v-cloak>
                            @lang('keywords.more')
                            <img src="{{asset("images/ic/ic_drop.svg")}}" width="28">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        Vue.filter('formatDate', function (value) {
                if (value) {
                    return moment(String(value)).format('MM/DD/YYYY hh:mm')
                }
            });
            var app = new Vue({
                el: '#show-blog',
                data: {
                    isFinished: false,
                    page: 0,
                    buttonText: 'Load More',
                    posts: ''
                },
                methods: {
                    getPosts: function () {
                        axios.get('{{ route("site.blog.list")}}', {
                            params: {
                                page: this.page + 1,
                            }
                        })
                        .then(function (response) {
                            if (response.data) {
                                var len = app.posts.length;
                                app.page += 1;
                                if (len > 0) {
                                    app.buttonText = "Loading ...";
                                    setTimeout(function () {
                                        app.buttonText = "Load More";
                                        // Loop on data and push in posts
                                        for (let i = 0; i < response.data.data.length; i++) {
                                            app.posts.push(response.data.data[i]);
                                        }
                                    }, 500);
                                } else {
                                    app.posts = response.data.data;
                                }
                                if (!response.data.next_page_url ) {
                                    app.isFinished = true;
                                }
                            } else {
                                app.buttonText = "No more records avaiable.";
                                app.isFinished = true;
                            }
                        });
                    }
                },
                created: function () {
                    this.getPosts();
                }
            })
    </script>
    <x-subscribe-container></x-subscribe-container>
</div>


@endsection