<template>
    <div class="text-primary border shadow rounded p-4">
        <h2 class="font-weight-bold">Review your exams</h2>
        <hr/>
        <div class="list-group border-0">
            <a class="list-group-item list-group-item-action border-0"
               :href="exam.course_id + '/exam/' + exam.exam_id + '/quiz/' +exam.quiz_id"
               v-for="exam in exams" :key="exam.exam_id">
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
    mounted() {
        console.log(this.exams)
    }
}
</script>

<style scoped>

</style>
