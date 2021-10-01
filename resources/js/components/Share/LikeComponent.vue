
<template>
  <div>
    <button
      class="ml-1 border-0 bg-white text-primary h4 mb-0"
      v-on:click="clicklike"
    >
      <img class="ic-action" :src="imageSrc" />

      <div v-if="likeModule === 'Post' || likeModule === 'UserComment'" v-cloak>
        {{ _likeNo }}
      </div>
    </button>
  </div>
</template>

<script>
export default {
  props: {
    userId: Number,
    likeRefId: Number,
    likeModule: String,
    likeNo: Number,
    isLiked: Number,
  },
  mounted: function () {
    this.like = this.isLiked;
    this.imageSrc =
      this.like !== 0
        ? "/images/ic/ic_fullHeart.svg"
        : "/images/ic/ic_heart.svg";
  },
  data() {
    return {
      _likeNo: this.likeNo,
      like: 0,
      imageSrc: "",
    };
  },

  methods: {
    clicklike: function () {
      if (this.like === 0) {
        let data = {
          like_ref_id: this.likeRefId,
          user_id: this.userId,
          like_module: this.likeModule,
        };
        axios
          .post(route("site.user-like.store"), data, {
            headers: {
              "Content-Type": "application/json",
            },
          })
          .then((response) => {
            this.imageSrc = "/images/ic/ic_fullHeart.svg";
            this._likeNo = this._likeNo + 1;
            this.like = 1;
          })
          .catch(function (error) {
            console.error(error);
          });
      } else {
        axios
          .put(route("site.user-like.update", { user_like: this.likeRefId }), {
            like_ref_id: this.likeRefId,
            user_id: this.userId,
            like_module: this.likeModule,
          })
          .then((response) => {
            this.imageSrc = "/images/ic/ic_heart.svg";
            this._likeNo = this._likeNo - 1;
            this.like = 0;
          })
          .catch(function (error) {
            console.error(error);
          });
      }
    },
  },
};
</script>