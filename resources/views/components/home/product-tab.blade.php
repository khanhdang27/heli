<div class="container-fluid container-home">
    <!-- Nav pills -->
    <ul class="nav nav-pills menu-category align-items-end" role="tablist">
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
    <h2 class="text-primary text-primary" id="tab-title">
        @lang('keywords.hotCourseSeries')
    </h2>
    <div class="tab-content">
        <div id="menu1" class="tab-pane active">
            <x-product.course-list-hot :courses=$courseIGCSE typeOfUI="hot"></x-product.course-list-hot>
        </div>
        <div id="menu2" class="tab-pane fade">
            <x-product.course-list-hot :courses=$courseUKISET typeOfUI="hot"></x-product.course-list-hot>
        </div>
        <div id="menu3" class="tab-pane fade">
            <x-product.course-list-hot :courses=$courseIELTS typeOfUI="hot"></x-product.course-list-hot>
        </div>
        <div id="menu4" class="tab-pane fade">
            <x-product.course-list-hot :courses=$courseIAL typeOfUI="hot"></x-product.course-list-hot>
        </div>
    </div>
</div>
