<template>
    <div class="row h-100">
        <div class="col-lg-6 py-4">
            <content-left-component></content-left-component>
        </div>
        <div class="col-lg-6">
            <div class="h-100 d-flex flex-column justify-content-between text-primary"
                 v-if="questions.length > 0">
                <div class="container-fluid py-5 h-100">
                    <div class="h-100">
                        <div v-if="result.length === 0" class="h-100">
                            <div class="h-25">
                                <h1 v-cloak>{{ questions[questionIndex].question }}</h1>
                                <p>Choose the most correct answer</p>
                            </div>
                            <div class="h-75">
                                <input
                                    type="number"
                                    :id="'ques' + questions[questionIndex].id"
                                    :value="questions[questionIndex].id"
                                    hidden
                                />
                                <div
                                    v-for="answer in questions[questionIndex].answers"
                                    v-bind:key="answer.id"
                                    class="py-0 my-2 border border-primary rounded answer-selection"
                                >
                                    <input
                                        type="radio"
                                        :id="answer.id"
                                        :value="answer.id"
                                        v-model="userChoose[questionIndex]"
                                        hidden
                                    />
                                    <label :for="answer.id" class="w-100">
                                        <a class="btn text-left w-100">
                                            <h5 class="mb-0">{{ answer.answer }}</h5>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div v-else>
                            <div v-if="result.status == true">
                                <div v-if="result.score === result.score">
                                    <h2 class="text-success">
                                        Excellent, you got all the answers correct
                                    </h2>
                                    <strong>What you know</strong>
                                    <div class="pl-2"
                                         v-for="item in showScore.correct"
                                         v-bind:key="item.key">
                                        - {{ item.question }} :
                                        <span class="text-success">
                                    {{ item.answer }} <i class="fe fe-check"> </i>
                                </span>
                                    </div>
                                </div>
                            </div>
                            <div v-else>
                                <h2>Review the course materials to expand your learning.</h2>
                                <h3>
                                    you got {{ result.score }} of
                                    {{ result.quiz_result.lenght }} correct
                                </h3>
                                <strong> What you know </strong>
                                <div class="pl-2" v-for="item in showScore.correct" v-bind:key="item.key">
                                    - {{ item.question }} :
                                    <span class="text-success">
                                {{ item.answer }} <i class="fe fe-check"> </i>
                            </span>
                                </div>
                                <strong> What you should review </strong>
                                <div class="pl-2" v-for="item in showScore.wrong" v-bind:key="item.key">
                                    - {{ item.question }} :
                                    <span class="text-danger">
                                {{ item.answer }} <i class="fe fe-x"> </i>
                            </span>
                                    <br/>
                                    <sub class="text-danger">{{ item.message }} </sub>
                                    <br/>
                                    <a class="font-weight-bold"
                                       v-on:click.stop="goToLecture(item.lecture)">
                                        Lecture Index .{{ item.lecture }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="result.length === 0" class="text-right pb-4 pr-3">
                    <button class="btn btn-primary" v-on:click="prev()" v-if="questionIndex > 0">
                        Previous
                    </button>
                    <span v-if="userChoose[questionIndex] !== ''">
                <button class="btn btn-primary"
                        v-on:click="submitAnswer()"
                        v-if="questionIndex == questions.length - 1">
                  Submit
                </button>
                <button v-else class="btn btn-primary" v-on:click="next()">Next</button>
            </span>
                </div>
                <div v-else class="bg-light text-right border py-2 px-5">
                    <button class="btn btn-primary" v-on:click="prev()" v-if="questionIndex > 0">
                        Retry
                    </button>
                    <span v-if="result.status == true">
                <button class="btn btn-primary" v-on:click="nextToLecture()">
                  Next Lecture
                </button>
            </span>
                </div>
            </div>
        </div>

    </div>

</template>
<script>
export default {
  props: {
    questions: Array,
    courseId: Number,
    examId: Number
  },
  data() {
    return {
      questionIndex: 0,
      questionNo: "",
      userChoose: [],
      quiz: [],
      result: [],
      showScore: {
        correct: [],
        wrong: [],
      },
    };
  },
  mounted: function () {
    this.getAnswerUser();
  },
  methods: {
    submitAnswer() {
      this.userAnswer();
      axios
        .post(
          route("site.exam.checkExam", {
            exams: this.examId
          }),
          {
            courseId: this.courseId,
            quiz: this.quiz,
          }
        )
        .then((response) => {
          this.result = response.data;
          localStorage.removeItem('quiz');
          let index = 0;
          this.result.quiz_result.forEach((item) => {
            let __question = this.questions.find((_question) => {
              return _question.id === item.question;
            });
            let __answer = __question.answers.find((_answer) => {
              return _answer.is_correct;
            });
            if (item.is_correct == true) {
              this.showScore.correct.push({
                key: index,
                question: __question.question,
                answer: __answer.answer,
              });
            } else {
              this.showScore.wrong.push({
                key: index,
                question: __question.question,
                answer: __answer.answer,
                lecture: __question.lecture_index,
                message: __question.message_wrong,
              });
            }
            index += 1;
          });
        })
        .catch(function (error) {
          console.error(error);
        });
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
    next: function () {
      if (this.questionIndex < this.questions.length - 1) {
        this.userAnswer();
        this.questionIndex++;
      }
    },
    prev: function () {
      if (this.questionIndex > 0) this.questionIndex--;
    },
    userAnswerQuiz: function (value) {
      if (this.quiz.length === 0) {
        this.quiz.push(value);
      } else {
        if (
          this.quiz.some((item) => {
            return value.questionID === item.questionID;
          })
        ) {
          this.quiz.map((item) => {
            if (value.questionID === item.questionID) {
              return (item.answerID = value.answerID);
            }
          });
        } else {
          this.quiz.push(value);
        }
      }
      localStorage.setItem("quiz", JSON.stringify(this.quiz));
    },
    getAnswerUser() {
      this.quiz = JSON.parse(localStorage.getItem("quiz")) || new Array();
      this.quiz.forEach((item) => {
        this.userChoose.push(item.answerID);
      });
    },
    goToLecture(index) {
      this.$emit("goToLecture", index);
    },
    reTryLecture() {
      this.$emit("reTryLecture");
    },
    nextToLecture() {
      this.$emit("nextToLecture");
    },
  },
};
</script>
