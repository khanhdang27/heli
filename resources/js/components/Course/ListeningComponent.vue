<template>
  <div class="h-100 text-primary pt-4">
    <h1 class="text-center font-weight-bold">Listening</h1>
    <div v-if="allResults.length === 0">
      <div
        class="container-fluid h-100 d-flex flex-column justify-content-between"
      >
        <h5 class="text-center">There will be 1 audio for each part.</h5>
        <div
          class="py-4 h-100 row justify-content-center lecture overflow-auto"
        >
          <div class="col-lg-8">
            <div v-if="startQuiz === false" class="h-100">
              <div
                v-for="(part, index) in questionListeningPreview"
                :key="index"
              >
                <h5 class="font-weight-bold">
                  {{ index | uppercase | replace }}
                </h5>
                <div v-for="(question, index) in part" :key="question.id">
                  <h5>
                    {{ index + 1 }}.
                    {{ question.listen_assessment_question.question }}
                  </h5>
                </div>
              </div>
            </div>
            <div v-else class="h-100">
              <div
                v-if="
                  typeExam === $getConst('assessment') &&
                  questionListening[questionIndex]
                "
              >
                <div
                  class="
                    border
                    shadow-sm
                    bg-white
                    rounded
                    py-3
                    mb-3
                    h4
                    text-center
                  "
                >
                  <audio
                    ref="audio"
                    :class="[audioShow ? 'd-inline' : 'd-none']"
                    controls
                    controlsList="nodownload noremoteplayback"
                    @play="audioStart()"
                  >
                    <source :src="audioSrc" type="audio/mpeg" />
                  </audio>

                  <h5>Audio can played once only</h5>
                </div>
                <h3 v-cloak>
                  {{ questionIndex + 1 }}.
                  {{
                    questionListening[questionIndex].listen_assessment_question
                      .question
                  }}
                </h3>
                <p>Choose the most correct answer</p>
                <div class="mt-5">
                  <div
                    v-for="answer in questionListening[questionIndex]
                      .listen_assessment_question.answers"
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
                  questionListening[questionIndex]
                "
              >
                <div
                  class="
                    border
                    shadow-sm
                    bg-white
                    rounded
                    py-3
                    mb-3
                    h4
                    text-center
                  "
                >
                  <audio
                    ref="audio"
                    :class="[audioShow ? 'd-inline' : 'd-none']"
                    controls
                    controlsList="nodownload noremoteplayback"
                    @play="audioStart()"
                  >
                    <source :src="audioSrc" type="audio/mpeg" />
                  </audio>
                  <h5>Audio can played once only</h5>
                </div>
                <h3 v-cloak>
                  {{ questionIndex + 1 }}.
                  {{
                    questionListening[questionIndex].listen_assessment_question
                      .question
                  }}
                </h3>
                <p>Choose the most correct answer</p>
                <div class="mt-5">
                  <div
                    v-for="answer in questionListening[questionIndex]
                      .listen_assessment_question.answers"
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
                  questionListening[questionIndex]
                "
              >
                <div
                  class="
                    border
                    shadow-sm
                    bg-white
                    rounded
                    py-3
                    mb-3
                    h4
                    text-center
                  "
                >
                  <audio
                    ref="audio"
                    :class="[audioShow ? 'd-inline' : 'd-none']"
                    controls
                    controlsList="nodownload noremoteplayback"
                    @play="audioStart()"
                  >
                    <source :src="audioSrc" type="audio/mpeg" />
                  </audio>
                  <h5>Audio can played once only</h5>
                </div>
                <h3 v-cloak>
                  {{ questionIndex + 1 }}.
                  {{
                    questionListening[questionIndex].listen_assessment_question
                      .question
                  }}
                </h3>
                <p>Choose the most correct answer</p>
                <div class="mt-5">
                  <div
                    v-for="answer in questionListening[questionIndex]
                      .listen_assessment_question.answers"
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
        <div class="pb-4 pr-3">
          <div v-if="startQuiz === false" class="text-center">
            <button class="btn btn-success" v-on:click="start()">Start</button>
          </div>
          <div v-else class="text-right">
            <button
              v-if="questionIndex > 0"
              class="btn btn-primary"
              v-on:click="prev()"
            >
              Previous
            </button>
            <span>
              <button
                v-if="questionIndex === questionListening.length - 1"
                class="btn btn-primary mx-2"
                v-on:click="submit()"
              >
                Submit
              </button>
              <button
                v-if="questionIndex < questionListening.length - 1"
                class="btn btn-primary mx-2"
                v-on:click="next()"
              >
                Next
              </button>
            </span>
          </div>
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
                  v-for="questionItem in questionListening"
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
                          {{ questionItem.listen_assessment_question.question }}
                        </h5>
                      </div>
                      <div
                        class="ml-4"
                        v-for="answerItem in questionItem
                          .listen_assessment_question.answers"
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
                          {{ questionItem.listen_assessment_question.question }}
                        </h5>
                      </div>
                      <div
                        class="ml-4"
                        v-for="answerItem in questionItem
                          .listen_assessment_question.answers"
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
                            Lecture related:
                            <a
                              href="#"
                              class="h5 mb-0 border-primary border-bottom"
                              v-on:click="
                                goToLecture(
                                  questionItem.listen_assessment_question
                                    .lecture_index
                                )
                              "
                            >
                              Lecture
                              {{
                                questionItem.listen_assessment_question
                                  .lecture_index
                              }}
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
                <h3>
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
  filters: {
    uppercase: function (v) {
      return v.charAt(0).toUpperCase() + v.slice(1);
    },
    replace: function (v) {
      return v.replace("_", " ");
    },
  },
  props: {
    typeExam: Number,
    examId: Number,
    courseId: Number,
    related: Array,
  },
  data() {
    return {
      questionListeningPreview: {
        part_1: [],
        part_2: [],
      },
      questionListening: [],
      questionIndex: 0,
      questionNo: "",
      userChoose: [],
      allResults: [],
      checkAnswer: [],
      resultCheck: {
        courseID: "",
        examID: "",
        quizID: "",
        questions: [],
      },
      timeStartDo: new Date(),
      timeDo: 0,
      audioSrc: "",
      audioShow: true,
      audioCodes: {},
      countClick: 0,
      audioPart: 0,
      startQuiz: false,
    };
  },
  watch: {
    typeExam: function (value) {
      this.allResults = [];
      this.questionIndex = 0;
      this.questionListening = [];
      this.audioShow = true;
      this.startQuiz = false;
      this.questionListeningPreview = {
        part_1: [],
        part_2: [],
      };
      this.getQuestion();
      this.getAnswerUser();

      setTimeout(() => {
        this.loadAudio();
      }, 600);
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
    loadAudio() {
      let audio = this.audioCodes.find((item) => {
        return item.part === this.audioPart;
      });
      this.audioSrc = route("audio", audio.audio_code);
      if (this.audioSrc) {
        this.$refs.audio.load();
        this.$refs.audio.play();
      }
    },
    audioStart() {
      this.audioShow = false;
    },
    getQuestion: function () {
      if (this.typeExam === this.$root.$getConst("assessment")) {
        this.getListeningAssessmentQuestionsClient();
      } else if (this.typeExam === this.$root.$getConst("exercise")) {
        this.getListeningExerciseQuestionsClient();
      } else {
        this.getListeningQuizQuestionsClient();
      }
    },
    getListeningAssessmentQuestionsClient() {
      axios
        .get(
          route("site.exam.getListeningAssessmentQuestionsClient", this.examId)
        )
        .then((response) => {
          let arrayQuestionListening = Object.values(response.data.questions);
          this.questionListening = arrayQuestionListening.filter((question) => {
            return question.listen_assessment_question !== null;
          });
          this.questionListening.sort((first, second) => {
            if (
              first.listen_assessment_question.part >
              second.listen_assessment_question.part
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
          this.questionListening.forEach((item) => {
            if (item.listen_assessment_question.part === 1) {
              this.questionListeningPreview.part_1.push(item);
            } else {
              this.questionListeningPreview.part_2.push(item);
            }
          });
          this.audioCodes = response.data.audioCodes;
          this.audioPart = 1;
          setTimeout(() => {
            this.loadAudio();
          }, 1600);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getListeningExerciseQuestionsClient() {
      axios
        .get(
          route("site.exam.getListeningExerciseQuestionsClient", this.examId)
        )
        .then((response) => {
          console.log(response.data.questions);
          let arrayQuestionListening = Object.values(response.data.questions);
          this.questionListening = arrayQuestionListening.filter((question) => {
            return question.listen_assessment_question !== null;
          });
          this.questionListening.sort((first, second) => {
            if (
              first.listen_assessment_question.part >
              second.listen_assessment_question.part
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
          this.questionListening.forEach((item) => {
            if (item.listen_assessment_question.part === 1) {
              this.questionListeningPreview.part_1.push(item);
            } else {
              this.questionListeningPreview.part_2.push(item);
            }
          });
          this.audioCodes = response.data.audioCodes;
          this.audioPart = 1;

          setTimeout(() => {
            this.loadAudio();
          }, 1600);
        })
        .catch((error) => {
          console.error(error);
        });
    },
    getListeningQuizQuestionsClient() {
      axios
        .get(route("site.exam.getListeningQuizQuestionsClient", this.examId))
        .then((response) => {
          console.log(response.data.questions);
          let arrayQuestionListening = Object.values(response.data.questions);
          this.questionListening = arrayQuestionListening.filter((question) => {
            return question.listen_assessment_question !== null;
          });
          this.questionListening.sort((first, second) => {
            if (
              first.listen_assessment_question.part >
              second.listen_assessment_question.part
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
          this.questionListening.forEach((item) => {
            if (item.listen_assessment_question.part === 1) {
              this.questionListeningPreview.part_1.push(item);
            } else {
              this.questionListeningPreview.part_2.push(item);
            }
          });
          this.audioCodes = response.data.audioCodes;
          this.audioPart = 1;
        })
        .catch((error) => {
          console.error(error);
        });
    },
    next: function () {
      if (this.questionIndex < this.questionListening.length - 1) {
        this.userAnswer();
        this.questionIndex++;
      }
      if (
        this.audioPart !==
        this.questionListening[this.questionIndex].listen_assessment_question
          .part
      ) {
        this.audioPart =
          this.questionListening[
            this.questionIndex
          ].listen_assessment_question.part;
        console.log("part update  :>> ", this.audioPart);
        this.audioShow = true;
        this.loadAudio();
      }
    },
    prev: function () {
      if (this.questionIndex > 0) this.questionIndex--;
    },

    check: function () {
      if (undefined) {
        this.checkAnswer.push(0);
      } else {
        for (
          let i = 0;
          i <
          this.questionListening[this.questionIndex].listen_assessment_question
            .answers.length;
          i++
        ) {
          if (
            this.questionListening[this.questionIndex]
              .listen_assessment_question.answers[i].id ===
            this.userChoose[this.questionIndex]
          ) {
            if (
              this.questionListening[this.questionIndex]
                .listen_assessment_question.answers[i].is_correct === 1
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
          localStorage.removeItem("listening_" + this.examId);
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    nextTypeExam() {
      this.$emit("nextTypeExam", this.$root.$getConst("speaking"));
    },
    userAnswer: function () {
      this.userAnswerQuiz({
        answerType: this.$root.$getConst("MC"),
        questionID: parseInt(this.questionListening[this.questionIndex].id),
        answerID: this.userChoose[this.questionIndex] ?? 0,
        time: this.timeDo,
      });
    },
    userAnswerQuiz: function (value) {
      if (this.resultCheck.questions.length === 0) {
        this.resultCheck.courseID = this.courseId;
        this.resultCheck.examID = this.examId;
        this.resultCheck.quizID =
          this.questionListening[this.questionIndex].quiz_id;
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
        "listening_" + this.examId,
        JSON.stringify(this.resultCheck)
      );
    },
    getAnswerUser() {
      this.resultCheck = JSON.parse(
        localStorage.getItem("listening_" + this.examId)
      ) || {
        questions: [],
      };
      this.resultCheck.questions.forEach((item) => {
        this.userChoose.push(item.answerID);
      });
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
            this.$root.$getConst("listening")
          );
        })
        .catch((error) => {
          console.error(error);
        });
    },
    start() {
      this.startQuiz = true;
      setTimeout(() => {
        this.loadAudio();
      }, 600);
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
