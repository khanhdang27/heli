<div class="banner-content">
    <img class="img-thumbnail border-0 p-0 rounded-0 banner-background"  src="{{ asset('/file/'.$banner->banner_background ?? 0)}}">
    <div class="banner-info">
        <div class="banner-caption text-secondary">
            <div class="banner-title">
                <p>{{ $banner->banner_title ?? null }}</p>
            </div>
        </div>
        <div class="btn-register-free">
            <button class="btn-register-now mt-5 free btn-secondary text-primary" data-toggle="modal"
                    data-target="#registerModal">
                @lang('keywords.registerNowFree')
            </button>
        </div>
    </div>
</div>
