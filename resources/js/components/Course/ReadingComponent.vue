<template>
    <div class="text-primary">
        <h1 class="mt-4 text-center font-weight-bold">Reading</h1>
        <div v-if="allResults.length === 0">
            <div class="text-center h4 my-3" v-if="type !== $getConst('exercise')">
                <vue-countdown-timer v-if="startQuiz === true"
                                     @start_callback="startCallBack('event started')"
                                     @end_callback="endCallBack('event ended')"
                                     :start-time="timeNow"
                                     :end-time="timeEnd"
                                     :interval="1000"
                                     :start-label="'Until start:'"
                                     :end-label="'Time limit'"
                                     label-position="begin"
                                     :end-text="'Ended!'"
                                     :day-txt="'days'"
                                     :hour-txt="'hours'"
                                     :minutes-txt="'minutes'"
                                     :seconds-txt="'seconds'">
                    <template slot="start-label" slot-scope="scope">
                        <i class="fe fe-clock"></i>
                        <span
                            v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'begin'">
                        {{ scope.props.startLabel }}:</span>
                        <span
                            v-if="scope.props.endLabel !== ''
                          && !scope.props.tips && scope.props.labelPosition === 'begin'">
                        {{ scope.props.endLabel }}:</span>
                    </template>
                    <template slot="countdown" slot-scope="scope">
                        <span>{{ scope.props.days }} </span><a>:</a>
                        <span>{{ scope.props.hours }} </span><a>:</a>
                        <span>{{ scope.props.minutes }} </span><a>:</a>
                        <span>{{ scope.props.seconds }} </span><a></a>
                    </template>
                </vue-countdown-timer>
                <div v-if="startQuiz === false">
                    <button class="btn btn-success mt-3" v-on:click="startExam()">Start</button>
                </div>
            </div>
            <div class="row container-fluid">
                <div class="col-lg-6 py-4">
                    <div class="px-3 lecture overflow-auto">
                        {{ passage }}
                    </div>
                </div>
                <div class="col-lg-6 py-4">
                    <div class="h-100 d-flex flex-column justify-content-between lecture overflow-auto">
                        <div class="h-100">
                            <div v-if="type !== $getConst('exercise') && startQuiz===true">
                                <h3 v-cloak>{{ questionReading[questionIndex].id }}. {{
                                        questionReading[questionIndex].question
                                    }}</h3>
                                <p>Choose the most correct answer</p>

                                <div class="mt-5">
                                    <input type="number"
                                           :id="'ques' + questionReading[questionIndex].id"
                                           :value="questionReading[questionIndex]"
                                           hidden/>
                                    <div v-for="answer in questionReading[questionIndex].answers"
                                         v-bind:key="answer.id"
                                         class="py-0 my-2 border border-primary rounded answer-selection">
                                        <input class="ip-answer" type="radio"
                                               :id="answer.id"
                                               :value="answer.id"
                                               v-model="userChoose[questionIndex]"
                                               v-bind:disabled="resultCheck[questionIndex]"
                                               hidden/>
                                        <label :for="answer.id" class="w-100">
                                            <a class="btn text-left w-100">
                                                <h5 class="mb-0">{{ answer.answer }}</h5>
                                            </a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div v-if="type === $getConst('exercise')">
                                <div v-if="resultCheck[questionIndex] === $getConst('incorrect')">
                                    <div class="p-3 bg-danger rounded h5 text-white font-weight-bold">
                                        Incorrect answer !
                                    </div>
                                    <h5 v-for="answer_item in questionReading[questionIndex].answers"
                                        class="text-success">
                                    <span v-if="answer_item.is_correct === $getConst('correct') ">
                                        Correct answer is: {{ answer_item.answer }}
                                    </span></h5>
                                </div>

                                <div class="p-3 bg-success rounded h5 text-white font-weight-bold"
                                     v-if="resultCheck[questionIndex] === $getConst('correct')">
                                    Good job !
                                </div>

                                <h3 v-cloak>{{ questionReading[questionIndex].id }}. {{
                                        questionReading[questionIndex].question
                                    }}</h3>
                                <p>Choose the most correct answer</p>

                                <div class="mt-5">
                                    <input type="number"
                                           :id="'ques' + questionReading[questionIndex].id"
                                           :value="questionReading[questionIndex]"
                                           hidden/>
                                    <div v-for="answer in questionReading[questionIndex].answers"
                                         v-bind:key="answer.id"
                                         class="py-0 my-2 border border-primary rounded answer-selection">
                                        <input class="ip-answer" type="radio"
                                               :id="answer.id"
                                               :value="answer.id"
                                               v-model="userChoose[questionIndex]"
                                               v-bind:disabled="resultCheck[questionIndex]"
                                               hidden/>
                                        <label :for="answer.id" class="w-100">
                                            <a class="btn text-left w-100">
                                                <h5 class="mb-0">{{ answer.answer }}</h5>
                                            </a>
                                        </label>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary" v-on:click="prev()"
                                    v-if="questionIndex > 0 && resultCheck[questionIndex] ">
                                Previous
                            </button>
                            <span v-if="type === $getConst('exercise')">
                                <button class="btn btn-primary mx-2" v-on:click="check()"
                                        :id="'check' + questionReading[questionIndex]"
                                        v-bind:disabled="resultCheck[questionIndex]">
                                    Check
                                </button>
                                <button class="btn btn-primary mx-2" v-on:click="next()"
                                        v-if="questionIndex < questionReading.length - 1 && resultCheck[questionIndex] ">
                                    Next
                                </button>
                            </span>
                            <span v-if="type !== $getConst('exercise')">
                                <button class="btn btn-primary mx-2" v-on:click="submit()"
                                        v-if="questionIndex === questionReading.length - 1">
                                    Submit
                                </button>
                                <button class="btn btn-primary mx-2" v-on:click="next()"
                                        v-if="questionIndex < questionReading.length - 1">
                                    Next
                                </button>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div v-else class="mt-5 h-100">
            <div class="text-center">
                <h2 class="text-success">You score {{ allResults[0].score }}</h2>
                <div>
                    <i class="fe fe-check-circle h4 text-success"></i>
                    <span class="h4" v-if="type===$getConst('quiz')">Number of correct question {{
                            allResults[0].correct_question
                        }}</span>
                    <span class="h4" v-if="type===$getConst('assessment')">Number of wrong question {{
                            allResults[1].correct_question
                        }}</span>
                </div>
                <div>
                    <i class="fe fe-x-circle h4 text-danger"></i>
                    <span class="h4" v-if="type=== $getConst('quiz')">Number of wrong question {{
                            allResults[0].wrong_question
                        }}</span>
                    <span class="h4" v-if="type=== $getConst('assessment')">Number of wrong question {{
                            allResults[1].wrong_question
                        }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
const results = [
    {type: 'quiz', score: 5.5, correct_question: 8, wrong_question: 5},
    {type: 'assessment', score: 6, correct_question: 10, wrong_question: 3},
]
const ASSESSMENT = 5001
const EXERCISE = 5002
const QUIZ = 5003
export default {
    props: {
        questionReading: Array
    },
    data() {
        return {
            questionIndex: 0,
            questionNo: '',
            userChoose: [],
            type: EXERCISE,
            passage: `
            英文差，但 Reading 都可以攞到 Lv 5+？ 要達到以上目標，其實真係一啲都唔難！ 我可以用實戰經驗同大家講，「英文程度」≠ 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法， 教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！課堂精選內容 · 用「技巧」完美命中 marking 極速升 grade 三大秘訣 數據主導考試模式考評趨勢一覽無遺 從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。 只有考評數據先有真正話語權！DSE 最強 Reading 技巧無需理解文章亦可有 Lv 5 + 擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！ 一般英文 VS DSE 英文 只傳授你 DSE 需考的英文 雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。 花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!英文差，但 Reading 都可以攞到 Lv 5+？ 要達到以上目標，其實真係一啲都唔難！ 我可以用實戰經驗同大家講，「英文程度」≠ 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法， 教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！課堂精選內容 · 用「技巧」完美命中 marking 極速升 grade 三大秘訣 數據主導考試模式考評趨勢一覽無遺 從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。 只有考評數據先有真正話語權！DSE 最強 Reading 技巧無需理解文章亦可有 Lv 5 + 擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！ 一般英文 VS DSE 英文 只傳授你 DSE 需考的英文 雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。 花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!我可以用實戰經驗同大家講，「英文程度」≠ 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法， 教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！課堂精選內容 · 用「技巧」完美命中 marking 極速升 grade 三大秘訣 數據主導考試模式考評趨勢一覽無遺 從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。 只有考評數據先有真正話語權！DSE 最強 Reading 技巧無需理解文章亦可有 Lv 5 + 擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！ 一般英文 VS DSE 英文 只傳授你 DSE 需考的英文 雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。 花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!
            `,
            allResults: [],
            resultCheck: [],
            startQuiz: false,
            timeNow: '',
            timeEnd: '',
            timeLimitQuiz: 60,
            timeLimitAssessment: 1
        };
    },
    methods: {
        check: function () {
            if (undefined) {
                this.resultCheck.push(-1)
            } else {
                for (let i = 0; i < this.questionReading[this.questionIndex].answers.length; i++) {
                    if (this.questionReading[this.questionIndex].answers[i].id === this.userChoose[this.questionIndex]) {
                        if (this.questionReading[this.questionIndex].answers[i].is_correct === 1) {
                            return this.resultCheck.push(1)
                        }
                        return this.resultCheck.push(-1)
                    }
                }
            }
            console.log(this.resultCheck)
        },
        submit: function () {
            console.log('tra loi ne', this.userChoose)
        },
        userAnswer: function () {
            this.questionNo = document.getElementById(
                "ques" + this.questions[this.questionIndex].id
            ).value;
            this.userAnswerQuiz({
                questionID: parseInt(this.questionNo),
                answerID: this.userChoose[this.questionIndex],
            });
        },
        userAnswerQuiz: function (value) {
            if (this.resultCheck.length === 0) {
                this.resultCheck.push(value);
            } else {
                if (
                    this.resultCheck.some((item) => {
                        return value.questionID === item.questionID;
                    })
                ) {
                    this.resultCheck.map((item) => {
                        if (value.questionID === item.questionID) {
                            return (item.answerID = value.answerID);
                        }
                    });
                } else {
                    this.resultCheck.push(value);
                }
            }
            // localStorage.setItem("reading", JSON.stringify(this.resultCheck));
        },
        next: function () {
            if (this.questionIndex < this.questionReading.length - 1) {
                this.questionIndex++;
            }
        },
        prev: function () {
            if (this.questionIndex > 0) this.questionIndex--;
        },
        startCallBack: function (x) {
            console.log(x);
        },
        endCallBack: function (x) {
            this.allResults = results;

        },
        startExam: function () {
            this.startQuiz = true;
            this.timeNow = new Date();
            this.timeEnd = new Date();
            if (this.type === 'quiz') {
                this.timeEnd.setMinutes(this.timeEnd.getMinutes() + this.timeLimitQuiz)
            }
            if (this.type === 'assessment') {
                this.timeEnd.setMinutes(this.timeEnd.getMinutes() + this.timeLimitAssessment)
            }
        }
    },
    mounted() {

    }
}
</script>

<style scoped>

</style>
