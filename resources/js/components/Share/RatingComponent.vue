<template>
  <div>hello</div>
</template>

<script>
export default {
  components: {
    StarRating,
  },
  data() {
    return {
      rating: null,
      resetableRating: 2,
      currentRating: "No Rating",
      mouseOverRating: null,
    };
  },
};
</script>