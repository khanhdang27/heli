<template>
  <div class="container-fluid h-100 text-primary pt-4">
    <h1 class="text-center font-weight-bold">Speaking</h1>
    <div v-if="allResults.length === 0">
      <div class="py-4 row h-100 justify-content-center lecture overflow-auto">
        <div class="col-lg-8">
          <div class="h-100">
            <div
              v-if="
                typeExam === $getConst('assessment') &&
                startQuiz === true &&
                questionSpeaking[questionIndex]
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
                  v-if="questionSpeaking[questionIndex]"
                  ref="audioSpeaking"
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
                {{ questionIndex + 1 }}
                {{
                  questionSpeaking[questionIndex].speak_assessment_question
                    .question
                }}
              </h3>
              <p>Choose the most correct answer</p>
              <div class="mt-5">
                <div
                  v-for="answer in questionSpeaking[questionIndex]
                    .speak_assessment_question.answers"
                  v-bind:key="answer.id"
                  class="
                    py-0
                    my-3
                    border border-primary
                    rounded
                    answer-selection
                  "
                >
                  <input
                    :id="answer.id"
                    v-model="userChoose[questionIndex]"
                    :value="answer.id"
                    class="ip-answer"
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
                questionSpeaking[questionIndex]
              "
            >
              <h3 v-if="videoId === videoPracticeId">
                Video for you to self-practice
              </h3>
              <h3 v-else>A guide for you how to response</h3>
              <vimeo-player
                ref="player"
                :video-id="videoId"
                :video-url="getVideoUrl(videoId)"
                class="embed-responsive embed-responsive-16by9"
                height="100%"
                width="100%"
              />
            </div>
            <div
              class="text-center"
              v-if="typeExam !== $getConst('exercise') && startQuiz === false"
            >
              <button class="btn btn-success" v-on:click="start()">
                Start
              </button>
            </div>
            <div v-else>
              <div class="h-100" v-if="typeExam === $getConst('quiz')">
                <div
                  class="h4 text-center timer mb-3"
                  v-if="pause === true || showLastQuestion === true"
                >
                  <vue-countdown-timer
                    id="timePause"
                    v-if="pause === true"
                    @start_callback="startCallBackTimePause('event started')"
                    @end_callback="endCallBackTimePause('event ended')"
                    :start-time="timeNow"
                    :end-time="timeEnd"
                    :interval="1000"
                    :start-label="'Until start:'"
                    :end-label="'You have 1 minute to ready answer'"
                    label-position="begin"
                    :end-text="''"
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
                      <h5 class="mt-3">
                        After 1 minute is over, you will have 2 minutes to
                        answer this question.
                      </h5>
                    </template>
                  </vue-countdown-timer>
                  <vue-countdown-timer
                    id="timeAnswer"
                    v-if="showLastQuestion === true"
                    @start_callback="startCallBack('event started')"
                    @end_callback="endCallBack('event ended')"
                    :start-time="timeStartAnswer"
                    :end-time="timeEndAnswer"
                    :interval="1000"
                    :start-label="'Until start:'"
                    :end-label="'Time limit'"
                    label-position="begin"
                    :end-text="''"
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
                <h3 v-if="questionSpeaking[questionIndex]">
                  {{ questionIndex + 1 }}
                  {{
                    questionSpeaking[questionIndex].speak_quiz_question.question
                  }}
                </h3>
                <p>
                  Please record one video with voice that answers all question.
                </p>
                <div>
                  <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                      <video
                        v-cloak
                        id="myVideo"
                        ref="videoPlayer"
                        class="
                          video-js
                          vjs-layout-x-small vjs-layout-medium vjs-layout-large
                        "
                        playsinline
                      ></video>
                    </div>
                    <div class="col-2"></div>
                  </div>
                  <div
                    id="progress"
                    class="
                      progress-bar progress-bar-info progress-bar-striped
                      active
                    "
                    role="progressbar"
                    aria-valuenow="46"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 0%"
                  >
                    &nbsp;0%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button control">
        <div
          v-if="typeExam !== $getConst('exercise') && startQuiz === true"
          class="text-right py-4 pr-3"
        >
          <button
            v-if="questionIndex > 0 && typeExam === $getConst('assessment')"
            class="btn btn-primary"
            v-on:click="prev()"
          >
            Previous
          </button>
          <span>
            <button
              v-if="questionIndex === questionSpeaking.length - 1"
              class="btn btn-primary mx-2"
              v-on:click="submit()"
            >
              Submit
            </button>
            <span v-if="typeExam === $getConst('assessment')">
              <button
                v-if="questionIndex < questionSpeaking.length - 1"
                class="btn btn-primary mx-2"
                v-on:click="next()"
              >
                Next
              </button>
            </span>
            <span v-else>
              <button
                v-if="
                  startRecord === true &&
                  questionIndex < questionSpeaking.length - 1
                "
                class="btn btn-primary mx-2"
                v-on:click="next()"
              >
                Next
              </button>
            </span>
          </span>
        </div>
        <div
          class="text-right py-4 pr-3"
          v-if="typeExam == $getConst('exercise')"
        >
          <span>
            <button
              class="btn btn-primary mx-2"
              v-on:click="
                showVideoExercise(videoPracticeId, $getConst('practice'))
              "
              v-if="showButtonPractice === true"
            >
              Practice
            </button>
            <button
              class="btn btn-primary mx-2"
              v-on:click="
                showVideoExercise(videoResponseId, $getConst('response'))
              "
              v-if="showButtonPractice === false"
            >
              How to response
            </button>
          </span>
        </div>
      </div>
    </div>
    <div v-else class="h-100">
      <div class="text-center">
        <div v-if="typeExam !== $getConst('assessment')">
          <div class="text-success">
            <h2>You have completed this section.</h2>
            <h2>
              Your exam is being graded by the tutor. Please wait for the
              results and come back later!
            </h2>
          </div>
        </div>
        <div v-else class="py-5">
          <h2>Congratulation! You got level: {{ allResults.passgrade }}</h2>
          <button
            class="btn btn-primary btn-lg btn-block mt-5"
            @click="cleanOldAnswers()"
          >
            Start the Course
          </button>
        </div>
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

import VimeoUpload from "../../../../public/js/admin/vimeo-upload.js";

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
      player: "",
      options: {
        controls: true,
        autoplay: false,
        fluid: true,
        responsive: true,
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
      allResults: [],
      countClick: 0,
      audioSrc: "",
      audioShow: true,
      timeNow: "",
      timeEnd: "",
      timeStartAnswer: "",
      timeEndAnswer: "",
      pause: false,
      showLastQuestion: false,
      videoPracticeId: "",
      videoResponseId: "",
      videoSubmitID: null,
      startQuiz: false,
      startRecord: false,
      showButtonPractice: false,
      longQuestionPosition: 10,
    };
  },
  watch: {
    typeExam: function (value) {
      this.allResults = [];
      this.questionIndex = 0;
      this.questionSpeaking = [];
      this.getQuestion();
      this.getAnswerUser();
    },
  },
  mounted() {
    this.getQuestion();
    this.getAnswerUser();
  },
  beforeDestroy() {
    if (this.player) {
      this.player.dispose();
    }
  },
  methods: {
    loadAudio() {
      this.audioSrc = route(
        "audio",
        this.questionSpeaking[this.questionIndex].speak_assessment_question
          .audio_ref
      );
      this.$refs.audioSpeaking.load();
      this.$refs.audioSpeaking.play();
    },
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
        this.startRecord = true;
      });

      // user completed recording and stream is available
      this.player.on("finishRecord", () => {
        // the blob object contains the recorded data that
        // can be downloaded by the user, stored on server etc.
        console.log("finished recording: ", this.player.recordedData);
        this.uploadVideo(
          "student_answer_" + new Date().getTime(),
          this.player.recordedData
        );
        this.player.record().saveAs({ video: "my-video.mp4" });
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
      this.audioShow = false;
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
          this.questionSpeaking = response.data.questions.filter((question) => {
            return question.speak_assessment_question !== null;
          });
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getSpeakingExerciseQuestionsClient() {
      axios
        .get(route("site.exam.getSpeakingExerciseQuestionsClient", this.examId))
        .then((response) => {
          this.questionSpeaking = response.data.questions.filter((question) => {
            return question.speak_exercises_question !== null;
          });
          this.videoPracticeId =
            this.questionSpeaking[
              this.questionIndex
            ].speak_exercises_question.video_code_practice;
          this.videoResponseId =
            this.questionSpeaking[
              this.questionIndex
            ].speak_exercises_question.video_code_response;
          this.videoId = this.videoPracticeId;
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getSpeakingQuizQuestionsClient() {
      axios
        .get(route("site.exam.getSpeakingQuizQuestionsClient", this.examId))
        .then((response) => {
          console.log(response.data);
          let arrayQuestionSpeaking = Object.values(response.data.questions);
          this.questionSpeaking = arrayQuestionSpeaking.filter((question) => {
            return question.speak_quiz_question !== null;
          });
          let long_question = "";
          this.questionSpeaking.forEach((item, index) => {
            if (item.speak_quiz_question.long_answer) {
              long_question = this.questionSpeaking.splice(index, 1);
            }
          });
          if (long_question !== "") {
            if (this.questionSpeaking.length >= 3) {
              this.questionSpeaking.splice(3, 0, long_question[0]);
              this.longQuestionPosition = 3;
            } else {
              this.questionSpeaking.push(long_question[0]);
              this.longQuestionPosition = this.questionSpeaking.length - 1;
            }
          }
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    next: function () {
      if (this.questionIndex < this.questionSpeaking.length - 1) {
        if (this.typeExam === this.$root.$getConst("assessment")) {
          this.userAnswer();
          this.loadAudio();
        } else {
          if (this.questionIndex === this.longQuestionPosition - 1) {
            this.pause = true;
            this.timeNow = new Date();
            this.timeEnd = new Date();
            this.timeEnd.setMinutes(this.timeEnd.getMinutes() + 1);
            console.log("timePause", this.pause);
          }
          if (this.questionIndex === this.longQuestionPosition) {
            this.pause = false;
            this.showLastQuestion = false;
          }
        }
        if (this.typeExam === this.$root.$getConst("quiz")) {
          this.userAnswer();
        }
        this.questionIndex++;
      }
    },
    prev: function () {
      if (this.questionIndex > 0) this.questionIndex--;
    },
    getVideoUrl(id) {
      return (
        "https://player.vimeo.com/video/" +
        id +
        "?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=" +
        process.env.MIX_VIMEO_APP_ID
      );
    },
    submit: function () {
      this.userAnswer();
      if (this.typeExam === this.$root.$getConst("quiz")) {
        this.player.record().stop();
      } else {
        axios
          .post(route("site.exam.handleSubmitAnswer"), this.resultCheck)
          .then((data) => {
            this.allResults = data.data;
          })
          .catch((error) => {
            console.log("error :>> ", error);
          });
      }
    },
    userAnswer: function () {
      this.timeDo = (new Date() - this.timeStartDo) / 1000;
      this.timeStartDo = new Date();
      if (this.typeExam === this.$root.$getConst("assessment")) {
        this.userAnswerQuiz({
          answerType: this.$root.$getConst("MC"),
          questionID: parseInt(this.questionSpeaking[this.questionIndex].id),
          answerID: this.userChoose[this.questionIndex] || 0,
          time: this.timeDo,
        });
      } else if (this.typeExam === this.$root.$getConst("quiz")) {
        this.userAnswerQuiz({
          answerType: this.$root.$getConst("Video"),
          questionID: parseInt(this.questionSpeaking[this.questionIndex].id),
          answerID: "",
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
      localStorage.setItem(
        "speaking_" + this.examId,
        JSON.stringify(this.resultCheck)
      );
    },
    getAnswerUser() {
      this.resultCheck = JSON.parse(
        localStorage.getItem("speaking_" + this.examId)
      ) || {
        questions: [],
      };
      this.resultCheck.questions.forEach((item) => {
        this.userChoose.push(item.answerID);
      });
    },
    startCallBackTimePause: function (x) {
      console.log(x);
    },
    endCallBackTimePause: function (x) {
      console.log(x);
      this.pause = false;
      this.showLastQuestion = true;
      this.timeStartAnswer = new Date();
      this.timeEndAnswer = new Date();
      this.timeEndAnswer.setMinutes(this.timeEnd.getMinutes() + 2);
    },
    startCallBack: function (x) {},
    endCallBack: function (x) {
      this.next();
    },
    cleanOldAnswers() {
      localStorage.removeItem("speaking_" + this.examId);
      localStorage.removeItem("listening_" + this.examId);
      localStorage.removeItem("writing_" + this.examId);
      localStorage.removeItem("reading_" + this.examId);
      window.location.reload();
    },
    showVideoExercise(video, typeVideo) {
      this.videoId = video;
      this.showButtonPractice =
        typeVideo === this.$root.$getConst("response") ? true : false;
    },
    uploadVideo(fileName, file) {
      new VimeoUpload({
        name: fileName,
        description: fileName,
        private: true,
        file: file,
        // MIX_VIMEO_TOKEN
        token: process.env.MIX_VIMEO_TOKEN,
        upgrade_to_1080: true,
        onError: (data) => {},
        onProgress: (data) => {
          console.log("data >>", data.loaded);
          this.updateProgress(data.loaded / data.total);
        },
        onComplete: (videoId, index) => {
          this.videoSubmitID = videoId;
          console.log("this.resultCheck :>> ", this.resultCheck);
          this.resultCheck.questions.map((item) => {
            return (item.answerID = this.videoSubmitID);
          });
          axios
            .post(route("site.exam.handleSubmitAnswer"), this.resultCheck)
            .then((data) => {
              console.log("push data success");
              this.allResults = data.data;
              localStorage.removeItem("speaking_" + this.examId);
            })
            .catch((error) => {
              console.log("error :>> ", error);
            });
        },
      }).upload();
    },
    updateProgress(progress) {
      progress = Math.floor(progress * 100);
      var element = document.getElementById("progress");
      element.setAttribute("style", "width:" + progress + "%");
      element.innerHTML = "&nbsp;" + progress + "%";
    },
    start() {
      if (this.typeExam === this.$root.$getConst("assessment")) {
        setTimeout(() => {
          this.loadAudio();
        }, 600);
      }
      if (this.typeExam === this.$root.$getConst("quiz")) {
        setTimeout(() => {
          this.createVideoRecord();
        }, 600);
      }
      this.startQuiz = true;
      this.timeStartDo = new Date();
    },
  },
};
</script>

<style scoped>
.timer {
  min-height: 60px;
}
</style>
