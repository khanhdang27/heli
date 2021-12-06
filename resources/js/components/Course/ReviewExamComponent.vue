<template>
  <div class="text-primary border shadow rounded p-4">
    <h2 class="font-weight-bold">Review your exams</h2>
    <hr />
    <div class="list-group border-0">
      <a
        class="list-group-item list-group-item-action border-0"
        v-for="(exam, index) in exams"
        :key="index"
        :href="routeHref(exam.student_course_id, exam.exam_id, exam.quiz_id)"
        target="_blank"
      >
        {{ exam.exam.name }}
      </a>
    </div>
    <div></div>
  </div>
</template>

<script>
export default {
  props: {
    exams: [],
  },
  data() {
    return {};
  },
  methods: {
    routeHref(course, exam, quiz) {
      if (course && exam && quiz) {
        return route("site.showExam", { course, exam, quiz });
      }
    },
  },
};
</script>

<style scoped>
</style>
