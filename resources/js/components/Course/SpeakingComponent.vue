<template>
    <div class="container-fluid h-100 d-flex flex-column justify-content-between text-primary">
        <div>
            <h1 class="mt-3 text-center font-weight-bold">Speaking</h1>
        </div>
        <div class="py-4 row h-100 justify-content-center lecture overflow-auto">
            <div class="col-lg-8">
                <div class="h-100">
                    <div>
                        <div v-if="type==='assessment'"
                             class="border border-primary rounded p-3 mb-3 h4 text-center">
                            Audio: <i class="fe fe-play-circle"></i>
                        </div>
                        <h3 v-cloak>{{ questionWriting[questionIndex].id }}. {{
                                questionWriting[questionIndex].question
                            }}</h3>
                        <p>Listen and choose the most correct answer</p>
                    </div>
                    <div>
                        <input type="number"
                               :id="'ques' + questionWriting[questionIndex].id"
                               :value="questionWriting[questionIndex].id"
                               hidden/>
                        <div v-for="answer in questionWriting[questionIndex].answers"
                             v-bind:key="answer.id"
                             class="py-0 my-2 border border-primary rounded answer-selection">
                            <input type="radio"
                                   :id="answer.id"
                                   :value="answer.id"
                                   hidden/>
                            <label :for="answer.id" class="w-100">
                                <a class="btn text-left w-100">
                                    <h5 class="mb-0">{{ answer.answer }}</h5>
                                </a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right py-4 pr-3">
            <button class="btn btn-primary" v-on:click="prev()">
                Previous
            </button>
            <span>
                <button class="btn btn-primary">
                  Submit
                </button>
                <button class="btn btn-primary" v-on:click="next()">Next</button>
            </span>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        questionWriting: Array
    },
    data() {
        return {
            questionIndex: 0,
            type: "quiz"
        };
    },
    methods: {
        next: function () {
            if (this.questionIndex < this.questionWriting.length - 1) {
                this.questionIndex++;
            }
        },
        prev: function () {
            if (this.questionIndex > 0) this.questionIndex--;
        },
    }
}
</script>

<style scoped>

</style>
