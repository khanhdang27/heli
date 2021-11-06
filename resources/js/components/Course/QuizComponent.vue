<template>
  <div class="h-100">
    <div v-if="typeExercise === $getConst('reading')" class="h-100">
      <reading-component
        v-bind:examId="examId"
        v-bind:typeExam="typeExam"
        v-bind:courseId="courseId"
        @nextTypeExam="nextTypeExam"
      >
      </reading-component>
    </div>
    <div v-if="typeExercise === $getConst('writing')" class="h-100">
      <writing-component
        v-bind:examId="examId"
        v-bind:typeExam="typeExam"
        v-bind:courseId="courseId"
        @nextTypeExam="nextTypeExam"
      >
      </writing-component>
    </div>
    <div v-if="typeExercise === $getConst('listening')" class="h-100">
      <listening-component
        v-bind:examId="examId"
        v-bind:typeExam="typeExam"
        v-bind:courseId="courseId"
        @nextTypeExam="nextTypeExam"
      ></listening-component>
    </div>
    <div v-if="typeExercise === $getConst('speaking')" class="h-100">
      <speaking-component
        v-bind:examId="examId"
        v-bind:typeExam="typeExam"
        v-bind:courseId="courseId"
      ></speaking-component>
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
      typeExercise: "",
    };
  },
  mounted: function () {
    this.typeExercise = this.$root.$getConst("speaking");
  },
  methods: {
    nextTypeExam: function (type) {
      this.typeExercise = type;
    },
    // submitAnswer() {
    //     this.userAnswer();
    //     axios
    //         .post(
    //             route("site.exam.checkExam", {
    //                 exams: this.examId
    //             }),
    //             {
    //                 courseId: this.courseId,
    //                 quiz: this.quiz,
    //             }
    //         )
    //         .then((response) => {
    //             this.result = response.data;
    //             localStorage.removeItem('quiz');
    //             let index = 0;
    //             this.result.quiz_result.forEach((item) => {
    //                 let __question = this.questions.find((_question) => {
    //                     return _question.id === item.question;
    //                 });
    //                 let __answer = __question.answers.find((_answer) => {
    //                     return _answer.is_correct;
    //                 });
    //                 if (item.is_correct == true) {
    //                     this.showScore.correct.push({
    //                         key: index,
    //                         question: __question.question,
    //                         answer: __answer.answer,
    //                     });
    //                 } else {
    //                     this.showScore.wrong.push({
    //                         key: index,
    //                         question: __question.question,
    //                         answer: __answer.answer,
    //                         lecture: __question.lecture_index,
    //                         message: __question.message_wrong,
    //                     });
    //                 }
    //                 index += 1;
    //             });
    //         })
    //         .catch(function (error) {
    //             console.error(error);
    //         });
    // },
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
