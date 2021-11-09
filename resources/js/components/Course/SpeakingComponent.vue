<template>
  <div
    class="
      container-fluid
      h-100
      d-flex
      flex-column
      justify-content-between
      text-primary
    "
  >
    <h1 class="mt-4 text-center font-weight-bold">Speaking</h1>
    <div class="py-4 row h-100 justify-content-center lecture overflow-auto">
      <div class="col-lg-8">
        <div class="h-100">
          <div
            v-if="
              typeExam === $getConst('assessment') &&
              questionSpeaking[questionIndex]
            "
          >
            <div
              class="border shadow-sm bg-white rounded p-3 mb-3 h4 text-center"
            >
              <audio
                id="audio"
                controls
                controlsList="nodownload noremoteplayback"
                @play="audioStart()"
                :class="{ 'd-none': audioShow }"
                v-cloak
              >
                <source
                  :src="
                    questionSpeaking[questionIndex].speak_assessment_question
                      .audio_ref
                  "
                  type="audio/mpeg"
                />
              </audio>
              <h5>Audio can played once only</h5>
            </div>
            <h3 v-cloak>
              {{ questionIndex }}
              {{
                questionSpeaking[questionIndex].speak_assessment_question
                  .question
              }}
            </h3>
            <p>Choose the most correct answer</p>
            <div class="mt-5">
              <input
                type="number"
                :id="'ques' + questionSpeaking[questionIndex].id"
                :value="questionSpeaking[questionIndex].id"
                hidden
              />
              <div
                v-for="answer in questionSpeaking[questionIndex]
                  .speak_assessment_question.answers"
                v-bind:key="answer.id"
                class="py-0 my-3 border border-primary rounded answer-selection"
              >
                <input
                  class="ip-answer"
                  type="radio"
                  :id="answer.id"
                  :value="answer.id"
                  v-model="userChoose[questionIndex]"
                  v-bind:disabled="resultCheck.questions[questionIndex]"
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
              questionSpeaking[questionIndex]
            "
          >
            <vimeo-player
              ref="player"
              :video-id="videoId"
              height="100%"
              width="100%"
              :video-url="getVideoUrl()"
              class="embed-responsive embed-responsive-16by9"
            />
          </div>
          <div v-if="typeExam === $getConst('quiz')">
            <h3 v-if="questionSpeaking[questionIndex]" v-cloak>
              {{ questionIndex }}
              {{ questionSpeaking[questionIndex].speak_quiz_question.question }}
            </h3>
            <p>Please record one video with voice that answers all question.</p>
            <div>
              <video
                id="myVideo"
                ref="videoPlayer"
                class="video-js vjs-fluid"
                playsinline
                v-cloak
              ></video>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="button control">
      <div
        class="text-right py-4 pr-3"
        v-if="typeExam === $getConst('assessment')"
      >
        <button
          class="btn btn-primary"
          v-on:click="prev()"
          v-if="questionIndex > 0"
        >
          Previous
        </button>
        <span>
          <button
            class="btn btn-primary mx-2"
            v-on:click="submit()"
            v-if="questionIndex === questionSpeaking.length - 1"
          >
            Submit
          </button>
          <button
            class="btn btn-primary mx-2"
            v-on:click="next()"
            v-if="questionIndex < questionSpeaking.length - 1"
          >
            Next
          </button>
        </span>
      </div>
      <div class="text-right py-4 pr-3" v-if="typeExam === $getConst('quiz')">
        <span>
          <button
            class="btn btn-primary mx-2"
            v-on:click="submit()"
            v-if="questionIndex === questionSpeaking.length - 1"
          >
            Submit
          </button>
          <button
            class="btn btn-primary mx-2"
            v-on:click="next()"
            v-if="questionIndex < questionSpeaking.length - 1"
          >
            Next
          </button>
        </span>
      </div>
    </div>
  </div>
</template>

<script>
import { vueVimeoPlayer } from "vue-vimeo-player";
import "video.js/dist/video-js.css";
import "videojs-record/dist/css/videojs.record.css";
import videojs from "video.js";
import "webrtc-adapter";
import RecordRTC from "recordrtc";

import Record from "videojs-record/dist/videojs.record.js";

export default {
  props: {
    typeExam: Number,
    examId: Number,
    courseId: Number,
  },
  components: {
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
        courseID: "",
        examID: "",
        quizID: "",
        questions: [],
      },
      timeStartDo: "",
      timeDo: "",
      audioShow: false,
      player: "",
      options: {
        controls: true,
        autoplay: false,
        fluid: true,
        loop: false,
        bigPlayButton: true,
        controlBar: {
          volumePanel: false,
        },
        plugins: {
          record: {
            audio: true,
            video: true,
            debug: true,
            maxLength: 1800,
          },
        },
      },
    };
  },
  created() {
    this.getQuestion();
    this.getAnswerUser();
  },
  mounted() {},
  beforeDestroy() {
    if (this.player) {
      this.player.dispose();
    }
  },
  methods: {
    createVideoRecord() {
      // this.player = videojs(this.$refs.videoPlayer);
      this.player = videojs("#myVideo", this.options, () => {
        // print version information at startup
        var msg =
          "Using video.js " +
          videojs.VERSION +
          " with videojs-record " +
          videojs.getPluginVersion("record") +
          " and recordrtc " +
          RecordRTC.version;
        videojs.log(msg);
      });

      // device is ready
      this.player.on("deviceReady", () => {
        console.log("device is ready!");
      });

      // user clicked the record button and started recording
      this.player.on("startRecord", () => {
        console.log("started recording!");
      });

      // user completed recording and stream is available
      this.player.on("finishRecord", () => {
        // the blob object contains the recorded data that
        // can be downloaded by the user, stored on server etc.
        console.log("finished recording: ", this.player.recordedData);
        this.player.record().saveAs({ video: "my-video-file-name.mp4" });
      });

      // error handling
      this.player.on("error", (element, error) => {
        console.warn(error);
      });

      this.player.on("deviceError", () => {
        console.error("device error:", this.player.deviceErrorCode);
      });
    },
    audioStart() {
      this.audioShow = true;
    },
    getQuestion: function () {
      if (this.typeExam === this.$root.$getConst("assessment")) {
        this.getSpeakingAssessmentQuestionsClient();
      } else if (this.typeExam === this.$root.$getConst("exercise")) {
        this.getSpeakingExerciseQuestionsClient();
      } else {
        this.getSpeakingQuizQuestionsClient();
      }
    },
    getSpeakingAssessmentQuestionsClient() {
      axios
        .get(
          route("site.exam.getSpeakingAssessmentQuestionsClient", this.examId)
        )
        .then((response) => {
          this.questionSpeaking = response.data.questions.question.filter(
            (question) => {
              return question.speak_assessment_question !== null;
            }
          );
          this.questionSpeaking.map((item) => {
            item.speak_assessment_question.audio_ref = route(
              "audio",
              this.questionSpeaking[this.questionIndex]
                .speak_assessment_question.audio_ref
            );
          });
          console.log(this.questionSpeaking);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getSpeakingExerciseQuestionsClient() {
      axios
        .get(route("site.exam.getSpeakingExerciseQuestionsClient", this.examId))
        .then((response) => {
          console.log(response.data.questions);
          this.questionSpeaking = response.data.questions.question.filter(
            (question) => {
              return question.speak_exercises_question !== null;
            }
          );
          // this.questionSpeaking = response.data.questions[0].question;
          this.videoId =
            this.questionSpeaking[
              this.questionIndex
            ].speak_exercises_question.video_code;
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getSpeakingQuizQuestionsClient() {
      axios
        .get(route("site.exam.getSpeakingQuizQuestionsClient", this.examId))
        .then((response) => {
          this.questionSpeaking = response.data.questions.question.filter(
            (question) => {
              return question.speak_quiz_question !== null;
            }
          );
          console.log(this.questionSpeaking);
          this.createVideoRecord();
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    next: function () {
      if (this.questionIndex < this.questionSpeaking.length - 1) {
        this.userAnswer();
        this.questionIndex++;
      }
    },
    prev: function () {
      if (this.questionIndex > 0) this.questionIndex--;
    },
    getVideoUrl() {
      let id =
        this.questionSpeaking[this.questionIndex]?.speak_exercises_question
          .video_code || "";
      return (
        "https://player.vimeo.com/video/" +
        id +
        "?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=" +
        process.env.MIX_VIMEO_APP_ID
      );
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
    userAnswer: function () {
      if (this.typeExam === this.$root.$getConst("assessment")) {
        this.questionNo = document.getElementById(
          "ques" + this.questionSpeaking[this.questionIndex].id
        ).value;

        this.userAnswerQuiz({
          answerType: this.$root.$getConst("MC"),
          questionID: parseInt(this.questionNo),
          answerID: this.userChoose[this.questionIndex],
          time: this.timeDo,
        });
      }
    },
    userAnswerQuiz: function (value) {
      if (this.resultCheck.questions.length === 0) {
        this.resultCheck.courseID = this.courseId;
        this.resultCheck.examID = this.examId;
        this.resultCheck.quizID =
          this.questionSpeaking[this.questionIndex].quiz_id;
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
      localStorage.setItem("speaking", JSON.stringify(this.resultCheck));
    },
    getAnswerUser() {
      this.resultCheck = JSON.parse(localStorage.getItem("speaking")) || {
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
