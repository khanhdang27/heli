@php
use \App\Utilities\SelectionByClass;


$default_certificate = 2;
if (app('request')->input('certificate') && !empty(app('request')->input('certificate'))){
$default_certificate = app('request')->input('certificate');
}

$url = 'site.home';
if ($page != 'home') {
$cer_show = explode('/', app('request')->path())[2];
$url = 'site.certificate.show';
}

@endphp
<div
    class="row py-3 px-0 px-md-4 position-absolute {{ $page != 'home' ? "bg-primary"  : "sub-header" }} w-100 m-0 flex-wrap-reverse">
    <div class="col-md-9">
        <div class="d-flex {{ $page != 'home' ? "justify-content-center" : null }}">
            <div class="dropdown mt-2 pt-1 px-2">
                <a class="h5 mb-0 dropdown-toggle text-white" href="#" id="navbarCer" data-toggle="dropdown">
                    {{ SelectionByClass::getValues(\App\Models\Certificate::class, 'certificate_code', 'id')[$default_certificate] }}
                </a>
                <div class="dropdown-menu bg-primary border border-white rounded-0 dropdown-menu-language">
                    @foreach (SelectionByClass::getValues(\App\Models\Certificate::class, 'certificate_code', 'id') as
                    $key => $value)
                    @if ($key)
                    @if ($page != 'home')
                    <a class="dropdown-item" href="{{ route($url, $cer_show). '?certificate='.$key }}"> {{$value}}</a>
                    @else
                    <a class="dropdown-item" href="{{ route($url, ['certificate'=>$key]) }}"> {{$value}}</a>
                    @endif
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="swiper-container w-100 mt-2" id="swpSubjects">
                <div class="swiper-wrapper mt-1 pb-3">
                    @foreach ($subjects as $item)
                    @if ($item->certificate_id)
                    <div class="swiper-slide item-slide">
                        <a href="{{ route('site.subject.show', $item->id) }}" class="text-white p-2 text-nowrap mt-1">
                            {{ $item->subject_name }} </a>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="swiper-scrollbar" id="subjectsScrollbar"></div>
            </div>

        </div>
    </div>
    <div class="col-md-3 d-none d-md-block px-0">
        <form class="{{ $page == 'home' ? "ml-auto" : null }} form-inline my-lg-0"
            action="{{ route('site.course.search') }}">
            <div class="search w-100 d-flex px-3 py-1">
                <span class=""><img src="{{asset("images/ic/ic_search.svg")}}" width="26"></span>
                <input name="course" class="ip-search w-100" type="text"
                    placeholder="@lang('keywords.footer.searchForCourses')">
            </div>
        </form>
    </div>
</div>
@push('scripts')

<script type="application/javascript">
    var swpSubjects = new Swiper("#swpSubjects", {
        speed: 500,
        spaceBetween: 20,
        slidesPerView: "auto",
        scrollbar: {
            el: "#subjectsScrollbar",
        },
    });
</script>
@endpush
