<template>
    <div class="text-primary">
        <h1 class="mt-4 text-center font-weight-bold">Reading</h1>
        <div v-if="allResults.length === 0">
            <div class="text-center h4 my-3" v-if="type !== $getConst('exercise')">
                <vue-countdown-timer v-if="startQuiz === true"
                                     @start_callback="startCallBack('event started')"
                                     @end_callback="endCallBack('event ended')"
                                     :start-time="timeNow"
                                     :end-time="timeEnd"
                                     :interval="1000"
                                     :start-label="'Until start:'"
                                     :end-label="'Time limit'"
                                     label-position="begin"
                                     :end-text="'Ended!'"
                                     :day-txt="'days'"
                                     :hour-txt="'hours'"
                                     :minutes-txt="'minutes'"
                                     :seconds-txt="'seconds'">
                    <template slot="start-label" slot-scope="scope">
                        <i class="fe fe-clock"></i>
                        <span
                            v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'begin'">
                        {{ scope.props.startLabel }}:</span>
                        <span
                            v-if="scope.props.endLabel !== ''
                          && !scope.props.tips && scope.props.labelPosition === 'begin'">
                        {{ scope.props.endLabel }}:</span>
                    </template>
                    <template slot="countdown" slot-scope="scope">
                        <span>{{ scope.props.days }} </span><a>:</a>
                        <span>{{ scope.props.hours }} </span><a>:</a>
                        <span>{{ scope.props.minutes }} </span><a>:</a>
                        <span>{{ scope.props.seconds }} </span><a></a>
                    </template>
                </vue-countdown-timer>
                <div v-if="startQuiz === false">
                    <button class="btn btn-success mt-3" v-on:click="startExam()">Start</button>
                </div>
            </div>
            <div class="row container-fluid">
                <div class="col-lg-6 py-4">
                    <div class="px-3 lecture overflow-auto" v-if="startQuiz===true">
                        {{ passage }}
                    </div>
                </div>
                <div class="col-lg-6 py-4">
                    <div class="h-100 d-flex flex-column justify-content-between lecture overflow-auto">
                        <div class="h-100">
                            <div v-if="type !== $getConst('exercise') && startQuiz===true">
                                <h3 v-cloak>{{ questionReading[questionIndex].reading_question.id }}. {{
                                        questionReading[questionIndex].reading_question.question
                                    }}</h3>
                                <p>Choose the most correct answer</p>

                                <div class="mt-5">
                                    <input type="number"
                                           :id="'ques' + questionReading[questionIndex].reading_question.id"
                                           :value="questionReading[questionIndex].reading_question.id"
                                           hidden/>
                                    <div v-for="answer in questionReading[questionIndex].reading_question.answers"
                                         v-bind:key="answer.id"
                                         class="py-0 my-2 border border-primary rounded answer-selection">
                                        <input class="ip-answer" type="radio"
                                               :id="answer.id"
                                               :value="answer.id"
                                               v-model="userChoose[questionIndex]"
                                               v-bind:disabled="resultCheck[questionIndex]"
                                               hidden/>
                                        <label :for="answer.id" class="w-100">
                                            <a class="btn text-left w-100">
                                                <h5 class="mb-0">{{ answer.answer }}</h5>
                                            </a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div v-if="type === $getConst('exercise')">
                                <div v-if="resultCheck[questionIndex] === $getConst('incorrect')">
                                    <div class="p-3 bg-danger rounded h5 text-white font-weight-bold">
                                        Incorrect answer !
                                    </div>
                                    <h5 v-for="answer_item in questionReading[questionIndex].answers"
                                        v-bind:key="answer_item.id"
                                        class="text-success">
                                    <span v-if="answer_item.is_correct === $getConst('correct') ">
                                        Correct answer is: {{ answer_item.answer }}
                                    </span></h5>
                                </div>

                                <div class="p-3 bg-success rounded h5 text-white font-weight-bold"
                                     v-if="resultCheck[questionIndex] === $getConst('correct')">
                                    Good job !
                                </div>

                                <h3 v-cloak>{{ questionReading[questionIndex].reading_question.id }}. {{
                                        questionReading[questionIndex].reading_question.question
                                    }}</h3>
                                <p>Choose the most correct answer</p>

                                <div class="mt-5">
                                    <input type="number"
                                           :id="'ques' + questionReading[questionIndex].id"
                                           :value="questionReading[questionIndex].reading_question.id"
                                           hidden/>
                                    <div v-for="answer in questionReading[questionIndex].reading_question.answers"
                                         v-bind:key="answer.id"
                                         class="py-0 my-2 border border-primary rounded answer-selection">
                                        <input class="ip-answer" type="radio"
                                               :id="answer.id"
                                               :value="answer.id"
                                               v-model="userChoose[questionIndex]"
                                               v-bind:disabled="resultCheck[questionIndex]"
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
                        <div class="text-right">
                            <button class="btn btn-primary" v-on:click="prev()"
                                    v-if="questionIndex > 0 && resultCheck[questionIndex] ">
                                Previous
                            </button>
                            <span v-if="type === $getConst('exercise')">
                                <button class="btn btn-primary mx-2" v-on:click="check()"
                                        :id="'check' + questionReading[questionIndex]"
                                        v-bind:disabled="resultCheck[questionIndex]">
                                    Check
                                </button>
                                <button class="btn btn-primary mx-2" v-on:click="next()"
                                        v-if="questionIndex < questionReading.length - 1 && resultCheck[questionIndex] ">
                                    Next
                                </button>
                            </span>
                            <span v-if="type !== $getConst('exercise')">
                                <button class="btn btn-primary mx-2" v-on:click="submit()"
                                        v-if="questionIndex === questionReading.length - 1">
                                    Submit
                                </button>
                                <button class="btn btn-primary mx-2" v-on:click="next()"
                                        v-if="questionIndex < questionReading.length - 1">
                                    Next
                                </button>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div v-else class="mt-5 h-100">
            <div class="text-center">
                <h2 class="text-success">You score {{ allResults[0].score }}</h2>
                <div>
                    <i class="fe fe-check-circle h4 text-success"></i>
                    <span class="h4" v-if="type===$getConst('quiz')">Number of correct question {{
                            allResults[0].correct_question
                        }}</span>
                    <span class="h4" v-if="type===$getConst('assessment')">Number of wrong question {{
                            allResults[1].correct_question
                        }}</span>
                </div>
                <div>
                    <i class="fe fe-x-circle h4 text-danger"></i>
                    <span class="h4" v-if="type=== $getConst('quiz')">Number of wrong question {{
                            allResults[0].wrong_question
                        }}</span>
                    <span class="h4" v-if="type=== $getConst('assessment')">Number of wrong question {{
                            allResults[1].wrong_question
                        }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
const results = [
    {type: 'quiz', score: 5.5, correct_question: 8, wrong_question: 5},
    {type: 'assessment', score: 6, correct_question: 10, wrong_question: 3},
]

export default {
    props: {
        typeExam: Number,
        examId: Number
    },
    data() {
        return {
            questionReading: [],
            questionIndex: 0,
            questionNo: '',
            userChoose: [],
            type: Number,
            passage: '',
            allResults: [],
            resultCheck: [],
            startQuiz: false,
            timeNow: '',
            timeEnd: '',
            timeLimitQuiz: 60,
            timeLimitAssessment: 2
        };
    },
    methods: {
        check: function () {
            if (undefined) {
                this.resultCheck.push(-1)
            } else {
                for (let i = 0; i < this.questionReading[this.questionIndex].answers.length; i++) {
                    if (this.questionReading[this.questionIndex].answers[i].id === this.userChoose[this.questionIndex]) {
                        if (this.questionReading[this.questionIndex].answers[i].is_correct === 1) {
                            return this.resultCheck.push(1)
                        }
                        return this.resultCheck.push(-1)
                    }
                }
            }
            console.log(this.resultCheck)
        },
        submit: function () {
            console.log('tra loi ne', this.userChoose)
        },
        userAnswer: function () {
            this.questionNo = document.getElementById(
                "ques" + this.questions[this.questionIndex].id
            ).value;
            this.userAnswerQuiz({
                questionID: parseInt(this.questionNo),
                answerID: this.userChoose[this.questionIndex],
            });
        },
        userAnswerQuiz: function (value) {
            if (this.resultCheck.length === 0) {
                this.resultCheck.push(value);
            } else {
                if (
                    this.resultCheck.some((item) => {
                        return value.questionID === item.questionID;
                    })
                ) {
                    this.resultCheck.map((item) => {
                        if (value.questionID === item.questionID) {
                            return (item.answerID = value.answerID);
                        }
                    });
                } else {
                    this.resultCheck.push(value);
                }
            }
            // localStorage.setItem("reading", JSON.stringify(this.resultCheck));
        },
        next: function () {
            if (this.questionIndex < this.questionReading.length - 1) {
                this.questionIndex++;
            }
        },
        prev: function () {
            if (this.questionIndex > 0) this.questionIndex--;
        },
        startCallBack: function (x) {
            console.log(x);
        },
        endCallBack: function (x) {
            // this.allResults = results;
        },
        getReadingAssessmentQuestions() {
            axios.get(route("site.exam.getReadingAssessmentQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data)
                    this.passage=response.data.passage.content
                    this.questionReading= response.data.questions
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        startExam: function () {
            if (this.typeExam === 1){
                this.type = this.$root.$getConst('assessment')
            }else if (this.typeExam === 2){
                this.type = this.$root.$getConst('exercise')
            }else {
                this.type = this.$root.$getConst('quiz')
            }
            this.getReadingAssessmentQuestions();
            this.startQuiz = true;
            this.timeNow = new Date();
            this.timeEnd = new Date();
            if (this.type === this.$root.$getConst('quiz')) {
                this.timeEnd.setMinutes(this.timeEnd.getMinutes() + this.timeLimitQuiz)
            }
            if (this.type === this.$root.$getConst('assessment')) {
                this.timeEnd.setMinutes(this.timeEnd.getMinutes() + this.timeLimitAssessment)
            }
        }
    },
    mounted() {

    }
}
</script>

<style scoped>

</style>
