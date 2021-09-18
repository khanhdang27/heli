<div class="container-fluid container-home">
    <!-- Nav pills -->
    <ul id="home-tab" class="nav nav-pills menu-category align-items-end" role="tablist">
        <li class="nav-item pr-5">
            <a class="nav-link active category-link menu-img rounded-0" data-toggle="pill" href="#menu1">
                IGCSE
            </a>
        </li>
        <li class="nav-item pr-5">
            <a class="nav-link category-link menu-img rounded-0" data-toggle="pill" href="#menu2">
                UKISET
            </a>
        </li>
        <li class="nav-item pr-5">
            <a class="nav-link category-link menu-img rounded-0" data-toggle="pill" href="#menu3">
                IELTS
            </a>
        </li>

        <li class="nav-item pr-5">
            <a class="nav-link category-link menu-img rounded-0" data-toggle="pill" href="#menu4">
                IAL
            </a>
        </li>
    </ul>
    <ul class="nav nav-pills menu-category-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link active category-link-text h5" data-toggle="pill" href="#menu1">
                IGCSE
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link-text h5" data-toggle="pill" href="#menu2">
                UKISET
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link-text h5" data-toggle="pill" href="#menu3">
                IELTS
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link category-link-text h5" data-toggle="pill" href="#menu4">
                IAL
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <h2 class="text-primary font-weight-bold mt-5 mb-3" id="tab-title">
        @lang('keywords.hotCourseSeries')
    </h2>
</div>
<div class="container-fluid">
    <div class="tab-content">
        <div id="menu1" class="tab-pane active">
            <x-product.course-list-hot :courses=$courseIGCSE typeOfUI="hot" tab="IGCSE"></x-product.course-list-hot>
        </div>
        <div id="menu2" class="tab-pane">
            <x-product.course-list-hot :courses=$courseUKISET typeOfUI="hot" tab="UKISET"></x-product.course-list-hot>
        </div>
        <div id="menu3" class="tab-pane">
            <x-product.course-list-hot :courses=$courseIELTS typeOfUI="hot" tab="IELTS"></x-product.course-list-hot>
        </div>
        <div id="menu4" class="tab-pane">
            <x-product.course-list-hot :courses=$courseIAL typeOfUI="hot" tab="IAL"></x-product.course-list-hot>
        </div>
    </div>
</div>