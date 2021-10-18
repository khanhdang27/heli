<template>
    <div id="showMore">
        <!-- Post -->
        <div class="mx-auto box-news">
            <div class="post" v-for='post in posts' v-bind:key="post.id">
                <div class="py-2">
                    <a id="new_href" class="h2 text-center" :href="'news/'+post.id">
                        <span v-cloak>{{ post.announcement_date }} </span>
                        <span v-cloak>{{ post.title }}</span>
                    </a><br>
                </div>
            </div>
        </div>

        <div v-if="!isFinished" class="d-flex justify-content-center mt-5">
            <button class="btn-more btn h4 bg-white text-primary border-primary" @click='getNews()' v-cloak>
                {{lang.more}} <span class="fe fe-chevron-down"></span>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    filters: {
        formatDate: function (value){
            if (value){
                return moment(String(value)).format('YYYY/MM/DD')
            }
        }
    },
    props: {
        lang: Object,
    },
    data() {
        return {
            isFinished: false,
            page: 0,
            buttonText: 'Load More',
            posts: []
        }
    },
    methods: {
        getNews: function () {
            axios.get(route("site.news.list"), {
                params: {
                    page: this.page + 1,
                }
            })
                .then((response) => {
                    if (response.data) {
                        let len = this.posts.length;
                        this.page += 1;
                        if (len > 0) {
                            this.buttonText = "Loading ...";
                            setTimeout(() => {
                                this.buttonText = "Load More";
                                // Loop on data and push in posts
                                for (let i = 0; i < response.data.data.length; i++) {
                                    this.posts.push(response.data.data[i]);
                                }
                            }, 500);
                        } else {
                            this.posts = response.data.data;
                        }
                        if (!response.data.next_page_url) {
                            this.isFinished = true;
                        }
                    } else {
                        this.buttonText = "No more records available.";
                        this.isFinished = true;
                    }
                });
        }
    },
    created: function () {
        this.getNews();
    }
}
</script>

<style scoped>

</style>
