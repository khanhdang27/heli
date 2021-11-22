<template>
    <div class="modal fade" id="modalAssessment" data-backdrop="static" data-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl text-primary modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">First assessment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="onClose">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">You need to complete the assessment before starting any course !</h4>
                    <assessment-component :type-exam="1" :course-id="1" :exam-id="1">
                    </assessment-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods:{
        onClose() {
            this.$emit('onclose');
        }
    }
}
</script>

<style scoped>

</style>
