<template>
  <div class="row mb-4" id="video-lecture">
    <div class="col-lg-9 bg-white">
      <div class="h-100">
        <div
          v-if="
            lectureList[lectureIndex] &&
            lectureList[lectureIndex].model_name == 'Exams'
          "
          class="h-100"
        >
          <quiz-component
            v-cloak
            v-bind:questions="questions"
            v-if="questions"
          ></quiz-component>
        </div>
        <div v-else>
          <vimeo-player
            ref="player"
            :video-id="videoId"
            :video-url="getVideoUrl()"
            class="embed-responsive embed-responsive-16by9"
          />
        </div>
      </div>
    </div>
    <div class="col-lg-3 bg-white">
      <div class="box-list-video text-primary">
        <h2 class="font-weight-bolder pb-2 background-">Course Content</h2>
        <ul
          class="list-group list-group-flush"
          v-for="item in lectureList"
          :key="item.index"
        >
          <button
            class="list-group-item list-group-item-action"
            v-bind:class="{ active: item.index == lectureIndex }"
            v-on:click="onClickLecture(item.index)"
          >
            <div class="d-flex w-100 justify-content-left">
              <div class="my-auto mr-3">
                <input
                  readonly
                  type="checkbox"
                  :value="item.index"
                  name="index"
                  id="index"
                  v-model="studentLecture"
                />
              </div>
              <div v-if="item.model_name == 'Exams'">
                <h4 class="mb-1">
                  {{ item.index }}
                  -
                  {{ item.name }}
                </h4>
                <strong class="text-dark text-wrap">
                  <i class="fe fe-message-square mr-2"></i>
                  <span>Quiz</span>
                </strong>
              </div>

              <div v-if="item.model_name == 'Lecture'">
                <h4 class="mb-1">
                  {{ item.index }}
                  -
                  {{ item.lectures_name }}
                </h4>
                <strong class="text-dark text-wrap">
                  <i class="fe fe-youtube mr-2"></i>
                  <span>Video</span>
                </strong>
              </div>
            </div>
          </button>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import { vueVimeoPlayer } from "vue-vimeo-player";
import QuizComponent from "./QuizComponent";

export default {
  props: {
    courseId: Number,
    userId: Number,
  },
  components: {
    QuizComponent,
    vueVimeoPlayer,
  },
  data() {
    return {
      lectureIndex: 0,
      lectureList: [],
      videoId: "588754544",
      studentLecture: [],
      questions: [],
      quiz: [],
    };
  },
  mounted() {
    this.syncDataLecture();
  },
  methods: {
    getExams() {
      axios
        .get(
          route("site.exam.showLecture", {
            exams: this.lectureList[this.lectureIndex].id,
          }),
          {
            params: {
              version: 1,
              userId: this.userId,
              courseId: this.lectureList[this.lectureIndex].course_id,
              modelName: this.lectureList[this.lectureIndex].model_name,
              index: this.lectureList[this.lectureIndex].index,
              id: this.lectureList[this.lectureIndex].id,
            },
          }
        )
        .then((response) => {
          this.studentLecture.push(this.lectureIndex);
          this.questions = response.data;
          console.log("this.questions :>> ", this.questions);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getVideoUrl() {
      return (
        "https://player.vimeo.com/video/" +
        this.videoId +
        "?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=" +
        process.env.MIX_VIMEO_APP_ID
      );
    },

    syncDataLecture() {
      axios
        .get(route("site.course.lectureList", 2))
        .then((response) => {
          this.studentLecture =
            response.data.student_lecture.watched_list.split(",");

          this.lectureIndex =
            this.studentLecture.length != 0
              ? this.studentLecture[this.studentLecture.length - 2]
              : 0;

          for (let item in response.data.lectures) {
            this.lectureList.push(response.data.lectures[item]);
          }
          this.lectureList.sort(function (a, b) {
            return a.index - b.index;
          });

          if (this.lectureList[this.lectureIndex].model_name === "Exams") {
            this.getExams();
          } else {
            this.getLecture();
          }
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    getLecture() {
      axios
        .get(
          route("site.lecture.showLecture", {
            userId: this.userId,
            courseId: this.lectureList[this.lectureIndex].course_id,
            modelName: this.lectureList[this.lectureIndex].model_name,
            index: this.lectureList[this.lectureIndex].index,
            id: this.lectureList[this.lectureIndex].id,
          })
        )
        .then((response) => {
          this.videoId = response.data.video_resource;
          this.studentLecture.push(this.lectureIndex);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    onClickLecture(index) {
      this.lectureIndex = index;
      if (this.lectureList[index].model_name === "Exams") {
        this.getExams();
      } else {
        this.getLecture();
      }
    },
  },
};
</script>
