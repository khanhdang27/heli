<div class="banner-content">
    <div class="banner-background"
        style="background-image: url('{{ empty($banner->image) ? asset('images/banner.jpg') : asset('/file/' . $banner->image->id) }}')">
    </div>
    <div class="bg-opacity"></div>
    <div class="banner-info" id="bannerInfo">
        <div class="banner-caption text-white">
            <div class="banner-title text-center">
                <p class="mb-0 font-weight-bold" id="title-home-page">{{ $banner->banner_title ?? null }}</p>
            </div>
        </div>
        <div class="btn-register-free text-center">
            <button class="btn-register-now mt-5 free btn-primary " data-toggle="modal" data-target="#registerModal">
                @lang('keywords.registerNowFree')
            </button>
        </div>
    </div>
</div>

@push('scripts')
    <script type="application/javascript">
        const elementBanner = document.getElementById('bannerInfo');
        var animateBanner = anime({
            targets: elementBanner,
            translateY: ["110%", "-50%"],
            translateX: ["-50%", "-50%"],
            easing: 'easeOutExpo',
            opacity: [0.05, 1],
            delay: 1500
        })
    </script>
@endpush
