<div class="container-fluid container-course">
    <!-- Nav pills -->
    <ul class="nav nav-pills menu-category" role="tablist">
        <li class="nav-item px-5">
            <a class="nav-link active category-link" data-toggle="pill" href="#menu1">
                <img class="menu-img" src="{{asset('images/IGCSE_cover.jpg')}}">
            </a>
        </li>
        <li class="nav-item px-5">
            <a class="nav-link category-link" data-toggle="pill" href="#menu2">
                <img class="menu-img" src="{{asset('images/Group173.jpg')}}">
            </a>
        </li>
        <li class="nav-item px-5">
            <a class="nav-link category-link" data-toggle="pill" href="#menu3">
                <img class="menu-img" src="{{asset('images/Group174.jpg')}}">
            </a>
        </li>

        <li class="nav-item px-5">
            <a class="nav-link category-link" data-toggle="pill" href="#menu4">
                <img class="menu-img" src="{{asset('images/Group175.jpg')}}">
            </a>
        </li>
    </ul>
    <ul class="nav nav-pills menu-category-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link active category-link-text" data-toggle="pill" href="#menu1">
                IGCSE
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu2">
                UKISET
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu3">
                IELTS
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu4">
                IAL
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <h2 class="text-primary text-primary" id="tab-title">
        @lang('keywords.hotCourseSeries')
    </h2>
    <div class="tab-content">
        <div id="menu1" class="tab-pane active">
            <x-product.course-list :courses=$courseIGCSE typeOfUI="hot"></x-product.course-list>
        </div>
        <div id="menu2" class="tab-pane fade">
            <x-product.course-list :courses=$courseUKISET typeOfUI="hot"></x-product.course-list>
        </div>
        <div id="menu3" class="tab-pane fade">
            <x-product.course-list :courses=$courseIELTS typeOfUI="hot"></x-product.course-list>
        </div>
        <div id="menu4" class="tab-pane fade">
            <x-product.course-list :courses=$courseIAL typeOfUI="hot"></x-product.course-list>
        </div>
    </div>
</div>
