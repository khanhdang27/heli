<div id="showMore">
    <div v-for="newsItem in reviews">
        <div class="w-75 mx-auto">
            <a id="new_href" class="h2" href="">
                @{{newsItem.announcement_date}}
                @{{newsItem.title}}
            </a><br>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5"
         v-if="newsToShow <= reviews.length || reviews.length > newsToShow">
        <button class="btn-more h5 bg-white text-primary border-primary" @click="newsToShow += 3">
            @lang('keywords.more')
            <img src="{{asset("images/ic/ic_drop.svg")}}" width="28">
        </button>
    </div>
</div>
<input type="hidden" value="{{json_encode($news)}}" id="news">
<script>
    new Vue({
        el: "#showMore",
        data() {
            return {
                reviews:
                    JSON.parse(document.getElementById('news').value)
                ,
                newsToShow: 8,
                totalComments: 0
            };
        },
        mounted() {
            console.log(this.reviews)
            this.totalComments = this.reviews.length
            console.log(this.reviews.length)
        }
    })
</script>
