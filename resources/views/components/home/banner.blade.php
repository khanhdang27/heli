<div class="banner-content">
    @if(!empty($banner->banner_background))
        <img class="img-thumbnail border-0 p-0 rounded-0 banner-background"
             src="{{ asset('/file/'.$banner->banner_background ?? 0)}}">
    @else
        <img class="img-thumbnail border-0 p-0 rounded-0 banner-background" src="{{asset('images/banner.jpg')}}">
    @endif
    <div class="bg-opacity"></div>
    <div class="banner-info">
        <div class="banner-caption text-white">
            <div class="banner-title text-center">
                <p class="mb-0 font-weight-bold" id="title-home-page">{{ $banner->banner_title ?? null }}</p>
            </div>
        </div>
        <div class="btn-register-free text-center">
            <button class="btn-register-now mt-5 free btn-primary " data-toggle="modal"
                    data-target="#registerModal">
                @lang('keywords.registerNowFree')
            </button>
        </div>
    </div>
</div>
