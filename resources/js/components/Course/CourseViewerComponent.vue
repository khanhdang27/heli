<template>
  <div>
    <div class="row mb-4" id="video-lecture">
      <div class="col-lg-9 bg-white">
        <div class="h-100 border border-primary">
          <div
            v-if="
              lectureList[lectureIndex] &&
              lectureList[lectureIndex].model_name == 'Examination'
            "
            class="h-100"
            v-cloak
          >
            <quiz-component
              v-cloak
              v-bind:typeExam="lectureList[lectureIndex].type"
              v-bind:courseId="lectureList[lectureIndex].course_id"
              v-bind:examId="lectureList[lectureIndex].id"
              v-if="questions"
              @goToLecture="onClickLecture(index)"
              @reTryLecture="reTryLecture()"
              @nextToLecture="nextToLecture()"
            ></quiz-component>
          </div>
          <div v-else>
            <vimeo-player
              ref="player"
              :video-id="videoId"
              :video-url="getVideoUrl()"
              @ended="nextToLecture()"
              class="embed-responsive embed-responsive-16by9"
            />
          </div>
        </div>
      </div>
      <div class="col-lg-3 bg-white">
        <div class="box-list-video text-primary lecture overflow-auto">
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
                <div v-if="item.model_name == 'Examination'">
                  <h4 class="mb-1">
                    {{ item.index }}
                    -
                    {{ item.name }}
                  </h4>
                  <strong
                    v-if="item.index <= lectureOpenTo"
                    class="text-dark text-wrap"
                  >
                    <i class="fe fe-message-square mr-2"></i>
                    <span>Quiz</span>
                  </strong>
                  <strong v-else class="text-dark text-wrap">
                    <i class="fe fe-lock mr-2"></i>
                    <span>Quiz</span>
                  </strong>
                </div>

                <div v-if="item.model_name == 'Lecture'">
                  <h4 class="mb-1">
                    {{ item.index }}
                    -
                    {{ item.lectures_name }}
                  </h4>
                  <strong
                    v-if="item.index <= lectureOpenTo"
                    class="text-dark text-wrap"
                  >
                    <i class="fe fe-youtube mr-2"></i>
                    <span>Video</span>
                  </strong>
                  <strong v-else class="text-dark text-wrap">
                    <i class="fe fe-lock mr-2"></i>
                    <span>Video</span>
                  </strong>
                </div>
              </div>
            </button>
          </ul>
        </div>
      </div>
    </div>
    <div v-if="isPassed" class="row mb-4">
      <div class="col-xl-1 col-lg-2 col-1 d-none d-md-block">
        <div class="swiper-button-prev btn-prev btn-prev-tutor" id="btn_prev">
          <div
            class="
              rounded-circle
              border-btn-next
              animate-change-color
              py-3
              px-4
            "
          >
            <p class="h2 text-center mx-2">❮</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-10">
        <swiper :options="swiperOptions">
          <swiper-slide v-for="course in related" :key="course.id">
            <div class="top-product col-12" v-on:click="goToCourse(course.id)">
              <div
                class="content-product py-5 rounded-top-course"
                v-bind:style="{
                  backgroundColor: course.subject.subject_color_background,
                }"
              >
                <div
                  class="
                    body-product-content
                    d-flex
                    flex-column
                    justify-content-between
                    align-items-center
                    col-10
                    mx-auto
                  "
                  v-bind:style="{ color: course.subject.subject_color_text }"
                >
                  <div
                    class="content-top text-wrap w-100"
                    style="text-align: center"
                  >
                    {{ course.subject.certificate.certificate_code }}<br />
                    <div v-if="course.type == 1">Live Course</div>

                    <div v-else>Course Record</div>
                  </div>
                  <div
                    class="box-content-bot py-4 px-5 w-100"
                    style="border: 1px solid"
                  >
                    <div class="content-bot" v-bind:title="course.course_name">
                      {{ course.course_name }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </swiper-slide>
        </swiper>
      </div>
      <div class="col-xl-1 col-lg-2 col-1 d-none d-md-block">
        <div class="swiper-button-next btn-next btn-next-tutor" id="btn_next">
          <div
            class="
              rounded-circle
              border-btn-next
              animate-change-color
              py-2
              px-4
            "
          >
            <p class="m-0 h2 text-center">❯</p>
            <p class="text-nowrap text-center m-0">更多</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { vueVimeoPlayer } from "vue-vimeo-player";
import QuizComponent from "./QuizComponent";
import { swiper, swiperSlide } from "vue-awesome-swiper";
import "swiper/swiper-bundle.css";

export default {
  props: {
    courseId: Number,
    userId: Number,
  },
  components: {
    QuizComponent,
    vueVimeoPlayer,
    swiper,
    swiperSlide,
  },
  data() {
    return {
      lectureIndex: 0,
      lectureList: [],
      videoId: "588754544",
      studentLecture: [],
      lectureOpenTo: 0,
      questions: [],
      quiz: [],
      related: [],
      isPassed: false,
      swiperOptions: {
        speed: 700,
        pagination: {
          dynamicBullets: true,
        },
        navigation: {
          nextEl: ".btn-next-tutor",
          prevEl: ".btn-prev-tutor",
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1200: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1440: {
            slidesPerView: 3,
            spaceBetween: 60,
          },
        },
      },
    };
  },
  created() {
    this.syncDataLecture();
    this.syncCourseRelate();
    setTimeout(() => this.showLecture(), 2000);
  },
  methods: {
    getExamination() {
      axios
        .get(
          route("site.exam.showLecture", {
            exams: this.lectureList[this.lectureIndex].id,
          }),
          {
            params: {
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
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    goToCourse(id) {
      window.location.href = route("site.course.show", id);
    },
    getVideoUrl() {
      return (
        "https://player.vimeo.com/video/" +
        this.videoId +
        "?title=0&amp;byline=0&amp;portrait=0&amp;speed=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=" +
        process.env.MIX_VIMEO_APP_ID
      );
    },
    syncCourseRelate() {
      axios
        .get(route("site.course.related.list", this.courseId))
        .then((response) => {
          this.related = response.data.courses;
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    syncDataLecture() {
      axios
        .get(route("site.course.lectureList", this.courseId))
        .then((response) => {
          this.isPassed = response.data.student_lecture.passed == 1;
          this.studentLecture =
            response.data.student_lecture.watched_list.split(",");

          this.lectureOpenTo = response.data.student_lecture.lecture_open;

          if (this.lectureList.length == 0) {
            this.lectureIndex =
              this.studentLecture.length != 1
                ? this.studentLecture[this.studentLecture.length - 2]
                : 0;
            for (let item in response.data.lectures) {
              this.lectureList.push(response.data.lectures[item]);
            }
            this.lectureList.sort(function (a, b) {
              return a.index - b.index;
            });

            console.log("this.lectureList >>>", this.lectureList);
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
      if (index <= this.lectureOpenTo) {
        this.lectureIndex = index;
      } else {
        confirm("This lecture not open now !");
      }
    },
    reTryLecture() {
      this.syncDataLecture();
      // wait for re-fecth
      setTimeout(() => this.onClickLecture(parseInt(this.lectureIndex)), 800);
    },
    nextToLecture() {
      this.syncDataLecture();
      setTimeout(() => {
        this.onClickLecture(parseInt(this.lectureIndex) + 1);
      }, 2000);
    },
    showLecture() {
      if (this.lectureList[this.lectureIndex]) {
        if (
          this.lectureList[this.lectureIndex].model_name === "Examination"
        ) {
          this.getExamination();
        } else {
          this.getLecture();
        }
      }
    },
  },
};
</script>
