<template>
  <div class="text-primary h-100 pt-4">
    <h1 class="text-center font-weight-bold">Reading</h1>
    <div v-if="allResults.length === 0">
      <div
        class="text-center h4 my-3"
        v-if="typeExam !== $getConst('exercise')"
      >
        <vue-countdown-timer
          v-if="startQuiz === true"
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
          :seconds-txt="'seconds'"
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
      </div>
      <div v-if="startQuiz === false" class="text-center">
        <button class="btn btn-success mt-3" v-on:click="startExam()">
          Start
        </button>
      </div>
      <div class="row container-fluid m-0">
        <div class="col-lg-6 py-4">
          <div
            class="pr-3 lecture overflow-auto"
            v-if="startQuiz === true"
            v-html="passage"
          >
            {{ passage }}
          </div>
        </div>
        <div class="col-lg-6 py-4">
          <div
            class="
              h-100
              d-flex
              flex-column
              justify-content-between
              lecture
              overflow-auto
            "
          >
            <div class="h-100" v-if="startQuiz === true">
              <div
                v-if="
                  typeExam === $getConst('assessment') &&
                  questionReading[questionIndex]
                "
              >
                <h3 v-cloak>
                  {{ questionIndex + 1 }}.
                  {{ questionReading[questionIndex].reading_question.question }}
                </h3>
                <p>Choose the most correct answer</p>

                <div class="mt-5">
                  <div
                    v-for="answer in questionReading[questionIndex]
                      .reading_question.answers"
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
                      class="ip-answer"
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
              <div
                v-if="
                  typeExam === $getConst('exercise') &&
                  questionReading[questionIndex]
                "
              >
                <h3 v-cloak>
                  {{ questionIndex + 1 }}.
                  {{ questionReading[questionIndex].reading_question.question }}
                </h3>
                <p>Choose the most correct answer</p>

                <div class="mt-5">
                  <div
                    v-for="answer in questionReading[questionIndex]
                      .reading_question.answers"
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
                      class="ip-answer"
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
              <div
                v-if="
                  typeExam === $getConst('quiz') &&
                  questionReading[questionIndex]
                "
              >
                <h3 v-cloak>
                  {{ questionIndex + 1 }}.
                  {{ questionReading[questionIndex].reading_question.question }}
                </h3>
                <p>Choose the most correct answer</p>

                <div class="mt-5">
                  <div
                    v-for="answer in questionReading[questionIndex]
                      .reading_question.answers"
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
                      class="ip-answer"
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
            </div>
          </div>
        </div>
        <div class="text-right w-100 pb-3">
          <button
            class="btn btn-primary"
            v-on:click="prev()"
            v-if="questionIndex > 0"
          >
            Previous
          </button>
          <span v-if="startQuiz === true && questionReading[questionIndex]">
            <button
              class="btn btn-primary mx-2"
              v-on:click="submit()"
              v-if="questionIndex === questionReading.length - 1"
            >
              Submit
            </button>
            <button
              class="btn btn-primary mx-2"
              v-on:click="next()"
              v-if="questionIndex < questionReading.length - 1"
            >
              Next
            </button>
          </span>
        </div>
      </div>
    </div>
    <div v-else class="h-100">
      <div class="text-center">
        <div
          class="container-fluid"
          v-if="typeExam !== $getConst('assessment')"
        >
          <h2 class="text-success">You score {{ allResults.score }}</h2>
          <div
            class="
              row
              justify-content-center
              align-items-start
              lecture
              overflow-auto
            "
          >
            <div class="col-lg-8 col-md-10 col-12">
              <div
                class="text-left mb-2"
                v-for="result in allResults.quiz_result"
                :key="result.question"
              >
                <div
                  v-for="questionItem in questionReading"
                  v-bind:key="questionItem.id"
                >
                  <div
                    v-if="result.question === questionItem.id"
                    class="list-group"
                  >
                    <div v-if="result.is_correct" class="list-group-item">
                      <div class="d-flex">
                        <i class="fe fe-check-circle text-success h5 pr-2"></i>
                        <h5>
                          <span class="font-weight-bold">Question: </span>
                          {{ questionItem.reading_question.question }}
                        </h5>
                      </div>
                      <div
                        class="ml-4"
                        v-for="answerItem in questionItem.reading_question
                          .answers"
                        v-bind:key="answerItem.id"
                      >
                        <div
                          v-if="answerItem.is_correct === $getConst('correct')"
                        >
                          <div class="d-flex flex-wrap">
                            <h5 class="mr-2 font-weight-bold">
                              Correct answer:
                            </h5>
                            <div class="h5 mb-0">{{ answerItem.answer }}</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div v-else class="list-group-item">
                      <div class="d-flex">
                        <i class="fe fe-x-circle text-danger pr-2 h5"></i>
                        <h5>
                          <span class="font-weight-bold">Question: </span>
                          {{ questionItem.reading_question.question }}
                        </h5>
                      </div>
                      <div
                        class="ml-4"
                        v-for="answerItem in questionItem.reading_question
                          .answers"
                        v-bind:key="answerItem.id"
                      >
                        <div
                          v-if="answerItem.is_correct === $getConst('correct')"
                        >
                          <div class="d-flex flex-wrap">
                            <h5 class="mr-2 font-weight-bold">
                              Correct answer:
                            </h5>
                            <div class="h5 mb-0">{{ answerItem.answer }}</div>
                          </div>
                          <div class="h5" v-if="typeExam === $getConst('quiz')">
                            <span class="font-weight-bold">
                              Lecture related:
                            </span>
                            <a
                              href="#"
                              class="h5 mb-0 border-primary border-bottom"
                              v-on:click="
                                goToLecture(
                                  questionItem.reading_question.lecture_index
                                )
                              "
                            >
                              Lecture
                              {{ questionItem.reading_question.lecture_index }}
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pb-4">
            <div v-if="allResults.score / allResults.quiz_result.length < 0.8">
              <h3>
                <button class="btn btn-primary mt-2" v-on:click="otherTest()">
                  Re-try
                </button>
              </h3>
            </div>
            <div v-else>
              <div v-if="typeExam === $getConst('quiz')">
                <div v-if="related.length == 0">
                  <a class="btn btn-primary mt-2" href="/site">
                    Get another Course
                  </a>
                </div>
                <h3 v-else>
                  <button
                    class="btn btn-primary mt-2"
                    v-on:click="gotoRelated()"
                  >
                    Go to next level
                  </button>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div v-else class="text-success text-center h-100">
          <h5>
            You have completed the this part. Please select continue to complete
            the First Free Assessment!
          </h5>
          <button class="btn btn-primary my-5" v-on:click="nextTypeExam()">
            Continue <i class="fe fe-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    typeExam: Number,
    examId: Number,
    courseId: Number,
    related: Array,
  },
  data() {
    return {
      questionReading: [],
      questionIndex: 0,
      questionNo: "",
      userChoose: [],
      passage: "",
      allResults: [],
      checkAnswer: [],
      resultCheck: {
        courseID: "",
        examID: "",
        quizID: "",
        questions: [],
      },
      startQuiz: false,
      timeNow: "",
      timeEnd: "",
      timeLimitQuiz: 20,
      timeLimitAssessment: 20,
      timeStartDo: "",
      timeDo: "",
      countClick: 0,
    };
  },
  watch: {
    typeExam: function (value) {
      this.allResults = [];
      this.questionIndex = 0;
      this.questionReading = [];
      this.startQuiz = false;
      this.getQuestion();
      this.getAnswerUser();
    },
  },
  mounted() {
    this.getQuestion();
    this.getAnswerUser();
  },
  methods: {
    gotoRelated() {
      window.location.href = route("site.course.show", this.related[0]?.id);
    },
    getQuestion: function () {
      if (this.typeExam === this.$root.$getConst("assessment")) {
        this.getReadingAssessmentQuestions();
      } else if (this.typeExam === this.$root.$getConst("exercise")) {
        this.getReadingExerciseQuestions();
      } else {
        this.getReadingQuizQuestions();
      }
    },
    getReadingAssessmentQuestions() {
      axios
        .get(
          route("site.exam.getReadingAssessmentQuestionsClient", this.examId)
        )
        .then((response) => {
          this.passage = response.data.passages.content;
          this.questionReading = response.data.questions;
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getReadingExerciseQuestions() {
      axios
        .get(route("site.exam.getReadingExerciseQuestionsClient", this.examId))
        .then((response) => {
          console.log(response.data);
          this.passage = response.data.passages.content;
          this.questionReading = response.data.questions;
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getReadingQuizQuestions() {
      axios
        .get(route("site.exam.getReadingQuizQuestionsClient", this.examId))
        .then((response) => {
          console.log(response.data.questions);
          this.passage = response.data.passages.content;
          this.questionReading = response.data.questions;
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    check: function () {
      if (undefined) {
        this.checkAnswer.push(0);
      } else {
        for (
          let i = 0;
          i <
          this.questionReading[this.questionIndex].reading_question.answers
            .length;
          i++
        ) {
          if (
            this.questionReading[this.questionIndex].reading_question.answers[i]
              .id === this.userChoose[this.questionIndex]
          ) {
            if (
              this.questionReading[this.questionIndex].reading_question.answers[
                i
              ].is_correct === this.$root.$getConst("correct")
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

          localStorage.removeItem("reading_" + this.examId);
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    nextTypeExam() {
      this.$emit("nextTypeExam", this.$root.$getConst("writing"));
    },
    userAnswer: function () {
      this.timeDo = (new Date() - this.timeStartDo) / 1000;
      this.timeStartDo = new Date();

      this.userAnswerQuiz({
        answerType: this.$root.$getConst("MC"),
        questionID: parseInt(this.questionReading[this.questionIndex].id),
        answerID: this.userChoose[this.questionIndex] || 0,
        time: this.timeDo,
      });
    },
    userAnswerQuiz: function (value) {
      if (this.resultCheck.questions.length === 0) {
        this.resultCheck.courseID = this.courseId;
        this.resultCheck.examID = this.examId;
        this.resultCheck.quizID =
          this.questionReading[this.questionIndex].quiz_id;
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
      localStorage.setItem(
        "reading_" + this.examId,
        JSON.stringify(this.resultCheck)
      );
    },
    getAnswerUser() {
      this.resultCheck = JSON.parse(
        localStorage.getItem("reading_" + this.examId)
      ) || {
        questions: [],
      };
      this.resultCheck.questions.forEach((item) => {
        this.userChoose.push(item.answerID);
      });
    },
    next: function () {
      if (this.questionIndex < this.questionReading.length - 1) {
        this.userAnswer();
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
      this.submit();
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
    goToLecture(index) {
      axios
        .post(route("site.lecture.getLectureRelated"), {
          courseID: this.courseId,
          index: index,
        })
        .then((response) => {
          console.log("Lecture", response);
          let level = response.data.level;
          this.$emit(
            "goToLecture",
            index,
            level,
            this.$root.$getConst("reading")
          );
        })
        .catch((error) => {
          console.error(error);
        });
    },
    otherTest() {
      window.location.reload();
      //   this.$emit("reTryLecture");
    },
  },
};
</script>

<style scoped>
</style>
