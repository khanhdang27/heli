<template>
  <div>
    <star-rating
      :rating="rating"
      :star-size="30"
      :show-rating="false"
      :read-only="readOnly"
      :star-points="starPoint"
      :border-width="4"
      border-color="#d8d8d8"
      :rounded-corners="roundedCorners"
      @rating-selected="setRating"
    ></star-rating>
  </div>
</template>

<script>
import StarRating from "vue-star-rating";

export default {
  components: {
    StarRating,
  },
  props: {
    rating: Number,
    readOnly: Boolean,
    courseId: {
      type: Number,
      required: false,
    },
    userId: {
      type: Number,
      required: false,
    },
  },
  data() {
    return {
      starPoint: [],
      roundedCorners: false,
      size: 30,
    };
  },
  mounted: function () {
    this.starPoint = this.readOnly
      ? [
          23, 2, 14, 17, 0, 19, 10, 34, 7, 50, 23, 43, 38, 50, 36, 34, 46, 19,
          31, 17,
        ]
      : [];
    this.roundedCorners = this.readOnly;
    this.size = this.readOnly ? 30 : 20;
  },
  methods: {
    setRating: function (rating) {
      console.log("You have Selected: " + rating + " stars");
      axios
        .post(route("site.rating.store"), {
          course_id: this.courseId,
          user_id: this.userId,
          rate: rating,
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
  },
};
</script>