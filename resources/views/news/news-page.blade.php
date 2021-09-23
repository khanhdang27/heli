@extends('layout.app')

@section('title','News Page')

@section('content')
<div class="body-news-page">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.latestNewsPage')
    </div>
    <div class="container container-news-page">
        <div class="content-news-page border-secondary">
            <div class="py-5">
                <div id="showMore">
                    <!-- Post -->
                    <div class="mx-auto box-news">
                        <div class="post" v-for='post in posts'>
                            <div class="py-2">
                                <a id="new_href" class="h2 text-center" :href="'news/'+post.id">
                                    <span v-cloak>@{{ post.announcement_date }} </span>
                                    <span v-cloak>@{{ post.title }}</span>
                                </a><br>
                            </div>
                        </div>
                    </div>

                    <div v-if="!isFinished" class="d-flex justify-content-center mt-5">
                        <button class="btn-more h5 bg-white text-primary border-primary" @click='getPosts()' v-cloak>
                            @lang('keywords.more')
                            <img src="{{asset("images/ic/ic_drop.svg")}}" width="28">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script type="application/javascript">
        var app = new Vue({
            el: '#showMore',
            data: {
                isFinished: false,
                page: 0,
                buttonText: 'Load More',
                posts: ''
            },
            methods: {
                getPosts: function(){
                    axios.get('{{ route("site.news.list")}}', {
                        params: {
                            page: this.page + 1,
                        }
                    })
                    .then(function (response) {
                        if(response.data){
                            var len = app.posts.length;
                            app.page+=1;
                            if(len > 0){
                                app.buttonText = "Loading ...";
                                setTimeout(function() {
                                    app.buttonText = "Load More";
                                    // Loop on data and push in posts
                                    for (let i = 0; i < response.data.data.length; i++){
                                        app.posts.push(response.data.data[i]);
                                    }
                                },500);
                            }else{
                                app.posts = response.data.data;
                            }
                            if (!response.data.next_page_url ) {
                                app.isFinished = true;
                            }
                        }else{
                            app.buttonText = "No more records avaiable.";
                            app.isFinished = true;
                        }
                    });
                }
            },
            created: function(){
                this.getPosts();
            }
        })
    </script>
    @endpush
    <x-subscribe-container></x-subscribe-container>
</div>
@endsection