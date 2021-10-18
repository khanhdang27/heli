<template>
    <div>
        <div class="row">
            <!--Component Latest Blog List-->
            <div class="col-xl-4 col-lg-6 pt-4 blog-item-latest-display" v-for='post in posts' v-bind:key="post.id">
                <div class="mt-2 popular-item shadow animate-up" id="latest">
                    <div class="thumb-article d-flex flex-column justify-content-end position-relative">
                        <img v-if="post.photo"
                            class="main-photo img-thumbnail border-0 p-0 rounded-0"
                            :src="'/file/'+post.photo.id">
                        <img v-else class="main-photo img-thumbnail border-0 p-0 rounded-0"
                             :src="'../images/default-image.jpg'">
                        <div
                            class="container-fluid pt-2 info-article d-flex flex-column justify-content-between position-absolute">
                            <a :href="'view-blog/'+post.id"
                               class="h4 font-weight-bold title-article">
                                <span v-cloak>{{ post.title }}</span>
                            </a>
                            <div>
                                <div class="d-flex align-items-center text-white mb-2">
                                    <p class="h5 mr-5 mb-0">
                                        <span v-cloak>{{ post.created_at | formatDate }}</span>
                                    </p>
                                    <p class="fe fe-eye font-weight-bold mb-0 mr-2"></p>
                                    <h5 class="mb-0">
                                        <span v-cloak>{{ post.view_no }}</span>
                                    </h5>
                                </div>
                                <div class="d-flex flex-wrap pb-3">
                                    <div v-for='tag in post.tags'>
                                        <button class="btn-hashtag-small">
                                            <span v-cloak>{{ tag.tag_name }}</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="!isFinished" class="d-flex pt-5 mt-5 pb-5 justify-content-center">
            <button class="btn-more btn h4 mb-0 bg-white text-primary border-primary" @click='getPosts()' v-cloak>
                {{ lang.more }} <span class="fe fe-chevron-down"></span>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    filters: {
        formatDate: function (value) {
            if (value) {
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
        getPosts: function () {
            axios.get(route("site.blog.list"), {
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
        this.getPosts();
    }
}
</script>

