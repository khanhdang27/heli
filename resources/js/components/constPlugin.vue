<script>
const Numbers = {
    assessment: 1,
    exercise: 2,
    quiz: 3,
    correct: 1,
    incorrect: -1,
    reading: 10,
    writing: 20,
    listening: 30,
    speaking: 40,
};
Numbers.install = function (Vue) {
    Vue.prototype.$getConst = (key) => {
        return Numbers[key];
    }
};
export default Numbers;
</script>
