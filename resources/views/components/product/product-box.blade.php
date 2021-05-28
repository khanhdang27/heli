<div class="product-box2">
    <div class="top-product">
        <div class="title-bar">
            <div class="title-product bg-secondary">
                <span>{{ $subject }}</span>
            </div>
        </div>
        <div class="content-product">
            <div class="color-bar">
            </div>
            <div class="body-product-content text-white d-flex flex-column justify-content-between align-items-center">
                <div class="content-top text-wrap w-75">
                    {{$subtitle}}
                </div>
                <div class="content-bot">
                    {{$description}}
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-product2 bg-white">
        <div class="card-name-product d-flex justify-content-between">
            <div class="name-product w-50">
                <div class="w-100">
                    {{$courseName}}
                </div>
                <div class="teacher pt-3">
                    {{$tutor}}
                </div>
            </div>
            <div class="ic-heart">
                <img src={{asset("images/ic/ic_heart.svg")}}>
            </div>
        </div>

        <div class="price-bar2 d-flex justify-content-end pr-3 pb-3">
            <div>HK{{$price}}/節</div>
            <div> ></div>
        </div>
    </div>
</div>
