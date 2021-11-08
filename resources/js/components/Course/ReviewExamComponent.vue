<template>
    <div class="text-primary border shadow rounded p-4">
        <h2 class="font-weight-bold">Review your exams</h2>
        <hr/>
        <div class="list-group border-0">
            <a class="list-group-item list-group-item-action border-0"
               v-for="exam in exams" :key="exam.exam_id"
               :href="routeHref(exam.course_id, exam.exam_id, exam.quiz_id)">
                {{exam.exam.name}}
            </a>
        </div>
        <div>

        </div>
    </div>
</template>

<script>
export default {
    props:{
        exams: [],
    },
    data() {
        return {

        }
    },
    created() {
       this.routeHref()
    },
    methods: {
        routeHref(course, exam, quiz){
            if (course && exam && quiz){
                return route("site.showExam", {course, exam, quiz});
            }
        }
    }
}
</script>

<style scoped>

</style>
