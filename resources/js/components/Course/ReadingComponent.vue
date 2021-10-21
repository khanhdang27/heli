<template>
    <div class="row h-100 container-fluid">
        <div class="col-lg-6 py-4">
            <div class="px-3 lecture overflow-auto">
                {{ passage }}
            </div>
        </div>
        <div class="col-lg-6 py-4">
            <div class="h-100 d-flex flex-column justify-content-between text-primary">
                <div class="h-100">
                    <div class="h-25">
                        <h1 v-cloak>{{ questionWriting[questionIndex].question }}</h1>
                        <p>Choose the most correct answer</p>
                    </div>
                    <div class="h-75">
                        <input type="number"
                               :id="'ques' + questionWriting[questionIndex].id"
                               :value="questionWriting[questionIndex].id"
                               hidden/>
                        <div v-for="answer in questionWriting[questionIndex].answers"
                             v-bind:key="answer.id"
                             class="py-0 my-2 border border-primary rounded answer-selection">
                            <input type="radio"
                                   :id="answer.id"
                                   :value="answer.id"
                                   hidden/>
                            <label :for="answer.id" class="w-100">
                                <a class="btn text-left w-100">
                                    <h5 class="mb-0">{{ answer.answer }}</h5>
                                </a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between pb-4">
                    <div v-if="type === 'quiz'">
                        Time:
                    </div>
                    <div>
                        <button class="btn btn-primary" v-on:click="prev()">
                            Previous
                        </button>
                        <span>
                        <button class="btn btn-primary">
                          Submit
                        </button>
                        <button class="btn btn-primary" v-on:click="next()">Next</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        questionWriting: Array
    },
    data() {
        return {
            questionIndex: 0,
            type: 'quiz',
            passage: `
            英文差，但 Reading 都可以攞到 Lv 5+？ 要達到以上目標，其實真係一啲都唔難！ 我可以用實戰經驗同大家講，「英文程度」≠ 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法， 教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！課堂精選內容 · 用「技巧」完美命中 marking 極速升 grade 三大秘訣 數據主導考試模式考評趨勢一覽無遺 從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。 只有考評數據先有真正話語權！DSE 最強 Reading 技巧無需理解文章亦可有 Lv 5 + 擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！ 一般英文 VS DSE 英文 只傳授你 DSE 需考的英文 雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。 花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!英文差，但 Reading 都可以攞到 Lv 5+？ 要達到以上目標，其實真係一啲都唔難！ 我可以用實戰經驗同大家講，「英文程度」≠ 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法， 教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！課堂精選內容 · 用「技巧」完美命中 marking 極速升 grade 三大秘訣 數據主導考試模式考評趨勢一覽無遺 從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。 只有考評數據先有真正話語權！DSE 最強 Reading 技巧無需理解文章亦可有 Lv 5 + 擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！ 一般英文 VS DSE 英文 只傳授你 DSE 需考的英文 雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。 花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!我可以用實戰經驗同大家講，「英文程度」≠ 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法， 教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！課堂精選內容 · 用「技巧」完美命中 marking 極速升 grade 三大秘訣 數據主導考試模式考評趨勢一覽無遺 從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。 只有考評數據先有真正話語權！DSE 最強 Reading 技巧無需理解文章亦可有 Lv 5 + 擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！ 一般英文 VS DSE 英文 只傳授你 DSE 需考的英文 雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。 花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!
            `
        };
    },
    methods: {
        next: function () {
            if (this.questionIndex < this.questionWriting.length - 1) {
                this.questionIndex++;
            }
        },
        prev: function () {
            if (this.questionIndex > 0) this.questionIndex--;
        },
    }
}
</script>

<style scoped>

</style>
