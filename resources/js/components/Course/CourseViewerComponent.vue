<template>
  <div class="row mb-4" id="video-lecture">
    <div class="col-lg-8 bg-white">
      <div class="embed-responsive embed-responsive-16by9">
        <vimeo-player ref="player" :video-id="videoId" :video-url="videoUrl" />
      </div>
    </div>
    <div class="col-lg-4 bg-white">
      <div v-if="isLogin" class="text-center btn-above-video mt-5">
        <button
          class="btn-register-now mt-0"
          id=""
          data-toggle="modal"
          data-target="#registerModal"
        >
          <h4 class="mb-0 font-weight-bold">Try It Now</h4>
        </button>
      </div>
      <div class="box-list-video text-primary pt-3"></div>
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
  mounted() {
    this.syncDataLecture();
  },
  methods: {
    syncDataLecture() {
      axios
        .get(route("site.course.lectureList", 2))
        .then(function (response) {
          // handle success
          console.log(response);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        });
    },
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
};
</script>
