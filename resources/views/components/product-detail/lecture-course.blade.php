@php
// $videoLink = 'https://player.vimeo.com/video/' . $videoId . '?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=' . config('vimeo_app_id');
@endphp

<div style="padding:56.25% 0 0 0;position:relative;">
    <iframe src="https://vimeo.com/event/{{$videoId}}/embed" frameborder="0"
        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
        style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
</div>