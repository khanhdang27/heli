<script>
const Numbers = {
    assessment: 5001,
    exercise: 5002,
    quiz: 5003,
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
