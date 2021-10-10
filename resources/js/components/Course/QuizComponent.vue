<template>
  <div
    class="
      border border-primary
      h-100
      d-flex
      flex-column
      justify-content-between
      text-primary
    "
    v-if="questions.length > 0"
  >
    <div class="container-fluid py-5 h-100">
      <div class="row justify-content-center h-100">
        <div class="col-sm-8 h-100">
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
          <div v-else>results</div>
        </div>
      </div>
    </div>

    <div class="bg-light text-right border py-2 px-5">
      <button
        class="btn btn-primary"
        v-on:click="prev()"
        v-if="questionIndex > 0"
      >
        Previous
      </button>
      <span v-if="userChoose[questionIndex] !== ''">
        <button
          class="btn btn-primary"
          v-on:click="submitAnswer()"
          v-if="questionIndex == questions.length - 1"
        >
          Submit
        </button>
        <button v-else class="btn btn-primary" v-on:click="next()">Next</button>
      </span>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    questions: Array,
  },
  data() {
    return {
      questionIndex: 0,
      questionNo: "",
      userChoose: [],
      quiz: [],
      result: [],
    };
  },
  mounted: function () {
    this.getAnswerUser();
  },
  methods: {
    submitAnswer() {
      // this.$emit("submit", true);'
      console.log("this.quiz :>> ", this.quiz);
      axios
        .post(
          route("site.exam.checkExam", {
            exams: 1,
          }),
          {
            version: 1,
            userId: 12,
            courseId: 2,
            quiz: this.quiz,
          }
        )
        .then((response) => {
          console.log("this.response :>> ", response);
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
  },
};
</script>
