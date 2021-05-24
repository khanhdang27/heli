@php
    use \App\Utilities\SelectionByClass;
@endphp

<nav class="navbar navbar-expand-xl container-fluid category border-secondary">
    <button class="navbar-toggler p-0 btn-collapse" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="images/ic/ic-collapse.png" width="35"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <div class="dropdown d-flex align-items-center show">
                    <a class="sub-item text-secondary dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        AIL
                    </a>
                    <div class="dropdown-menu my-dropdown-menu">
                        @foreach(SelectionByClass::getValues(\App\Models\Certificate::class,'certificate_name', 'id') as $key => $value)
                        <a class="dropdown-item" href="#">IGCSE</a>
                        @endforeach
                    </div>
                </div>
            </li>
            @foreach(SelectionByClass::getValues(\App\Models\Subject::class,'subject_name', 'id') as $key => $value)
                <li class="nav-item">
                    <a class="nav-link sub-item text-secondary" href="{{ URL::route('site.subject.show',$key, true)}}">{{ $value}}</a>
                </li>
            @endforeach
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="search mr-3">
                <span class="ic-cart"><img src={{asset("images/ic/ic_search.svg")}} width="26"></span>
                <input class="ip-search" type="text" placeholder="@lang('keywords.footer.searchForCourses')">
            </div>
        </form>
    </div>
</nav>
