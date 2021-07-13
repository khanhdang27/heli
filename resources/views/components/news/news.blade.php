<div id="showMore">
    <div v-if="newsItem <= reviews.length" v-for="newsItem in newsToShow">
        <div class="mx-auto box-news">
            <a id="new_href" class="h2" href="">
                @{{reviews[newsItem - 1].announcement_date}}
                @{{reviews[newsItem - 1].title}}
            </a><br>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5"
         v-if="newsToShow < reviews.length || reviews.length > newsToShow">
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
