<template>
    <div class="container-fluid h-100 d-flex flex-column justify-content-between text-primary">
        <h1 class="mt-3 text-center font-weight-bold">Writing</h1>
        <div class="h5 text-center" v-if="typeExam !== $getConst('exercise')">
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
        <div class="py-4 h-100 row justify-content-center lecture overflow-auto">
            <div class="col-lg-8">
                <div class="h-100">
                    <div v-if="typeExam === $getConst('assessment') && startQuiz===true">
                        <h3 v-cloak>{{ questionWriting[questionIndex].writing_assessment_question.id }}. {{
                                questionWriting[questionIndex].writing_assessment_question.question
                            }}</h3>
                        <p>Choose the most correct answer</p>
                        <div class="mt-5">
                            <input type="number"
                                   :id="'ques' + questionWriting[questionIndex].writing_assessment_question.id"
                                   :value="questionWriting[questionIndex].writing_assessment_question.id"
                                   hidden/>
                            <div v-for="answer in questionWriting[questionIndex].writing_assessment_question.answers"
                                 v-bind:key="answer.id"
                                 class="py-0 my-2 border border-primary rounded answer-selection">
                                <input type="radio"
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

                    <div v-if="typeExam === $getConst('exercise')">
                        <div v-if="resultCheck[questionIndex] === $getConst('incorrect')">
                            <div class="p-3 bg-danger rounded h5 text-white font-weight-bold">
                                Incorrect answer !
                            </div>
                            <h5 v-for="answer_item in questionWriting[questionIndex].writing_assessment_question.answers"
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

                        <h3 v-cloak>{{ questionWriting[questionIndex].writing_assessment_question.id }}. {{
                                questionWriting[questionIndex].writing_assessment_question.question
                            }}</h3>
                        <p>Choose the most correct answer</p>
                        <div class="mt-5">
                            <input type="number"
                                   :id="'ques' + questionWriting[questionIndex].id"
                                   :value="questionWriting[questionIndex].id"
                                   hidden/>
                            <div v-for="answer in questionWriting[questionIndex].writing_assessment_question.answers"
                                 v-bind:key="answer.id"
                                 class="py-0 my-2 border border-primary rounded answer-selection">
                                <input type="radio"
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

                    <div v-if="typeExam === $getConst('quiz') && startQuiz===true">
                        <h3 v-cloak>{{ questionWriting[questionIndex].writing_quiz_question.id }}. {{
                                questionWriting[questionIndex].writing_quiz_question.question
                            }}</h3>
                        <div class="mt-5" v-if="typeExam === $getConst('quiz')">
                            <div class="form-group" :id="questionWriting[questionIndex].id">
                                <ckeditor v-model="editorData" :config="editorConfig"></ckeditor>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-right pb-4 pr-3">
            <button class="btn btn-primary" v-on:click="prev()" v-if="questionIndex > 0">
                Previous
            </button>
            <span v-if="typeExam === $getConst('exercise')">
                <button class="btn btn-primary mx-2" v-on:click="check()"
                        :id="'check' + questionWriting[questionIndex]"
                        v-bind:disabled="resultCheck[questionIndex]">
                    Check
                </button>
                <button class="btn btn-primary mx-2" v-on:click="next()"
                        v-if="questionIndex < questionWriting.length - 1 && resultCheck[questionIndex] ">
                    Next
                </button>
            </span>
            <span v-if="typeExam !== $getConst('exercise')">
                <button class="btn btn-primary mx-2" v-on:click="submit()"
                        v-if="questionIndex === questionWriting.length - 1">
                    Submit
                </button>
                <button class="btn btn-primary mx-2" v-on:click="next()"
                        v-if="questionIndex < questionWriting.length - 1">
                    Next
                </button>
            </span>
        </div>
    </div>
</template>

<script>
import CKEditor from 'ckeditor4-vue'

export default {
    props: {
        typeExam: Number,
        examId: Number
    },
    components: {
        ckeditor: CKEditor.component
    },
    data() {
        return {
            questionWriting: [],
            questionIndex: 0,
            editorData: '',
            editorConfig: {},
            timeNow: '',
            timeEnd: '',
            timeLimitQuiz: 60,
            timeLimitAssessment: 20,
            startQuiz: false,
            userChoose: [],
            allResults: [],
            resultCheck: [],
            set: Number
        };
    },
    mounted() {
        this.getQuestion();
    },
    methods: {
        getQuestion: function (){
            if (this.typeExam === this.$root.$getConst('assessment')) {
                this.getWritingAssessmentQuestions();
            } else if (this.typeExam === this.$root.$getConst('exercise')) {
                this.getWritingExerciseQuestions();
            } else {
                this.getWritingQuizQuestions();
            }
        },
        next: function () {
            if (this.questionIndex < this.questionWriting.length - 1) {
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
            console.log(x);
        },
        getWritingAssessmentQuestions() {
            axios.get(route("site.exam.getWritingAssessmentQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data)
                    this.questionWriting = response.data.questions.question
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        getWritingExerciseQuestions() {
            axios.get(route("site.exam.getWritingExerciseQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data)
                    this.questionWriting = response.data.questions[0].question
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        getWritingQuizQuestions() {
            axios.get(route("site.exam.getWritingQuizQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data)
                    this.questionWriting = response.data.questions[0].question
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        startExam: function () {
            this.startQuiz = true;
            this.timeNow = new Date();
            this.timeEnd = new Date();
            if (this.type === this.$root.$getConst('quiz')) {
                this.timeEnd.setMinutes(this.timeEnd.getMinutes() + this.timeLimitQuiz)
            }
            if (this.type === this.$root.$getConst('assessment')) {
                this.timeEnd.setMinutes(this.timeEnd.getMinutes() + this.timeLimitAssessment)
            }
        },
        check: function () {
            if (undefined) {
                this.resultCheck.push(-1)
            } else {
                for (let i = 0; i < this.questionWriting[this.questionIndex].writing_assessment_question.answers.length; i++) {
                    if (this.questionWriting[this.questionIndex].writing_assessment_question.answers[i].id === this.userChoose[this.questionIndex]) {
                        if (this.questionWriting[this.questionIndex].writing_assessment_question.answers[i].is_correct === 1) {
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
    },
}
</script>

<style scoped>

</style>
