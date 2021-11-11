<template>
    <div id="subscribe_newsletter" class="container-fluid subscribe-container py-5 text-center btn-above-video">
        <div class="mt-4 subscribe-title mx-auto text-primary">
            <h1 class="font-weight-bold">
                {{ lang.subscribeUs }}
            </h1>
        </div>
        <div class="ip-subscribe mx-auto my-5">
            <input id="email" v-model="email" class="border-0 w-100 px-5" placeholder="Email" type="email">
        </div>
        <button class="btn-register-now mt-0 py-1" v-on:click="subscribe">
            <span class="font-weight-bold">{{ lang.registerNowToExperience }}</span>
        </button>
    </div>
</template>

<script>
export default {
    props: {
        lang: Object,
    },
    data() {
        return {
            email: ""
        }
    },
    methods: {
        subscribe: function () {
            const data = document.getElementById('email').value;
            axios.post(route('site.customerSubscribe'), {
                email: this.email
            })
                .then((response) => {
                    this.email = "";
                    toastr["success"](this.lang.success);
                })
                .catch((error) => {
                    toastr["error"](this.lang.fail);
                });
        }
    }

}
</script>

<style scoped>

</style>
