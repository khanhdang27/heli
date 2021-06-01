@extends('layout.app')

@section('title','News Page')

@section('content')
    <div class="body-news-page">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.latestNewsPage')
        </div>
        <div class="container container-news-page">
            <div class="content-news-page border-secondary">
                <div class="news-item">
                    <div class="show-news-item">
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                    </div>
                    <div class="show-news-item-collapse" id="news-collapse">
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                        <div class="news-title">8/1 IELTS 考試中心最新安排</div>
                    </div>
                    <div class="d-flex justify-content-center bottom-collapse">
                        <button class="btn-more bg-white text-primary border-primary" id="btn-showNews"
                                onclick="showNews()" type="submit">更多 <img
                                src="{{asset("images/ic/ic_drop.svg")}}" width="28"></button>
                    </div>
                </div>
                <script>
                    function showNews() {
                        document.getElementById("news-collapse").style.display = "block";
                    };

                </script>
            </div>

        </div>
    </div>
@endsection