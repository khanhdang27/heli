<template>
    <div>
        <h2 class="font-weight-bold mb-4">{{ lang.topUpValue }}</h2>
        <div class="d-flex flex-wrap mb-5 room-selection">
            <div v-for="value in values">
                <input v-bind:id="value" type="radio" v-bind:value="value" v-model="choose">
                <label class="btn btn-light p-0 border border-primary text-primary font-weight-bold h5
                                    py-3 btn-topUp-value" v-bind:for="value">{{ value }}HK$</label>
            </div>
        </div>
        <div class="border-2 border-primary rounded py-2 px-5 mb-5">
            <p>{{ lang.amount }}</p>
            <input type="number" name="value"
                   class="w-100 h1 border-0 text-primary input-login-item"
                   v-model.number="choose" autocomplete="off" min="10">
        </div>
        <h2 class="font-weight-bold mb-4">{{ lang.exchangeValue }}</h2>
        <div class="border-2 border-primary rounded py-2 px-5 mb-3 d-flex justify-content-between
                                align-items-center">
            <div>
                <p>{{ lang.amountToExchange }}</p>
                <h2 class="font-weight-bold">{{ choose }}HK$</h2>
            </div>
            <div>
                <button class="border border-primary btn btn-light btn-topUp-value font-weight-bold
                                            py-3 h5 text-primary mb-0">
                    HK$
                </button>
            </div>
        </div>
        <div class="border-2 border-primary rounded py-2 px-5 mb-5 d-flex justify-content-between
                                align-items-center">
            <div>
                <p>{{ lang.tokensReceived }}</p>
                <h2 class="font-weight-bold">{{ choose * transfer }}</h2>
            </div>
            <div>
                <button class="border border-primary btn btn-light btn-topUp-value font-weight-bold
                                            py-3 h5 mb-0 text-primary">
                    TOKEN
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        lang: Object,
        transfer: Number,
    },
    data() {
        return {
            values: [
                10, 50, 100, 200, 500, 1000
            ],
            'choose': 0,
        }
    },
    watch: {
        choose: function (value){
            return this.$root.chooseValue = value;
        }
    }
}
</script>
