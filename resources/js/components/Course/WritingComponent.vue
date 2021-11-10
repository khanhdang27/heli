<template>
    <div class="container-fluid h-100 d-flex flex-column text-primary pt-4">
        <h1 class="text-center font-weight-bold">Writing</h1>
        <div v-if="allResults.length === 0">
            <div v-if="typeExam !== $getConst('exercise')" class="h5 text-center">
                <vue-countdown-timer
                    v-if="startQuiz === true"
                    :day-txt="'days'"
                    :end-label="'Time limit'"
                    :end-text="'Ended!'"
                    :end-time="timeEnd"
                    :hour-txt="'hours'"
                    :interval="1000"
                    :minutes-txt="'minutes'"
                    :seconds-txt="'seconds'"
                    :start-label="'Until start:'"
                    :start-time="timeNow"
                    label-position="begin"
                    @end_callback="endCallBack('event ended')"
                    @start_callback="startCallBack('event started')"
                >
                    <template slot="start-label" slot-scope="scope">
                        <i class="fe fe-clock"></i>
                        <span
                            v-if="
                scope.props.startLabel !== '' &&
                scope.props.tips &&
                scope.props.labelPosition === 'begin'
              "
                        >
              {{ scope.props.startLabel }}:</span
                        >
                        <span
                            v-if="
                scope.props.endLabel !== '' &&
                !scope.props.tips &&
                scope.props.labelPosition === 'begin'
              "
                        >
              {{ scope.props.endLabel }}:</span
                        >
                    </template>
                    <template slot="countdown" slot-scope="scope">
                        <span>{{ scope.props.days }} </span><a>:</a>
                        <span>{{ scope.props.hours }} </span><a>:</a>
                        <span>{{ scope.props.minutes }} </span><a>:</a>
                        <span>{{ scope.props.seconds }} </span><a></a>
                    </template>
                </vue-countdown-timer>
                <div v-if="startQuiz === false">
                    <button class="btn btn-success mt-3" v-on:click="startExam()">
                        Start
                    </button>
                </div>
            </div>
            <div class="py-4 row justify-content-center lecture overflow-auto">
                <div class="col-lg-8">
                    <div class="h-100">
                        <div
                            v-if="
                typeExam === $getConst('assessment') &&
                startQuiz === true &&
                questionWriting[questionIndex]
              "
                        >
                            <h3 v-cloak>
                                {{
                                    questionWriting[questionIndex].writing_assessment_question.id
                                }}.
                                {{
                                    questionWriting[questionIndex].writing_assessment_question
                                        .question
                                }}
                            </h3>
                            <p>Choose the most correct answer</p>
                            <div class="mt-5">
                                <input
                                    :id="'ques' + questionWriting[questionIndex].id"
                                    :value="questionWriting[questionIndex].id"
                                    hidden
                                    type="number"
                                />
                                <div
                                    v-for="answer in questionWriting[questionIndex]
                    .writing_assessment_question.answers"
                                    v-bind:key="answer.id"
                                    class="
                    py-0
                    my-2
                    border border-primary
                    rounded
                    answer-selection
                  "
                                >
                                    <input
                                        :id="answer.id"
                                        v-model="userChoose[questionIndex]"
                                        :value="answer.id"
                                        hidden
                                        type="radio"
                                        v-bind:disabled="resultCheck.questions[questionIndex]"
                                    />
                                    <label :for="answer.id" class="w-100">
                                        <a class="btn text-left w-100">
                                            <h5 class="mb-0">{{ answer.answer }}</h5>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div
                            v-if="
                typeExam === $getConst('exercise') &&
                questionWriting[questionIndex]
              "
                        >
                            <div v-if="checkAnswer[questionIndex] === $getConst('incorrect')">
                                <div
                                    class="p-3 bg-danger rounded h5 text-white font-weight-bold"
                                >
                                    Incorrect answer !
                                </div>
                                <h5
                                    v-for="answer_item in questionWriting[questionIndex]
                    .writing_assessment_question.answers"
                                    v-bind:key="answer_item.id"
                                    class="text-success"
                                >
                  <span v-if="answer_item.is_correct === $getConst('correct')">
                    Correct answer is: {{ answer_item.answer }}
                  </span>
                                </h5>
                            </div>

                            <div
                                v-if="checkAnswer[questionIndex] === $getConst('correct')"
                                class="p-3 bg-success rounded h5 text-white font-weight-bold"
                            >
                                Good job !
                            </div>

                            <h3 v-cloak>
                                {{
                                    questionIndex + 1
                                }}.
                                {{
                                    questionWriting[questionIndex].writing_assessment_question
                                        .question
                                }}
                            </h3>
                            <p>Choose the most correct answer</p>
                            <div class="mt-5">
                                <input
                                    :id="'ques' + questionWriting[questionIndex].id"
                                    :value="questionWriting[questionIndex].id"
                                    hidden
                                    type="number"
                                />
                                <div
                                    v-for="answer in questionWriting[questionIndex]
                    .writing_assessment_question.answers"
                                    v-bind:key="answer.id"
                                    class="
                    py-0
                    my-2
                    border border-primary
                    rounded
                    answer-selection
                  "
                                >
                                    <input
                                        :id="answer.id"
                                        v-model="userChoose[questionIndex]"
                                        :value="answer.id"
                                        hidden
                                        type="radio"
                                        v-bind:disabled="resultCheck.questions[questionIndex]"
                                    />
                                    <label :for="answer.id" class="w-100">
                                        <a class="btn text-left w-100">
                                            <h5 class="mb-0">{{ answer.answer }}</h5>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div
                            v-if="
                typeExam === $getConst('quiz') &&
                startQuiz === true &&
                questionWriting[questionIndex]
              "
                        >
                            <h3 v-cloak>
                                {{ questionWriting[questionIndex].writing_quiz_question.id }}.
                                {{
                                    questionWriting[questionIndex].writing_quiz_question.question
                                }}
                            </h3>
                            <div v-if="typeExam === $getConst('quiz')" class="mt-5">
                                <div :id="questionWriting[questionIndex].id" class="form-group">
                                    <ckeditor
                                        v-model="userChoose[questionIndex]"
                                        :config="editorConfig"
                                    ></ckeditor>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right pb-4 pr-3">
                <button
                    v-if="questionIndex > 0"
                    class="btn btn-primary"
                    v-on:click="prev()"
                >
                    Previous
                </button>
                <span v-if="typeExam === $getConst('exercise')">
                      <button
                          class="btn btn-primary mx-2"
                          v-on:click="next()"
                      >
                        Next
                      </button>
                </span>
                <span v-if="typeExam !== $getConst('exercise') && startQuiz === true">
                      <button
                          v-if="questionIndex === questionWriting.length - 1"
                          class="btn btn-primary mx-2"
                          v-on:click="submit()"
                      >
                        Submit
                      </button>
                      <button
                          v-if="questionIndex < questionWriting.length - 1"
                          class="btn btn-primary mx-2"
                          v-on:click="next()"
                      >
                        Next
                      </button>
                 </span>
            </div>
        </div>
        <div v-else class="mt-5 h-100">
            <div class="text-center">
                <div v-if="typeExam !== $getConst('assessment')">
                    <div v-if="typeExam === $getConst('exercise')">
                        <h2 class="text-success">You score {{ allResults.score }}</h2>
                        <div class="row justify-content-center align-items-start">
                            <div class="col-lg-6 col-md-10 col-12">
                                <div v-for="result in allResults.quiz_result"
                                     :key="result.question"
                                     class="text-left mb-2">
                                    <div v-for="questionItem in questionWriting"
                                         v-if="questionItem.id === result.question "
                                         v-bind:key="questionItem.id">
                                        <h5 v-if="result.is_correct">
                                            <i class="fe fe-check-circle text-success"></i>
                                            {{questionItem.writing_assessment_question.question}}
                                        </h5>
                                        <div v-else>
                                            <h5>
                                                <i class="fe fe-x-circle text-danger"></i>
                                                {{questionItem.writing_assessment_question.question}}
                                            </h5>
                                            <h5 class="ml-4" v-for="answerItem in questionItem.writing_assessment_question.answers"
                                                v-bind:key="answerItem.id">
                                                <span v-if="answerItem.is_correct === $getConst('correct')">
                                                    Correct answer is: {{ answerItem.answer }}
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else
                         class="text-success">
                        You have completed this section.
                        Your exam is being graded by the tutor.
                        Please wait for the results and come back later!
                    </div>
                </div>
                <div v-else class="text-success">
                    You have completed the this part. Please select continue to complete
                    the First Free Assessment!
                </div>
                <button class="btn btn-primary my-5" v-on:click="nextTypeExam()">
                    Continue <i class="fe fe-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</template>


<script>
import CKEditor from "ckeditor4-vue";

const results = [
    {type: "quiz", score: 5.5, correct_question: 8, wrong_question: 5},
    {type: "assessment", score: 6, correct_question: 10, wrong_question: 3},
];
export default {
    props: {
        typeExam: Number,
        examId: Number,
        courseId: Number,
    },
    components: {
        ckeditor: CKEditor.component,
    },
    data() {
        return {
            questionWriting: [],
            questionIndex: 0,
            editorConfig: {},
            timeNow: "",
            timeEnd: "",
            timeLimitQuiz: 60,
            timeLimitAssessment: 20,
            startQuiz: false,
            userChoose: [],
            allResults: [],
            checkAnswer: [],
            resultCheck: {
                courseID: "",
                examID: "",
                quizID: "",
                questions: [],
            },
            timeStartDo: "",
            timeDo: "",
            countClick: 0
        };
    },
    mounted() {
        this.getQuestion();
        this.getAnswerUser();
    },
    methods: {
        getQuestion: function () {
            if (this.typeExam === this.$root.$getConst("assessment")) {
                this.getWritingAssessmentQuestions();
            } else if (this.typeExam === this.$root.$getConst("exercise")) {
                this.getWritingExerciseQuestions();
            } else {
                this.getWritingQuizQuestions();
            }
        },
        next: function () {
            if (this.typeExam !== this.$root.$getConst("exercise")) {
                if (this.questionIndex < this.questionWriting.length - 1) {
                    this.userAnswer();
                    this.questionIndex++;
                }
            } else {
                if (this.countClick % 2 === 0) {
                    this.check(this.questionIndex)
                    this.userAnswer();
                    if (this.questionIndex === this.questionWriting.length - 1){
                        this.submit()
                    }
                } else {
                    if (this.questionIndex < this.questionWriting.length - 1) {
                        this.questionIndex++;
                    }
                }
                this.countClick++
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
            this.submit()
        },
        getWritingAssessmentQuestions() {
            axios
                .get(
                    route("site.exam.getWritingAssessmentQuestionsClient", this.examId)
                )
                .then((response) => {
                    console.log("response.data >>>", response.data);

                    this.questionWriting = response.data.questions.question.filter(
                        (question) => {
                            return question.writing_assessment_question !== null;
                        }
                    );
                    this.questionWriting.sort((first, second) => {
                        if (
                            first.writing_assessment_question.part >
                            second.writing_assessment_question.part
                        ) {
                            return 1;
                        } else {
                            if (first.index > second.index) {
                                return 1;
                            } else {
                                return -1;
                            }
                        }
                    });
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        getWritingExerciseQuestions() {
            axios
                .get(route("site.exam.getWritingExerciseQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data);
                    this.questionWriting = response.data.questions[0].question;
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        getWritingQuizQuestions() {
            axios
                .get(route("site.exam.getWritingQuizQuestionsClient", this.examId))
                .then((response) => {
                    console.log(response.data);
                    this.questionWriting = response.data.questions[0].question;
                })
                .catch(function (error) {
                    console.error(error);
                });
        },
        startExam: function () {
            this.startQuiz = true;
            this.timeNow = new Date();
            this.timeEnd = new Date();
            this.timeStartDo = this.timeNow;
            if (this.typeExam === this.$root.$getConst("quiz")) {
                this.timeEnd.setMinutes(this.timeEnd.getMinutes() + this.timeLimitQuiz);
            }
            if (this.typeExam === this.$root.$getConst("assessment")) {
                this.timeEnd.setMinutes(
                    this.timeEnd.getMinutes() + this.timeLimitAssessment
                );
            }
        },
        check: function () {
            if (undefined) {
                this.checkAnswer.push(0);
            } else {
                for (
                    let i = 0;
                    i <
                    this.questionWriting[this.questionIndex].writing_assessment_question
                        .answers.length;
                    i++
                ) {
                    if (
                        this.questionWriting[this.questionIndex].writing_assessment_question
                            .answers[i].id === this.userChoose[this.questionIndex]
                    ) {
                        if (
                            this.questionWriting[this.questionIndex]
                                .writing_assessment_question.answers[i].is_correct === 1
                        ) {
                            return this.checkAnswer.push(1);
                        }
                        return this.checkAnswer.push(0);
                    }
                }
            }
            console.log(this.checkAnswer);
        },
        submit: function () {
            this.userAnswer();
            axios
                .post(route("site.exam.handleSubmitAnswer"), this.resultCheck)
                .then((data) => {
                    this.allResults = data.data;
                })
                .catch((error) => {
                    console.log("error :>> ", error);
                });
        },
        nextTypeExam() {
            this.$emit("nextTypeExam", this.$root.$getConst("listening"));
        },
        userAnswer: function () {
            let ansType;
            if (this.typeExam === this.$root.$getConst("quiz")) {
                ansType = this.$root.$getConst("text");
            } else {
                ansType = this.$root.$getConst("MC");
            }
            this.questionNo = document.getElementById(
                "ques" + this.questionWriting[this.questionIndex].id
            ).value;
            this.timeDo = (new Date() - this.timeStartDo) / 1000;
            this.timeStartDo = new Date();

            this.userAnswerQuiz({
                answerType: ansType,
                questionID: parseInt(this.questionNo),
                answerID: this.userChoose[this.questionIndex],
                time: this.timeDo,
            });
        },
        userAnswerQuiz: function (value) {
            if (this.resultCheck.questions.length === 0) {
                this.resultCheck.courseID = this.courseId;
                this.resultCheck.examID = this.examId;
                this.resultCheck.quizID =
                    this.questionWriting[this.questionIndex].quiz_id;
                this.resultCheck.questions.push(value);
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
            localStorage.setItem("writing", JSON.stringify(this.resultCheck));
        },
        getAnswerUser() {
            this.resultCheck = JSON.parse(localStorage.getItem("writing")) || {
                questions: [],
            };
            this.resultCheck.questions.forEach((item) => {
                console.log("item :>> ", item);
                this.userChoose.push(item.answerID);
            });

            console.log("this.resultCheck :>> ", this.resultCheck);
        },
    },
};
</script>

<style scoped>
</style>
