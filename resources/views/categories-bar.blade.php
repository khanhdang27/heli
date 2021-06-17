@php
use App\Utilities\SelectionByClass;
@endphp

<nav class="navbar navbar-expand-lg container-fluid category text-secondary position-absolute border-secondary">
    <button class="navbar-toggler p-0 btn-collapse" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
        aria-label="Toggle navigation">
        <span><img src="images/ic/ic-collapse.png" width="35"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <form class="form-inline my-1 mr-auto" id="certificate_form">
            <select form="certificate_form" class="form-control" name="certificate" onchange="this.form.submit()">
                @foreach (SelectionByClass::getValues(\App\Models\Certificate::class, 'certificate_code', 'id') as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </form>
        <div class="d-flex align-items-center flex-wrap" id="subject-nav">
            <ul class="navbar-nav">
                <li class="nav-item">

                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <div class="search mr-1">
                <span class="ic-cart"><img src={{ asset('images/ic/ic_search.svg') }} width="26"></span>
                <input class="ip-search" type="text" name="course"
                    placeholder="@lang('keywords.footer.searchForCourses')">
            </div>
        </form>
    </div>
</nav>
