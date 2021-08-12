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
            <span class="font-weight-bold">立即註冊體驗</span>
        </button>
    </form>
</div>
<script>
    var subscribe = new Vue({
        el: '#subscribe_newsletter',
        data: {
            return: true
        },
        methods: {
            onSubmit: function (){
                const data = document.getElementById('email').value;
                console.log(data);
                axios.post("{{route('site.subscribe')}}", data)
                    .then(function (response) {
                        console.info(response);
                        document.getElementById("formSubscribe").reset();
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            }
        }
    })
</script>