<template>
    <div class="container-fluid h-100 d-flex flex-column justify-content-between text-primary">
        <h1 class="mt-3">Writing</h1>
        <div class="py-4 h-100 row justify-content-center lecture overflow-auto">
            <div class="col-lg-8">
                <div class="h-100">
                    <div class="h-25">
                        <h1 v-cloak>{{ questionWriting[questionIndex].question }}</h1>
                        <p>Choose the most correct answer</p>
                    </div>
                    <div class="h-75">
                        <div class="mt-5" v-if="type === 'quiz'">
                            <div class="form-group" :id="questionWriting[questionIndex].id">
                                <label for="user_answer">Your answer</label>
                                <textarea rows="8" class="form-control" id="user_answer"></textarea>
                            </div>
                        </div>
                        <div v-else>
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
        </div>
        <div class="text-right pb-4 pr-3">
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
            type: "normal"
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
