<div class="list-news w-75 mx-auto">
    @foreach($news as $item)
        <a class="h2" href="{{ route('site.news-detail',$item->id) }}">
            {{$item->announcement_date}}
            {{$item->title}}
        </a><br>
    @endforeach
</div>
{{--                    <div class="d-flex justify-content-center bottom-collapse">--}}
{{--                        <button class="btn-more bg-white text-primary border-primary" id="btn-showNews"--}}
{{--                                onclick="showNews()" type="submit">更多 <img--}}
{{--                                src="{{asset("images/ic/ic_drop.svg")}}" width="28"></button>--}}
{{--                    </div>--}}
