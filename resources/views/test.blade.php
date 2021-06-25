<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

</head>

<body>
<div id="test">
    <form v-on:submit.prevent="testForm" ref="formTest" id="formTest" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Session</label>
            <input name="session" type="text" v-model="session">
        </div>
        <div>
            <label for="name">Message</label>
            <input name="message" type="text" v-model="message">
        </div>
        <button type="submit">Add message</button>
    </form>
    <p> @{{sessionName}} @{{fullMessage}}</p>
</div>
@foreach($test as $item)
    <p>{{$item->session}} {{$item->message}}</p>
@endforeach

<x-rating.rating></x-rating.rating>
<script>
    var appTest = new Vue({
        el: "#test",
        data: {
            fullMessage: '',
            sessionName: '',
            ratePoint: 0,
            message: '',
            session: '',
            rate: 0
        },
        methods: {
            testForm: function () {
                this.fullMessage = this.message;
                this.sessionName = this.session;
                this.ratePoint = this.rate;
                const formData = new FormData(document.getElementById("formTest"));
                const data = {};
                for (let [key, val] of formData.entries()) {
                    Object.assign(data, {[key]: val})
                }
                console.log(data);
                axios.post("{{route('testctl.store')}}", data)
                    .then(function (response) {
                        console.info(response);
                        document.getElementById("formTest").reset();
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            }
        }
    });
</script>
</body>
</html>
