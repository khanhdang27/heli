<div id="showMore">
    <div v-if="itemIndex <= reviews.length" v-for="itemIndex in newsToShow">
        <div class="mx-auto box-news">
            <div class="py-2">
                <a id="new_href" class="h2" href="">
                    @{{itemIndex}}.
                    @{{ reviews[itemIndex-1].announcement_date }}
                    @{{ reviews[itemIndex-1].title }}
                </a><br>
            </div>
        </div> 
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="btn-more h5 bg-white text-primary border-primary" @click="newsToShow += 3">
            @lang('keywords.more')
            <img src="{{asset("images/ic/ic_drop.svg")}}" width="28">
        </button>
    </div>
</div>
<span class="d-none" id="news">
    {{$news->toJson()}}
</span>
<script>
    new Vue({
        el: "#showMore",
        data() {
            return {
                reviews: JSON.parse(document.getElementById('news').textContent),
                newsToShow: 7,
                totalComments: 0  
            };
        },
        mounted() {
            this.totalComments = this.reviews.length
        }
    })
</script>
