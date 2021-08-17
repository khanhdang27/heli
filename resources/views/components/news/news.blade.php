<div class="mx-auto box-news">
    @foreach ($news as $item)
    <div class=" my-2">
        <a class="h2" href="{{ route('site.news-detail', $item->id) }}">
            {{ $item->announcement_date }}
            {{ $item->title }}
        </a><br>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-center mt-5">
    <a href="{{ $news -> nextPageUrl() }}" class="btn btn-more h5 mb-0 pt-1 border-primary">
        @lang('keywords.more')
        <img src="{{asset("images/ic/ic_drop.svg")}}" width="28">
    </a>
</div>