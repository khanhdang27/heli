@php
    use \App\Utilities\SelectionByClass;


    $default_certificate = 2;
    if (app('request')->input('certificate') != 1 && !empty(app('request')->input('certificate'))){
        $default_certificate = app('request')->input('certificate');
    }

   $url = 'site.home';
   if ($page != 'home') {
        $cer_show = explode('/', app('request')->path())[2];
        $url = 'site.certificate.show';
   }

@endphp
<nav class="navbar navbar-expand-xl container-fluid py-3 px-5 position-absolute {{ $page != 'home' ? "bg-primary" : "sub-header" }}">
    <button class="navbar-toggler btn-collapse" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="{{asset("images/ic/ic-collapse.png")}}" width="40"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav {{ $page != 'home' ? "mx-auto" : null }} mt-2 mt-lg-0">
            <li class="nav-item dropdown">

                <a class="h5 mb-0 nav-link dropdown-toggle text-white" href="#" id="navbarCer" data-toggle="dropdown" >
                    {{ SelectionByClass::getValues(\App\Models\Certificate::class, 'certificate_code', 'id')[$default_certificate] }}
                </a>

                <div class="dropdown-menu bg-primary border border-white rounded-0 dropdown-menu-language">
                    @foreach (SelectionByClass::getValues(\App\Models\Certificate::class, 'certificate_code', 'id') as $key => $value)
                        @if ($key != 1)
                            @if ($page != 'home')
                            <a class="dropdown-item" href="{{ route($url, $cer_show). '?certificate='.$key }}"> {{$value}}</a>
                            @else
                            <a class="dropdown-item" href="{{ route($url, ['certificate'=>$key]) }}"> {{$value}}</a>
                            @endif
                        @endif
                    @endforeach
                </div>
            </li>
            @foreach ($subjects as $item)
                @if ($item->certificate_id != 1)
                    <li class="nav-item active d-flex align-items-center flex-wrap px-3">
                        <a href="{{ route('site.subject.show', $item->id) }}"
                           class="text-white nav-link"> {{ $item->subject_name }} </a>
                    </li>
                @endif
            @endforeach
        </ul>
        <form class="{{ $page == 'home' ? "ml-auto" : null }} form-inline my-2 my-lg-0"
              action="{{ route('site.course.search') }}">
            <div class="search">
                <span class="ic-cart"><img src="{{asset("images/ic/ic_search.svg")}}" width="26"></span>
                <input name="course" class="ip-search" type="text"
                       placeholder="@lang('keywords.footer.searchForCourses')">
            </div>
        </form>
    </div>
</nav>


