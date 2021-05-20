<?php

use App\Models\Subject;

$subject = new Subject();
?>
<nav class="navbar navbar-expand-xl container-fluid sub-header border-secondary">
    <button class="navbar-toggler btn-collapse" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="{{asset("images/ic/ic-collapse.png")}}" width="40"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <div class="dropdown d-flex align-items-center show">
                    <a class="sub-item dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        IGCSE
                    </a>
                    <div class="dropdown-menu my-dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">IGCSE</a>
                        <a class="dropdown-item" href="#">IELTS</a>
                        <a class="dropdown-item" href="#">UKISET</a>
                        <a class="dropdown-item" href="#">AIL</a>
                    </div>
                </div>
            </li>


            @foreach( $subject->getName() as $value)
                <li class="nav-item">
                    <a class="nav-link sub-item" href="#">{{ $value }}</a>
                </li>
            @endforeach
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="search">
                <span class="ic-cart"><img src="{{asset("images/ic/ic_search.svg")}}" width="26"></span>
                <input class="ip-search" type="text" placeholder="@lang('keywords.footer.searchForCourses')">
            </div>
        </form>
    </div>
</nav>
