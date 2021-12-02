<script>
const Numbers = {
  // exircise
  assessment: 1,
  exercise: 2,
  quiz: 3,
  // answer correct
  correct: 1,
  incorrect: 0,
  // Type Lecture
  reading: 1,
  writing: 2,
  listening: 3,
  speaking: 4,
  // Type Answer
  MC: 1,
  Text: 2,
  Video: 3,
  // Level
  level_50: 5.0,
  level_55: 5.5,
  level_60: 6.0,
  level_65: 6.5,
  // Type video of exercise speaking
  practice: 1,
  response: 2,
};
Numbers.install = function (Vue) {
  Vue.prototype.$getConst = (key) => {
    return Numbers[key];
  };
};
export default Numbers;
</script>
