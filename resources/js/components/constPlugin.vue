<script>
const Numbers = {
    assessment: 1,
    exercise: 2,
    quiz: 3,
    correct: 1,
    incorrect: -1,
    reading: 1,
    writing: 2,
    listening: 3,
    speaking: 4,
    MC: 1,
    Text: 2,
    Video: 3

};
Numbers.install = function (Vue) {
    Vue.prototype.$getConst = (key) => {
        return Numbers[key];
    }
};
export default Numbers;
</script>
