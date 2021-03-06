/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import vueVimeoPlayer from 'vue-vimeo-player'
import CKEditor from 'ckeditor4-vue';
import VueCountdownTimer from 'vuejs-countdown-timer';
import constPlugin from "./components/constPlugin";

require('./bootstrap');
require('./vimeo-upload');

window.Vue = require('vue');
Vue.use(vueVimeoPlayer);
Vue.use(CKEditor);
Vue.use(VueCountdownTimer);
Vue.use(constPlugin);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('top-up-component', require('./components/Wallet/TopUpComponent.vue').default);
Vue.component('top-up-history-component', require('./components/Wallet/TopUpHistoryComponent.vue').default);
Vue.component('payment-history-component', require('./components/Wallet/PaymentHistoryComponent.vue').default);

Vue.component('like-component', require('./components/Share/LikeComponent.vue').default);
Vue.component('rating-component', require('./components/Share/RatingComponent.vue').default);
Vue.component('lecture-component', require('./components/Course/CourseViewerComponent.vue').default);
Vue.component('quiz-component', require('./components/Course/QuizComponent.vue').default);
Vue.component('reading-component', require('./components/Course/ReadingComponent.vue').default);
Vue.component('writing-component', require('./components/Course/WritingComponent.vue').default);
Vue.component('listening-component', require('./components/Course/ListeningComponent.vue').default);
Vue.component('speaking-component', require('./components/Course/SpeakingComponent.vue').default);
Vue.component('assessment-component', require('./components/Course/AssessmentComponent.vue').default);
Vue.component('modal-assessment-component', require('./components/Course/ModalAssessmentComponent.vue').default);

Vue.component('review-exam-component', require('./components/Course/ReviewExamComponent.vue').default);

Vue.component('blog-latest-component', require('./components/Blog/BlogLatestComponent.vue').default);
Vue.component('news-component', require('./components/Blog/NewsComponent.vue').default);
Vue.component('blog-page-tag-component', require('./components/Blog/BlogPageTagComponent.vue').default);

Vue.component('slide-tutor-component', require('./components/Home/SlideTutorComponent.vue').default);
Vue.component('subscribe-container', require('./components/Share/SubscribeContainer.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    data() {
        return {
            chooseValue: 0
        }
    }
});
