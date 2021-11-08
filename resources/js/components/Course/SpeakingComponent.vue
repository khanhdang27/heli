<template>
    <div class="container-fluid h-100 d-flex flex-column justify-content-between text-primary">
        <h1 class="mt-4 text-center font-weight-bold">Speaking</h1>
        <div class="py-4 row h-100 justify-content-center lecture overflow-auto">
            <div class="col-lg-8">
                <div class="h-100" v-if="questionSpeaking[questionIndex]">
                    <div v-if="typeExam === $getConst('assessment')">
                        <div class="border shadow-sm bg-white rounded p-3 mb-3 h4 text-center">
                            Audio {{questionSpeaking[questionIndex].id}}:
                            <vimeo-player
                                :player-height="55"
                                ref="audio"
                                :video-id="'601557402'"
                            />
                            <h5>Audio can played once only</h5>
                        </div>
                        <h3 v-cloak>{{questionSpeaking[questionIndex].speak_assessment_question.id}}.
                            {{ questionSpeaking[questionIndex].speak_assessment_question.question }}</h3>
                        <p>Choose the most correct answer</p>
                        <div class="mt-5">
                            <input type="number"
                                   :id="'ques' + questionSpeaking[questionIndex].id"
                                   :value="questionSpeaking[questionIndex].id"
                                   hidden/>
                            <div v-for="answer in questionSpeaking[questionIndex].speak_assessment_question.answers"
                                 v-bind:key="answer.id"
                                 class="py-0 my-3 border border-primary rounded answer-selection">
                                <input class="ip-answer" type="radio"
                                       :id="answer.id"
                                       :value="answer.id"
                                       v-model="userChoose[questionIndex]"
                                       v-bind:disabled="resultCheck.questions[questionIndex]"
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
                        <vimeo-player
                            ref="player"
                            :video-id="videoId"
                            :video-url="getVideoUrl()"
                            class="embed-responsive embed-responsive-16by9"
                        />
<!--                        <div>-->
<!--                            <PhotoCapture v-model="imageBase64" />-->
<!--                            <VideoCapture uploadUrl="<example-server-address.com>" v-model="videoUrl" />-->
<!--                        </div>-->
                    </div>
                    <div v-if="typeExam === $getConst('quiz')">
                        <h3 v-cloak v-for="question in questionSpeaking" :key="question.id">
                            {{ question.speak_quiz_question.id }}. {{ question.speak_quiz_question.question }}</h3>
                        <p>Please record one video with voice that answers all question.</p>
<!--                        <div>-->
<!--                            <PhotoCapture v-model="imageBase64" />-->
<!--                            <VideoCapture uploadUrl="<example-server-address.com>" v-model="videoUrl" />-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right py-4 pr-3" v-if="typeExam === $getConst('assessment')">
            <button class="btn btn-primary" v-on:click="prev()" v-if="questionIndex > 0">
                Previous
            </button>
            <span>
                <button class="btn btn-primary mx-2" v-on:click="submit()"
                        v-if="questionIndex === questionSpeaking.length - 1">
                    Submit
                </button>
                <button class="btn btn-primary mx-2" v-on:click="next()"
                        v-if="questionIndex < questionSpeaking.length - 1">
                    Next
                </button>
            </span>
        </div>
        <div class="text-right py-4 pr-3" v-else>
            <button class="btn btn-primary">
                Upload
            </button>
        </div>
    </div>
</template>

<script>
import { vueVimeoPlayer } from "vue-vimeo-player";

export default {
    props: {
        typeExam: Number,
        examId: Number,
        courseId: Number
    },
    components:{
        vueVimeoPlayer,
    },
    data() {
        return {
            questionSpeaking: [],
            questionIndex: 0,
            userChoose: [],
            videoId: "",
            imageBase64: null,
            videoUrl: null,
            resultCheck: {
                courseID: '',
                examID:'',
                quizID:'',
                questions: []
            },
            timeStartDo: '',
            timeDo: '',
        };
    },
    mounted () {

    },
    created() {
        this.getQuestion();
        this.getAnswerUser()
    },
    methods: {
        getQuestion: function (){
            if (this.typeExam === this.$root.$getConst('assessment')) {
                this.getSpeakingAssessmentQuestionsClient();
            } else if (this.typeExam === this.$root.$getConst('exercise')) {
                this.getSpeakingExerciseQuestionsClient();
            } else {
                this.getSpeakingQuizQuestionsClient();
            }
        },
        getSpeakingAssessmentQuestionsClient(){
            axios.get(route("site.exam.getSpeakingAssessmentQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data.questions)
                    this.questionSpeaking= response.data.questions.question;
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        getSpeakingExerciseQuestionsClient(){
            axios.get(route("site.exam.getSpeakingExerciseQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data.questions)
                    this.questionSpeaking= response.data.questions[0].question;
                    this.videoId = this.questionSpeaking[this.questionIndex].speak_exercises_question.video_code;
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        getSpeakingQuizQuestionsClient(){
            axios.get(route("site.exam.getSpeakingQuizQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data.questions)
                    this.questionSpeaking= response.data.questions[0].question;
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        next: function () {
            if (this.questionIndex < this.questionSpeaking.length - 1) {
                this.userAnswer()
                this.questionIndex++;
            }
        },
        prev: function () {
            if (this.questionIndex > 0) this.questionIndex--;
        },
        getVideoUrl() {
            return (
                "https://player.vimeo.com/video/" +
                this.questionSpeaking[this.questionIndex].speak_exercises_question.video_code +
                "?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=" +
                process.env.MIX_VIMEO_APP_ID
            );
        },
        submit: function () {
            this.userAnswer();
            console.log('tra loi ne', this.resultCheck)
        },
        userAnswer: function () {
            this.questionNo = document.getElementById(
                "ques" + this.questionSpeaking[this.questionIndex].id
            ).value;

            this.userAnswerQuiz({
                answerType: this.$root.$getConst('MC'),
                questionID: parseInt(this.questionNo),
                answerID: this.userChoose[this.questionIndex],
                time: this.timeDo
            });
        },
        userAnswerQuiz: function (value) {
            if (this.resultCheck.questions.length === 0) {
                this.resultCheck.courseID = this.courseId
                this.resultCheck.examID = this.examId
                this.resultCheck.quizID = this.questionSpeaking[this.questionIndex].quiz_id
                this.resultCheck.questions.push(value)
            } else {
                if (
                    this.resultCheck.questions.some((item) => {
                        return value.questionID === item.questionID;
                    })
                ) {
                    this.resultCheck.questions.map((item) => {
                        if (value.questionID === item.questionID) {
                            return (item.answerID = value.answerID);
                        }
                    });
                } else {
                    this.resultCheck.questions.push(value);
                }
            }
            localStorage.setItem("speaking", JSON.stringify(this.resultCheck));
        },
        getAnswerUser() {
            this.resultCheck = JSON.parse(localStorage.getItem("speaking")) || {
                questions: []
            };
            this.resultCheck.questions.forEach((item) => {
                this.userChoose.push(item.answerID);
            });
        },
    }
}
</script>

<style scoped>

</style>
