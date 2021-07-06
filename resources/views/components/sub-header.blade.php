@php
    use \App\Utilities\SelectionByClass;

@endphp

<nav class="navbar navbar-expand-xl container-fluid sub-header border-secondary">
    <button class="navbar-toggler btn-collapse" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="{{asset("images/ic/ic-collapse.png")}}" width="40"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav {{ $page != 'home' ? "mx-auto" : null }} mt-2 mt-lg-0">
            <li class="nav-item active">
                <div class="dropdown d-flex align-items-center show">
                    <form class="form-inline my-1 mr-1" name="" id="certificate_form">
                        <select form="certificate_form" class="form-control" name="certificate"
                                onchange="this.form.submit()">
                            @foreach (SelectionByClass::getValues(\App\Models\Certificate::class, 'certificate_code', 'id') as $key => $value)
                                @if ($key != 1)
                                    <option
                                        value="{{ $key }}" {{ app('request')->input('certificate') == $key ? 'selected="selected"' : null}} >{{ $value }}</option>
                                @endif
                            @endforeach
                        </select>
                    </form>
                </div>
            </li>
            @foreach ($subjects as $item)
                @if ($item->certificate_id != 1)
                    <li class="nav-item active d-flex align-items-center flex-wrap px-3">
                        <a href="{{ route('site.subject.show', $item->id) }}"
                           class="text-secondary nav-link"> {{ $item->subject_name }} </a>
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


