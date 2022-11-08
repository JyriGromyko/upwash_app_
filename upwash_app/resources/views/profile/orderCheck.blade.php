<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <title>Order {{ $order->id }}</title>
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HKPWBBNHMS"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HKPWBBNHMS');
</script>

<body>
    <div class="container">
        <div class="container-top">
            <a href="{{ route('profile') }}"><img src="{{ asset('img/back.svg') }}" alt=""></a>
        </div>

        .<div class="step7-new-container">
            <div class="step7-row">
                <h1>tilauksesi</h1>
            </div>
            <div class="step7-row">
                <div class="step7-info">
                    <div class="step7-info-block">
                        <div class="step7-info-block-title">
                            <span>PÄIVÄMÄÄRÄ</span>
                        </div>
                        @php $zero = 0; @endphp
                        <div class="step7-info-block-text">@if($order->time_d <= 9) {{$zero}} @endif {{ $order->time_d }}-@if($order->time_m <= 9){{$zero}}@endif{{$order->time_m}}-{{ date('Y')}} </div>
                    </div>
                    <div class="step7-info-block">
                        <div class="step7-info-block-title">
                            <span>AIKA</span>
                        </div>
                        <div class="step7-info-block-text">{{ $order->time }}</div>
                    </div>
                    <div class="step7-info-block">
                        <div class="step7-info-block-title">
                            <span>PAIKKA</span>
                        </div>
                        <div class="step7-info-block-text">{{ $order->adress }} </div>
                    </div>
                    <div class="step7-info-block">
                        <div class="step7-info-block-title">
                            <span>AUTO</span>
                        </div>
                        <div class="step7-info-block-text">{{ $order->registrar }}</div>
                    </div>
                </div>
            </div>

            <div class="step7-row" style="padding:26px; box-sizing: border-box">
                <h1 style="text-align: left; font-weight: 700">Pesu ja vahaus </h1>
                <ul class="final-ul">
                    @if($order->additionalPrice !== 0)
                        <li v-if="active1">Pesijän matkakulut <span>{{ $order->additionalPrice }} €</span></li>
                    @endif
                    @if($order->check1 != "false")
                    <li v-if="active1">Hyönteistenpoisto <span>{{ $order->priceCheck1 }} €</span></li>
                    @endif
                    @if($order->check2 != "false")
                    <li v-if="active1">Karvojenpoisto <span>{{ $order->priceCheck2 }} €</span></li>
                    @endif
                    @if($order->check3 != "false")
                    <li v-if="active1">Renkaiden vaihto <span>{{ $order->priceCheck3 }} €</span></li>
                    @endif

                    @if($order->main_type == "Ulkopesu")
                        @if($order->param1 != "false")
                        <li v-if="active1">Ulkopesu + vaha <span>{{ $order->price1 }} €</span></li>
                        @endif
                        @if($order->param2 != "false")
                        <li v-if="active2">Ulkopesu + pro<span>{{ $order->price2 }} €</span></li>
                        @endif
                        @if($order->param3 != "false")
                        <li v-if="active3">Ulkopesu + kerramien pinnoite<span>{{ $order->price3 }} €</span></li>
                        @endif
                        @if($order->param4 != "false")
                        <li v-if="active4">MASKOTTIPESU <span>{{ $order->price4 }} €</span></li>
                        @endif
                    @endif
                    @if($order->main_type == "Sisäpesu")
                        @if($order->param1 != "false")
                        <li v-if="active1">Perus Sisäpesu <span>{{ $order->price1 }} €</span></li>
                        @endif
                        @if($order->param2 != "false")
                        <li v-if="active2">Premium Sisäpesu <span>{{ $order->price2 }} €</span></li>
                        @endif
                        @if($order->param3 != "false")
                        <li v-if="active3">Luksus Sisäpesu <span>{{ $order->price3 }} €</span></li>
                        @endif
                        @if($order->param4 != "false")
                        <li v-if="active4">Kevytvaha <span>{{ $order->price4 }} €</span></li>
                        @endif
                    @endif
                    @if($order->main_type == "Molemmat")
                        @if($order->param1 != "false")
                        <li v-if="active1">PERUS SISÄPESU + ULKOPESU <span>{{ $order->price1 }} €</span></li>
                        @endif
                        @if($order->param2 != "false")
                        <li v-if="active2">PREMIUM SISÄPESU + ULKOPESU <span>{{ $order->price2 }} €</span></li>
                        @endif
                        @if($order->param3 != "false")
                        <li v-if="active3">LUKSUS SISÄPESU + ULKOPESU & KERAAMINEN PINNOITE <span>{{ $order->price3 }} €</span></li>
                        @endif
                        @if($order->param4 != "false")
                        <li v-if="active4">Kevytvaha <span>{{ $order->price4 }} €</span></li>
                        @endif
                    @endif
                </ul>
            </div>
            <div class="step7-line"></div>
            <div class="step7-row" style="padding:26px; box-sizing: border-box">
                <div class="step7-pesu">
                    <div class="step7-pesu-left" style="color:#9D9FB4">YHTEENSÄ</div>
                    <div class="step7-pesu-right"><b style="font-size: 24px; position: relative; bottom: 6px">{{ $order->price }} €</b></div>
                </div>
            </div>
            <div style="border-top: 1px #a5a5a5 solid"></div>
            <div class="step7-row" style="padding:26px; box-sizing: border-box">
                <div class="step7-pesu" >
                    <div class="step7-pesu-left" ><b >UpWash Oy</b></div>
                    <div class="step7-pesu-right" style="color:#9D9FB4">+358 40 0236184</div>

                </div>
                <div class="step7-pesu">
                    <div class="step7-pesu-left" style="color:#9D9FB4">Gunillantie 15 A 20, 00870 Helsinki</div>
                    <div class="step7-pesu-right" style="color:#9D9FB4">info@upwash.fi</div>
                </div>
                <div class="step7-pesu">
                    <div class="step7-pesu-right" style="color:#9D9FB4">Y-tunnus: 32676275</div>
                </div>
            </div>
        </div>
    </div>

    <style>
    html,body {
        width: 100%;
        background: #0D0E2C;
        padding: 10px;
        height: 100%;
        box-sizing: border-box
    }

    .container {
        width: 100%;
        margin: 0 auto;
    }

    .container-top {
        width: 90%;
        height: 82px;
        background: #FFF;
        border-radius: 10px;
        position: relative;
        margin: 0 auto
    }

    .container-top a {
        position: absolute;
        top: 15px;
        left: 20px;
    }
    </style>
</body>
</html>
