<template>
  <div class="h-100 text-primary pt-4">
    <h1 class="text-center font-weight-bold">Listening</h1>
    <div v-if="allResults.length === 0">
      <div
        class="container-fluid h-100 d-flex flex-column justify-content-between"
      >
        <div
          class="py-4 h-100 row justify-content-center lecture overflow-auto"
        >
          <div class="col-lg-8">
            <div class="h-100">
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
                    p-3
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
                  <input
                    :id="'ques' + questionListening[questionIndex].id"
                    :value="questionListening[questionIndex].id"
                    hidden
                    type="number"
                  />
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
                  questionListening[questionIndex]
                "
              >
                <div
                  class="
                    border
                    shadow-sm
                    bg-white
                    rounded
                    p-3
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
                <div
                  v-if="checkAnswer[questionIndex] === $getConst('incorrect')"
                >
                  <div
                    class="p-3 bg-danger rounded h5 text-white font-weight-bold"
                  >
                    Incorrect answer !
                  </div>
                  <h5
                    v-for="answer_item in questionListening[questionIndex]
                      .listen_assessment_question.answers"
                    v-bind:key="answer_item.id"
                    class="text-success"
                  >
                    <span
                      v-if="answer_item.is_correct === $getConst('correct')"
                    >
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
                  {{ questionIndex + 1 }}.
                  {{
                    questionListening[questionIndex].listen_assessment_question
                      .question
                  }}
                </h3>
                <p>Choose the most correct answer</p>
                <div class="mt-5">
                  <input
                    :id="'ques' + questionListening[questionIndex].id"
                    :value="questionListening[questionIndex].id"
                    hidden
                    type="number"
                  />
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
                  questionListening[questionIndex]
                "
              >
                <h3 v-cloak>
                  {{
                    questionListening[questionIndex].listen_assessment_question
                      .id
                  }}.
                  {{
                    questionListening[questionIndex].listen_assessment_question
                      .question
                  }}
                </h3>
                <p>Choose the most correct answer</p>
                <div class="mt-5">
                  <input
                    :id="'ques' + questionListening[questionIndex].id"
                    :value="questionListening[questionIndex].id"
                    hidden
                    type="number"
                  />
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
            </div>
          </div>
        </div>
        <div class="text-right pb-4 pr-3">
          <button
            v-if="questionIndex > 0 && resultCheck[questionIndex]"
            class="btn btn-primary"
            v-on:click="prev()"
          >
            Previous
          </button>
          <span v-if="typeExam === $getConst('exercise')">
            <button class="btn btn-primary mx-2" v-on:click="next()">
              Next
            </button>
          </span>
          <span v-if="typeExam !== $getConst('exercise')">
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
    <div v-else class="mt-5 h-100">
      <div class="text-center">
        <div v-if="typeExam !== $getConst('assessment')">
          <h2 class="text-success">You score {{ allResults.score }}</h2>
          <div class="row justify-content-center align-items-start">
            <div class="col-lg-6 col-md-10 col-12">
              <div
                class="text-left mb-2"
                v-for="result in allResults.quiz_result"
                :key="result.question"
              >
                <div
                  v-for="questionItem in questionListening"
                  v-bind:key="questionItem.id"
                >
                  <h5 v-if="result.is_correct">
                    <i class="fe fe-check-circle text-success"></i>
                    {{ questionItem.listen_assessment_question.question }}
                  </h5>
                  <div v-else>
                    <h5>
                      <i class="fe fe-x-circle text-danger"></i>
                      {{ questionItem.listen_assessment_question.question }}
                    </h5>
                    <h5
                      class="ml-4"
                      v-for="answerItem in questionItem
                        .listen_assessment_question.answers"
                      v-bind:key="answerItem.id"
                    >
                      <span
                        v-if="answerItem.is_correct === $getConst('correct')"
                      >
                        Correct answer is: {{ answerItem.answer }}
                      </span>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
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

export default {
  props: {
    typeExam: Number,
    examId: Number,
    courseId: Number,
  },
  data() {
    return {
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
    };
  },
  mounted() {
    this.getQuestion();
    this.getAnswerUser();

  },
  methods: {
    loadAudio() {
      let audio = this.audioCodes.find((item) => {
        return item.part == this.audioPart;
      });
      this.audioSrc = route("audio", audio.audio_code);
      this.$refs.audio.load();
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
          this.questionListening = response.data.questions.question.filter(
            (question) => {
              return question.listen_assessment_question !== null;
            }
          );
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
          this.audioCodes = response.data.audioCodes;
          this.audioPart = 1;
          this.loadAudio();
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
          this.questionListening = response.data.questions[0].question;
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getListeningQuizQuestionsClient() {
      axios
        .get(route("site.exam.getListeningQuizQuestionsClient", this.examId))
        .then((response) => {
          console.log(response.data.questions);
          this.questionListening = response.data.questions[0].question;
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    next: function () {
      if (this.typeExam !== this.$root.$getConst("exercise")) {
        if (this.questionIndex < this.questionListening.length - 1) {
          console.log("this.questionListening :>> ", this.questionListening);
          this.userAnswer();
          this.questionIndex++;
          if (
            this.audioPart !==
            this.questionListening[this.questionIndex]
              .listen_assessment_question.part
          ) {
            this.audioPart =
              this.questionListening[
                this.questionIndex
              ].listen_assessment_question.part;
            console.log("part update  :>> ", this.audioPart);
            this.loadAudio();
            this.audioShow = true;
          }
        }
      } else {
        if (this.countClick % 2 === 0) {
          this.check(this.questionIndex);
          this.userAnswer();
          if (this.questionIndex === this.questionListening.length - 1) {
            this.submit();
          }
        } else {
          if (this.questionIndex < this.questionListening.length - 1) {
            this.questionIndex++;
          }
        }
        this.countClick++;
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
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    nextTypeExam() {
      this.$emit("nextTypeExam", this.$root.$getConst("speaking"));
    },
    userAnswer: function () {
      this.questionNo = document.getElementById(
        "ques" + this.questionListening[this.questionIndex].id
      ).value;

      this.userAnswerQuiz({
        answerType: this.$root.$getConst("MC"),
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
      localStorage.setItem("listening_"+this.examId, JSON.stringify(this.resultCheck));
    },
    getAnswerUser() {
      this.resultCheck = JSON.parse(localStorage.getItem("listening_"+this.examId)) || {
        questions: [],
      };
      this.resultCheck.questions.forEach((item) => {
        this.userChoose.push(item.answerID);
      });
    },
  },
};
</script>

<style scoped>
</style>
