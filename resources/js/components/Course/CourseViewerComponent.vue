<template>
  <div class="row mb-4" id="video-lecture">
    <div class="col-lg-9 bg-white">
      <div class="embed-responsive embed-responsive-16by9">
        <vimeo-player ref="player" :video-id="videoId" :video-url="videoUrl" />
      </div>
    </div>
    <div class="col-lg-3 bg-white">
      <div v-if="!isLogin" class="text-center btn-above-video mt-5">
        <button
          class="btn-register-now mt-0"
          id=""
          data-toggle="modal"
          data-target="#registerModal"
        >
          <h4 class="mb-0 font-weight-bold">Try It Now</h4>
        </button>
      </div>
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
                <input type="checkbox" name="" id="" />
              </div>
              <div>
                <h4 class="mb-1">
                  {{ item.index }}
                  -
                  {{ item.lectures_name || item.name }}
                </h4>
                <div v-if="item.lectures_name">
                  <strong class="text-dark text-wrap">
                    <i class="fe fe-youtube mr-2"></i>
                    <span>Video</span>
                  </strong>
                </div>
                <div v-if="item.name">
                  <strong class="text-dark text-wrap">
                    <i class="fe fe-message-square mr-2"></i>
                    <span>Quiz</span>
                  </strong>
                </div>
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
    isLogin: Boolean,
    courseId: Number,
  },
  components: {
    vueVimeoPlayer,
  },
  data() {
    return {
      lectureList: [],
      videoId: "588754544",
      videoUrl:
        "https://player.vimeo.com/video/" +
        588754544 +
        "?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=" +
        process.env.MIX_VIMEO_APP_ID,
    };
  },
  mounted() {
    this.syncDataLecture();
  },
  methods: {
    syncDataLecture() {
      axios
        .get(route("site.course.lectureList", 2))
        .then((response) => {
          for (let item in response.data) {
            this.lectureList.push(response.data[item]);
          }
          this.lectureList.sort(function (a, b) {
            return a.index - b.index;
          });

          console.log("this.lectureList :>> ", this.lectureList);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    onClickLecture(index) {
      this.lectureList[index];
      console.log("this.lectureList[index] :>> ", this.lectureList[index]);
    },
  },
};
</script>
