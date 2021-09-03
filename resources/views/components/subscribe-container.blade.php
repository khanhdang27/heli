@php

@endphp



@php
use Spatie\Newsletter\NewsletterFacade;
@endphp

@if (!Auth::check() || (!NewsletterFacade::isSubscribed(Auth::user()->email)))
<div class="container-fluid subscribe-container py-5 text-center btn-above-video" id="subscribe_newsletter">
    <div class="mt-4 subscribe-title mx-auto text-primary">
        <h1 class="font-weight-bold">
            訂閱我們
            當我們有任何最新優惠及課程
            將會立刻通知您
        </h1>
    </div>
    <form v-on:submit.prevent="onSubmit" ref="formSubscribe" id="formSubscribe" method="post">
        <div class="ip-subscribe mx-auto my-5">
            <input name="email" type="email" class="border-0 w-100 px-5" placeholder="Email" id="email">
        </div>
        <button type="submit" class="btn-register-now mt-0 py-1" id="btn_subscribe">
            <span class="font-weight-bold">@lang('keywords.registerNowToExperience')</span>
        </button>
    </form>
</div>
@endif

<script>
    var subscribe = new Vue({
        el: '#subscribe_newsletter',
        data: {
            return: true
        },
        methods: {
            onSubmit: function (){
                const data = document.getElementById('email').value;
                axios.post("{{route('site.subscribe')}}", data)
                    .then(function (response) {
                        document.getElementById("formSubscribe").reset();
                        toastr["success"]("@lang('keywords.subscribe.success')");
                    })
                    .catch(function (error) {
                        subscriber["error"]("@lang('keywords.toast.fail')");
                    });
            }
        }
    })
</script>