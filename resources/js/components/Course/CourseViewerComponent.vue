<template>
  <div class="row mb-4" id="video-lecture">
    <div class="col-lg-9 bg-white">
      <div class="embed-responsive embed-responsive-16by9">
        <vimeo-player
          ref="player"
          :video-id="videoId"
          :video-url="getVideoUrl()"
        />
      </div>
    </div>
    <div class="col-lg-3 bg-white">
      <div class="box-list-video text-primary">
        <h2 class="font-weight-bolder pb-2">Course Content</h2>
        <ul
          class="list-group list-group-flush"
          v-for="item in lectureList"
          :key="item.index"
        >
          <button
            class="list-group-item list-group-item-action"
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

export default {
  props: {
    courseId: Number,
    userId: Number,
  },
  components: {
    vueVimeoPlayer,
  },
  data() {
    return {
      lectureList: [],
      videoId: "588754544",
      studentLecture: [],
      //
    };
  },
  mounted() {
    this.syncDataLecture();
  },
  methods: {
    isWatch(index) {
      return this.studentLecture.includes(index);
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
          console.log("this.data :>> ", response.data);

          this.studentLecture =
            response.data.student_lecture.watched_list.split(",");

          for (let item in response.data.lectures) {
            this.lectureList.push(response.data.lectures[item]);
          }
          this.lectureList.sort(function (a, b) {
            return a.index - b.index;
          });
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    onClickLecture(index) {
      console.log("this.lectureList[index] :>> ", this.lectureList[index]);
      axios
        .get(
          route("site.lecture.showLecture", {
            userId: this.userId,
            courseId: this.lectureList[index].course_id,
            modelName: this.lectureList[index].model_name,
            index: this.lectureList[index].index,
            id: this.lectureList[index].id,
          })
        )
        .then((response) => {
          console.info("response >> ", response);
          this.videoId = response.data.video_resource;
          this.studentLecture.push(index);
          console.info("this.videoId >> ", this.videoId);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
  },
};
</script>
