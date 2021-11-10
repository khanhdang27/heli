<template>
  <div>
    <div class="row mb-4" id="video-lecture">
      <div class="col-lg-9 bg-white">
        <div class="min-vh-50 h-100 border border-primary">
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
          <div v-else-if="videoId">
            <vimeo-player
              ref="player"
              :video-id="videoId"
              :video-url="getVideoUrl()"
              @ended="nextToLecture()"
              class="embed-responsive embed-responsive-16by9"
            />
          </div>
          <div v-else></div>
        </div>
      </div>
      <div class="col-lg-3 bg-white">
        <div class="box-list-video text-primary lecture overflow-auto">
          <h2 class="font-weight-bolder pb-2 background-">Course Content</h2>
          <!-- +++++++++++++++++++++++++++++ -->
          <div class="container vue">
            <div v-for="(group, key) in lectureCollapse" :key="key">
              <button
                class="btn btn-outline-primary btn-lg btn-block"
                @click="toggleExpansion(key)"
              >
                <h3>
                  {{ key | uppercase }}
                </h3>
              </button>
              <div v-show="isExpanded(key)">
                <div
                  v-for="(items, key) in group"
                  :key="key"
                  class="list-group list-group-flush"
                >
                  <div
                    class="border-bottom mt-1 d-flex justify-content-between"
                  >
                    <div class="h4">
                      {{ key | uppercase | replace }}
                    </div>
                    <button
                      class="btn btn-primary btn-sm my-2"
                      ref="skip_button"
                      :data-level="key"
                      v-if="key !== 'level_65'"
                      data-toggle="modal"
                      data-target="#skip_level"
                    >
                      skip level >
                    </button>
                  </div>
                  <div v-for="item in items" :key="item.id">
                    <div class="d-flex">
                      <button
                        class="list-group-item list-group-item-action border-0"
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
                              {{
                                item.type == $getConst("exercise")
                                  ? "Exercise"
                                  : "Quiz"
                              }}
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
                        <div v-if="item.model_name == 'Lecture' && item.file">
                          <a
                            class="
                              btn btn-light
                              text-nowrap
                              font-weight-bold
                              shadow-sm
                              h-100
                              pt-4
                            "
                            v-bind:href="downloadPDF(item.file)"
                          >
                            <i class="fe fe-download"></i> PDF</a
                          >
                        </div>
                      </button>
                      <div v-if="item.model_name == 'Lecture' && item.file">
                        <a
                          class="
                            btn btn-light
                            text-nowrap
                            font-weight-bold
                            shadow-sm
                            h-100
                            pt-4
                          "
                          v-bind:href="downloadPDF(item.file)"
                        >
                          <i class="fe fe-download"></i> PDF</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr />
            </div>
          </div>
          <!-- +++++++++++++++++++++++++++++ -->
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
          <div v-if="isPassed" class="row mb-4">
            <div class="col-xl-1 col-lg-2 col-1 d-none d-md-block">
              <div
                class="swiper-button-prev btn-prev btn-prev-tutor"
                id="btn_prev"
              >
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
                  <div
                    class="top-product col-12"
                    v-on:click="goToCourse(course.id)"
                  >
                    <div
                      class="content-product py-5 rounded-top-course"
                      v-bind:style="{
                        backgroundColor:
                          course.subject.subject_color_background,
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
                        v-bind:style="{
                          color: course.subject.subject_color_text,
                        }"
                      >
                        <div
                          class="content-top text-wrap w-100"
                          style="text-align: center"
                        >
                          {{ course.subject.certificate.certificate_code
                          }}<br />
                          <div v-if="course.type == 1">Live Course</div>

                          <div v-else>Course Record</div>
                        </div>
                        <div
                          class="box-content-bot py-4 px-5 w-100"
                          style="border: 1px solid"
                        >
                          <div
                            class="content-bot"
                            v-bind:title="course.course_name"
                          >
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
              <div
                class="swiper-button-next btn-next btn-next-tutor"
                id="btn_next"
              >
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
      </div>
    <div
      class="modal fade"
      ref="modal_skip"
      id="skip_level"
      tabindex="-1"
      role="dialog"
      aria-labelledby="skipModalComfirm"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="skipModalComfirm">Skip Level</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4 class="text-danger">
              You will pay <strong>{{ tokenSkip }} Tokens </strong> to skip this
              level
            </h4>
            <h5>
              Use this opportunity to shorten your study time effectively, good
              luck
            </h5>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary" @click="buySkip()">
              Save changes
            </button>
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
  filters: {
    uppercase: function (v) {
      return v.charAt(0).toUpperCase() + v.slice(1);
    },
    replace: function (v) {
      return v.replace("_", " ");
    },
  },
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
      expandedGroup: [],
      lectureIndex: 0,
      lectureList: [],
      lectureCollapse: {
        reading: {
          level_50: [],
          level_55: [],
          level_60: [],
          level_65: [],
        },
        listening: {
          level_50: [],
          level_55: [],
          level_60: [],
          level_65: [],
        },
        speaking: {
          level_50: [],
          level_55: [],
          level_60: [],
          level_65: [],
        },
        writing: {
          level_50: [],
          level_55: [],
          level_60: [],
          level_65: [],
        },
      },
      videoId: "",
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
      tokenSkip: 9999,
    };
  },
  created() {
    this.syncDataLecture();
    this.syncCourseRelate();
    this.downloadPDF();
    setTimeout(() => this.showLecture(), 2000);
  },
  mounted() {
    $(this.$refs.modal_skip).on("shown.bs.modal", (event) => {
      var button = $(event.relatedTarget);
      var level = button.data("level");
      console.log("level >>>", level);
      axios
        .get(route("site.token.skipPrice"), {
          params: { level: level },
        })
        .then((data) => {
          console.log(data);
          this.tokenSkip = data.data.token;
        })
        .catch((error) => {});
    });
  },
  methods: {
    buySkip() {
      axios
        .post(route("site.token.skipPrice.pay"), {
          price: this.tokenSkip,
        })
        .then((data) => {
          console.log(data);
        })
        .catch((error) => {});
    },
    isExpanded(key) {
      return this.expandedGroup.indexOf(key) !== -1;
    },
    toggleExpansion(key) {
      if (this.isExpanded(key))
        this.expandedGroup.splice(this.expandedGroup.indexOf(key), 1);
      else this.expandedGroup.push(key);
    },
    downloadPDF(lecture) {
      if (lecture) {
        return route("site.file.download", lecture);
      }
    },
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
            let _lectures = response.data.lectures;
            for (let item in _lectures) {
              this.lectureList.push(_lectures[item]);
              if (_lectures[item].model_name === "Examination") {
                if (_lectures[item].type === this.$root.$getConst("exercise")) {
                  _lectures[item].index = 999;
                  this.addExamsToAllPart(
                    _lectures,
                    item,
                    _lectures[item].level
                  );
                } else if (
                  _lectures[item].type === this.$root.$getConst("quiz")
                ) {
                  _lectures[item].index = 1000;
                  this.addExamsToAllPart(
                    _lectures,
                    item,
                    _lectures[item].level
                  );
                } else {
                  // do not thing with assessment
                }
              } else {
                if (_lectures[item].type === this.$root.$getConst("reading")) {
                  this.addLectureByReading(_lectures, item);
                }
                if (_lectures[item].type === this.$root.$getConst("writing")) {
                  // this.lectureCollapse.writing.push(_lectures[item]);
                  this.addLectureByWriting(_lectures, item);
                }
                if (
                  _lectures[item].type === this.$root.$getConst("listening")
                ) {
                  // this.lectureCollapse.listening.push(_lectures[item]);
                  this.addLectureByListening(_lectures, item);
                }
                if (_lectures[item].type === this.$root.$getConst("speaking")) {
                  // this.lectureCollapse.speaking.push(_lectures[item]);
                  this.addLectureBySpeaking(_lectures, item);
                }
              }
            }
            this.sortLecture(_lectures);
            // console.log("this.lectureList >>>", this.lectureList);
            // console.log("this.lectureCollapse :>> ", this.lectureCollapse);
          }
        })
        .catch(function (error) {
          console.error(error);
        });
    },
    addExamsToAllPart(lectures, index, part) {
      switch (part) {
        case this.$root.$getConst("level_50"):
          this.lectureCollapse.reading.level_50.push(lectures[index]);
          this.lectureCollapse.listening.level_50.push(lectures[index]);
          this.lectureCollapse.speaking.level_50.push(lectures[index]);
          this.lectureCollapse.writing.level_50.push(lectures[index]);
          break;
        case this.$root.$getConst("level_55"):
          this.lectureCollapse.reading.level_55.push(lectures[index]);
          this.lectureCollapse.listening.level_55.push(lectures[index]);
          this.lectureCollapse.speaking.level_55.push(lectures[index]);
          this.lectureCollapse.writing.level_55.push(lectures[index]);
          break;
        case this.$root.$getConst("level_60"):
          this.lectureCollapse.reading.level_60.push(lectures[index]);
          this.lectureCollapse.listening.level_60.push(lectures[index]);
          this.lectureCollapse.speaking.level_60.push(lectures[index]);
          this.lectureCollapse.writing.level_60.push(lectures[index]);
          break;
        case this.$root.$getConst("level_65"):
          this.lectureCollapse.reading.level_65.push(lectures[index]);
          this.lectureCollapse.listening.level_65.push(lectures[index]);
          this.lectureCollapse.speaking.level_65.push(lectures[index]);
          this.lectureCollapse.writing.level_65.push(lectures[index]);
          break;

        default:
          break;
      }
    },
    addLectureBySpeaking(lectures, index) {
      switch (lectures[index].level) {
        case this.$root.$getConst("level_50"):
          this.lectureCollapse.speaking.level_50.push(lectures[index]);
          break;
        case this.$root.$getConst("level_55"):
          this.lectureCollapse.speaking.level_55.push(lectures[index]);
          break;
        case this.$root.$getConst("level_60"):
          this.lectureCollapse.speaking.level_60.push(lectures[index]);
          break;
        case this.$root.$getConst("level_65"):
          this.lectureCollapse.speaking.level_65.push(lectures[index]);
          break;
        default:
          break;
      }
    },
    addLectureByListening(lectures, index) {
      switch (lectures[index].level) {
        case this.$root.$getConst("level_50"):
          this.lectureCollapse.listening.level_50.push(lectures[index]);
          break;
        case this.$root.$getConst("level_55"):
          this.lectureCollapse.listening.level_55.push(lectures[index]);
          break;
        case this.$root.$getConst("level_60"):
          this.lectureCollapse.listening.level_60.push(lectures[index]);
          break;
        case this.$root.$getConst("level_65"):
          this.lectureCollapse.listening.level_65.push(lectures[index]);
          break;
        default:
          break;
      }
    },
    addLectureByReading(lectures, index) {
      switch (lectures[index].level) {
        case this.$root.$getConst("level_50"):
          this.lectureCollapse.reading.level_50.push(lectures[index]);
          break;
        case this.$root.$getConst("level_55"):
          this.lectureCollapse.reading.level_55.push(lectures[index]);
          break;
        case this.$root.$getConst("level_60"):
          this.lectureCollapse.reading.level_60.push(lectures[index]);
          break;
        case this.$root.$getConst("level_65"):
          this.lectureCollapse.reading.level_65.push(lectures[index]);
          break;
        default:
          break;
      }
    },
    addLectureByWriting(lectures, index) {
      switch (lectures[index].level) {
        case this.$root.$getConst("level_50"):
          this.lectureCollapse.writing.level_50.push(lectures[index]);
          break;
        case this.$root.$getConst("level_55"):
          this.lectureCollapse.writing.level_55.push(lectures[index]);
          break;
        case this.$root.$getConst("level_60"):
          this.lectureCollapse.writing.level_60.push(lectures[index]);
          break;
        case this.$root.$getConst("level_65"):
          this.lectureCollapse.writing.level_65.push(lectures[index]);
          break;
        default:
          break;
      }
    },
    sortLecture(lectures) {
      // level 5
      this.lectureCollapse.reading.level_50.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.writing.level_50.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.listening.level_50.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.speaking.level_50.sort(function (a, b) {
        return a.index - b.index;
      });
      // level 5.5
      this.lectureCollapse.reading.level_55.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.writing.level_55.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.listening.level_55.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.speaking.level_55.sort(function (a, b) {
        return a.index - b.index;
      });
      // level 6.0
      this.lectureCollapse.reading.level_60.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.writing.level_60.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.listening.level_60.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.speaking.level_60.sort(function (a, b) {
        return a.index - b.index;
      });
      // level 6.6
      this.lectureCollapse.reading.level_65.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.writing.level_65.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.listening.level_65.sort(function (a, b) {
        return a.index - b.index;
      });
      this.lectureCollapse.speaking.level_65.sort(function (a, b) {
        return a.index - b.index;
      });

      this.lectureList.sort(function (a, b) {
        return a.index - b.index;
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
        if (this.lectureList[this.lectureIndex].model_name === "Examination") {
          this.getExamination();
        } else {
          this.getLecture();
        }
      }
    },
  },
};
</script>
