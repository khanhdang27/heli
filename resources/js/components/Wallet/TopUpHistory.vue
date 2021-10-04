<template>
    <div class="mb-5">
        <a class="btn border-primary border-2 h2 text-primary w-100 d-flex justify-content-between
                        align-items-center px-4 font-weight-bold rounded-0" data-toggle="collapse"
           href="#topUpHistory" role="button" aria-expanded="false" aria-controls="topUpHistory">
            <span>{{ lang.topUpHistory }}</span>
            <span class="fe fe-chevron-right"></span>
        </a>
        <div class="collapse" id="topUpHistory">
            <h2 class="mt-5 mb-4">{{ lang.hereYouCanReviewAllTopUp }}</h2>
            <div class="table-responsive">
                <table class="table text-primary border-bottom mb-0">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Time</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Tokens</th>
                        <th scope="col">Visa card</th>
                        <th scope="col">Top-up ID</th>
                        <th scope="col">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="post in posts">
                        <td v-cloak>{{ post.created_at | formatDate}}</td>
                        <td v-cloak>{{ post.amount * 10 }}</td>
                        <td v-cloak>{{ post.amount }}</td>
                        <td v-cloak>**** **** **** {{ (post.meta['card']) !== null ? post.meta['card'] : '' }}</td>
                        <td v-cloak>{{ post.uuid }}</td>
                        <td v-cloak><a class="btn btn-primary" :href="'wallet/top-up-history/'+ post.id">
                            View
                        </a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div v-if="!isFinished" class="d-flex justify-content-center mt-5">
                <button class="btn-more h5 bg-white text-primary border-primary" @click='getPosts()' v-cloak>
                    {{ lang.viewAllHistory }}
                    <span class="fe fe-chevron-down"></span>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    filters: {
        formatDate: function (value){
            if (value){
                return moment(String(value)).format('DD-MM-YYYY hh:mm')
            }
        }
    },
    props: {
        lang: Object,
        route: String
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
            axios.get(this.route, {
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
                        this.buttonText = "No more records avaiable.";
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

