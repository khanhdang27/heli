<template>
  <div class="h-100">
    <div v-if="typeExercise === $getConst('reading')" class="h-100">
      <reading-component
        v-bind:examId="examId"
        v-bind:typeExam="typeExam"
        v-bind:courseId="courseId"
        @nextTypeExam="nextTypeExam"
      >
      </reading-component>
    </div>
    <div v-if="typeExercise === $getConst('writing')" class="h-100">
      <writing-component
        v-bind:examId="examId"
        v-bind:typeExam="typeExam"
        v-bind:courseId="courseId"
        @nextTypeExam="nextTypeExam"
      >
      </writing-component>
    </div>
    <div v-if="typeExercise === $getConst('listening')" class="h-100">
      <listening-component
        v-bind:examId="examId"
        v-bind:typeExam="typeExam"
        v-bind:courseId="courseId"
        @nextTypeExam="nextTypeExam"
      ></listening-component>
    </div>
    <div v-if="typeExercise === $getConst('speaking')" class="h-100">
      <speaking-component
        v-bind:examId="examId"
        v-bind:typeExam="typeExam"
        v-bind:courseId="courseId"
      ></speaking-component>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    typeExam: Number,
    courseId: Number,
    examId: Number,
  },
  data() {
    return {
      typeExercise: 0,
    };
  },
  created() {
    this.$parent.$on("onclose", this.onClose);
  },
  mounted() {
    this.typeExercise = this.$root.$getConst("speaking");
  },
  methods: {
    nextTypeExam: function (type) {
      this.typeExercise = type;
    },
    onClose() {},
  },
};
</script>

<style scoped>
</style>
