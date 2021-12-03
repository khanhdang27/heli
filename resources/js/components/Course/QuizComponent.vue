<template>
  <div class="h-100">
    <div v-if="isAwait" class="container-fluid">
      <div class="pt-5 text-center text-success">
        <h2>You have completed this section.</h2>
        <h2>
          Your exam is being graded by the tutor. Please wait for the results
          and come back later!
        </h2>
      </div>
    </div>
    <div v-else>
      <div v-if="typeExercise === $getConst('reading')" class="h-100">
        <reading-component
          v-bind:examId="examId"
          v-bind:typeExam="typeExam"
          v-bind:courseId="courseId"
          @nextTypeExam="nextTypeExam"
          @goToLecture="goToLecture"
          @reTryLecture="reTryLecture"
        >
        </reading-component>
      </div>
      <div v-if="typeExercise === $getConst('writing')" class="h-100">
        <writing-component
          v-bind:examId="examId"
          v-bind:typeExam="typeExam"
          v-bind:courseId="courseId"
          @nextTypeExam="nextTypeExam"
          @reTryLecture="reTryLecture"
        >
        </writing-component>
      </div>
      <div v-if="typeExercise === $getConst('listening')" class="h-100">
        <listening-component
          v-bind:examId="examId"
          v-bind:typeExam="typeExam"
          v-bind:courseId="courseId"
          @nextTypeExam="nextTypeExam"
          @goToLecture="goToLecture"
          @reTryLecture="reTryLecture"
        ></listening-component>
      </div>
      <div v-if="typeExercise === $getConst('speaking')" class="h-100">
        <speaking-component
          v-bind:examId="examId"
          v-bind:typeExam="typeExam"
          v-bind:courseId="courseId"
          @nextToLecture="nextToLecture"
          @reTryLecture="reTryLecture"
        ></speaking-component>
      </div>
    </div>
  </div>
</template>
<script>
import ReadingComponent from "./ReadingComponent";

export default {
  components: { ReadingComponent },
  props: {
    typeExam: Number,
    courseId: Number,
    examId: Number,
    questionType: Number,
    isAwait: Boolean,
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
      typeExercise: 0,
    };
  },
  mounted: function () {
    this.typeExercise = this.questionType;
  },
  watch: {
    questionType: function (value) {
      this.typeExercise = value;
    },
  },
  methods: {
    nextTypeExam: function (type) {
      if (this.typeExam === this.$root.$getConst("assessment")) {
        this.typeExercise = type;
      }
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
      this.quiz = JSON.parse(localStorage.getItem("quiz")) || {
        questions: [],
      };
      this.quiz.forEach((item) => {
        this.userChoose.push(item.answerID);
      });
    },
    goToLecture(index, level, type) {
      this.$emit("goToLecture", index, level, type);
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
