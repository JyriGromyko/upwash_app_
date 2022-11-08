<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.0"></script>
    <title>Admin Panel</title>
</head>
<body>
    <div id="app">

    <header class="d-block">
        <h1 class="text-center">Ylläpitäjän asetukset</h1>
    </header>
    <div class="admin-new-body">
        <div class="admin-new-column admin-new-column-first">
            <div class="admin-new-row">
                <h2>työntekijät</h2>
            </div>
            <div class="admin-new-row">
                <a href="{{ route('users') }}">luo uusi profiili</a>
            </div>
            <div class="admin-new-row">
                <h2>AJANVARAUKSET</h2>
            </div>
            <div class="admin-new-row">
                <a href="{{ route('prices') }}">muokkaa ajanvarausta</a>
            </div>
            <div class="admin-new-row">
                <h2>TILAUKSET</h2>
            </div>
            <div class="admin-new-row">
                <a href="{{ route('orders') }}">TILAUKSET</a>
            </div>

            
        </div>
        <div class="admin-new-column">
            <div class="admin-new-row">
                <form action="{{ route('makeCupon') }}" method="post">
                    @csrf
                    <input type="hidden" name="isTime" v-bind:value="isTime">
                    <input type="hidden" name="isLimit" v-bind:value="isLimit">
                    <div class="admin-new-block">
                        <div class="admin-new-row">
                            <h2>Luo alennuskoodi</h2>
                        </div>
                        <div class="admin-new-row flex">
                            <div class="admin-choise" v-bind:class="{admin_choise_active: isTime == 1}" v-on:click="select(1)" style="cursor:pointer">yhdelle tilaukselle</div>
                            <div class="admin-choise" v-bind:class="{admin_choise_active: isTime == 2}" v-on:click="select(2)" style="cursor:pointer">ei määrärajoitUSTA</div>
                        </div>

                        <div class="admin-new-row admin-cupon flex">
                            <div><b>Aikarajoitus?</b></div>
                            <div><input type="checkbox" name="isTimez" id="" v-model="isLimit"></div>
                        </div>

                        <div class="admin-new-row">
                            <input type="text" name="code" placeholder="ALENNUSKUPONGIN NIMI" required>
                        </div>

                        <div class="admin-new-row">
                            <input type="text" name="percent" placeholder="PERCENT" required>
                        </div>

                        <div class="admin-new-row">
                            <input type="date" name="date" required>
                        </div>
                        <div class="admin-new-row">
                            <input type="date" name="dateTo" required>
                        </div>

                        <div class="admin-new-row">
                        <input type="submit" value="Save" style="width: 120px; height: 35px; border: none; background: #FF6600; color: #FFF; margin-top: 10px; cursor: pointer">
                        </div>
                    </div>
                </form>

                @foreach($cupons as $cupon)
                <div class="admin-new-row">
                    <span class="question">{{ $cupon->code }}<a href="{{ route('deleteCupon',['id'=>$cupon->id]) }}">Delete</a></span>
                </div>
                @endforeach
            </div>
            <div class="admin-new-row" style="position: relative; top: 60px;">
                <div class="admin-new-block">
                    <div class="admin-new-row">
                        <h2>tukipyynnöt</h2>
                    </div>
                    <div class="admin-new-row">
                        <div class="flex flex-new">
                            <div class="admin-new-column">
                                <div class="admin-new-row">
                                    <h4>asiakkailta</h4>
                                </div>

                                @foreach($tickets as $ticket)
                                @if($ticket->type == "client")
                                <div class="admin-new-row">
                                    <span class="question">{{ $ticket->text }}<a href="{{ route('ticket',['id'=>$ticket->id]) }}">Click</a></span>
                                </div>
                                @endif
                                @endforeach

                            </div>
                            <div class="admin-new-column">
                                <div class="admin-new-row">
                                    <h4>pesijöiltä</h4>
                                </div>
                                @foreach($tickets as $ticket)
                                @if($ticket->type == "washer")
                                <div class="admin-new-row">
                                    <span class="question">{{ $ticket->text }}<a href="{{ route('ticket',['id'=>$ticket->id]) }}">Click</a></span>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="admin-new-row">
                        <a href="{{ route('tickets') }}" id="">katso kaikki tukipyynnöt</a>
                    </div>
                </div>
            </div>

            <div class="admin-new-row" style="margin-top: 70px">
                <form action="{{ route('setMail') }}" method="post">
                    @csrf

                    <textarea name="mailCreate" id="" style="width: 100%; height: 220px;">{{ $settings->mailCreate }}</textarea>
                    <textarea name="mailTakeOrder" id="" style="width: 100%; height: 220px;">{{ $settings->mailTakeOrder }}</textarea>
                    <textarea name="mailFinish" id="" style="width: 100%; height: 220px;">{{ $settings->mailFinish }}</textarea>

                    <input type="submit" value="Accept">
                </form>


            </div>

        </div>
    </div>
    </div>
</body>
<style>
    textarea {
        width: 100%;
        height: 220px;
        resize: none;
        border: 1px solid lightgray;
        padding: 15px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
        text-align: center;
        color: #FFF;
        background: #FF6600;
        border: none;
    }
</style>
<script>

var app = new Vue({
  el: '#app',
  data: {
    isTime:1,
    isLimit:false
  },
  methods: {
    select(id) {
        if(id == 1) {
            this.isTime = 1;
        }
        else {
            this.isTime = 2;
        }
    }
  }
})

</script>
</html>
