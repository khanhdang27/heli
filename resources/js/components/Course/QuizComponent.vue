<template>
    <div class="border border-primary h-100 d-flex flex-column justify-content-between text-primary">
        <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div>
                        <h1>{{ questions[questionIndex].question }}</h1>
                        <p>Choose the most correct answer</p>
                        <input type="number" :id="'ques'+questions[questionIndex].id"
                               :value="questions[questionIndex].id" hidden>
                        <div v-for="answer in questions[questionIndex].answers" class="room-selection">

                            <input type="radio" :id="answer.id" :value="answer.id" v-model="userChoose" hidden>
                            <label :for="answer.id" class="w-100">
                                <a class="border border-primary rounded btn text-left w-100">
                                    <h5 class="mb-0">{{ answer.answer }}</h5>
                                </a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light text-right border py-2 px-5">
            <button class="btn btn-primary mr-5" v-on:click="userAnswer()">Check answer</button>
            <button class="btn btn-primary" v-on:click="prev()" v-if="questionIndex > 0">Previous</button>
            <button class="btn btn-primary" v-on:click="next()"
                    v-if="userChoose !== ''">Next</button>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        questions: Array,
        userMakeQuiz: Array
    },
    data() {
        return {
            questionIndex: 0,
            questionNo: '',
            userChoose: '',
            makeQuiz: []
        }
    },
    methods: {
        userAnswer: function () {
            this.questionNo = document.getElementById("ques"+ this.questions[this.questionIndex].id).value;
            this.makeQuiz.push({questionID: parseInt(this.questionNo), answerID: this.userChoose});
            this.userMakeQuiz = this.makeQuiz;
            this.$emit('userMakeQuiz', this.userMakeQuiz);
        },
        next: function() {
            if (this.questionIndex < this.questions.length)
                this.questionIndex++;
        },
        prev: function() {
            if (this.questionIndex > 0)
                this.questionIndex--;
        },
    }
}
</script>
