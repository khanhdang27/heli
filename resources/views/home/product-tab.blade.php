<div class="container-fluid">
    <!-- Nav pills -->
    <ul class="nav nav-pills menu-category" role="tablist">
        <li class="nav-item">
            <a class="nav-link active category-link" data-toggle="pill" href="#home">
                <img class="menu-img" src="{{asset("images/IGCSE_cover.jpg")}}">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link" data-toggle="pill" href="#menu1">
                <img class="menu-img" src="{{asset("images/Group173.jpg")}}">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link" data-toggle="pill" href="#menu2">
                <img class="menu-img" src="{{asset("images/Group174.jpg")}}">
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link category-link" data-toggle="pill" href="#menu3">
                <img class="menu-img" id="menu-img4" src="{{asset("images/Group175.jpg")}}">
            </a>
        </li>
    </ul>
    <ul class="nav nav-pills menu-category-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link active category-link-text" data-toggle="pill" href="#home">
                IGCSE
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu1">
                UKISET
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu2">
                IELTS
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link category-link-text" data-toggle="pill" href="#menu3">
                IAL
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <h1 class="text-primary text-primary" id="tab-title">
        @lang('keywords.hotCourseSeries')
    </h1>
    <div class="tab-content">
        <div id="home" class="container-fluid tab-pane active">
            Tab 1
            {{--                <x-product.course-list></x-product.course-list>--}}
        </div>
        <div id="menu1" class="container-fluid tab-pane fade">
            Tab 2
            {{--                <x-product.course-list></x-product.course-list>--}}
        </div>
        <div id="menu2" class="container-fluid tab-pane fade">
            Tab 3
            {{--                <x-product.course-list></x-product.course-list>--}}
        </div>
        <div id="menu3" class="container-fluid tab-pane fade">
            Tab 4
            {{--                <x-product.course-list></x-product.course-list>--}}
        </div>
    </div>
</div>
