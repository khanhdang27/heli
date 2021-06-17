@php
    use \App\Utilities\SelectionByClass;
@endphp

<nav class="navbar navbar-expand-lg container-fluid category text-secondary position-absolute border-secondary">
    <button class="navbar-toggler p-0 btn-collapse" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="images/ic/ic-collapse.png" width="35"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="ml-3 navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="dropdown text-secondary dropdown-toggle" href="#" role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    AIL
                </a>
                <div class="dropdown-menu my-dropdown-menu bg-dark border border-secondary">
                    @foreach(SelectionByClass::getValues(\App\Models\Certificate::class,'certificate_code', 'id') as $key => $value)
                        <a class="btn dropdown-item certificate-nav-item"
                            href="{{ route('site.get_subject_by_parent', $key) }}" role="button">
                            {{$value}}
                        </a>
                    @endforeach
                </div>
            </li>
            <div class="d-flex align-items-center flex-wrap" id="subject-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="search mr-1">
                <span class="ic-cart"><img src={{asset("images/ic/ic_search.svg")}} width="26"></span>
                <input class="ip-search" type="text" name="course" placeholder="@lang('keywords.footer.searchForCourses')">
            </div>
        </form>
    </div>
</nav>
