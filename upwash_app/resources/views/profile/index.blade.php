<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>UpWash</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="{{ asset('img/favicon-old.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/checkout.js') }}"></script>
    <script src="{{ asset('js/map-js.js') }}"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
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
    <div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
    </div>
    <div id="app">

    <form action="{{ route('addClient') }}" method="POST">
    @csrf
    <input type="hidden" name="price" v-bind:value="price">
    <div class="desktop">
        <div class="video-wrap">
            <video id="video-tag" autoplay muted loop playsinline class="desktop-video">
                <source src="{{ asset('media/1370x780.mp4') }}" type="video/mp4" />
            </video>
            <video id="video-tagz" autoplay muted loop playsinline class="mobile-video">
                <source src="{{ asset('media/450x780.mp4') }}" type="video/mp4" />
            </video>
            <img id="img-tag" src="{{ asset('media/450x780.mp4') }}" class="mobile-video mobile-img-tag">
        </div>


        <div class="sections">
            <section class="main">
                <div class="main-container">
                    <div class="row">
                        <img src="{{ asset('img/logo.png') }}" alt="" class="logo">
                    </div>
                    <div class="row">
                        <h1>Tervetuloa!</h1>
                    </div>
                    <div class="div-button-span">
                        <span class="Lato">Tilaa pesu</span>
                    </div>
                </div>
            </section>

            <section class="step1" v-bind:class="{ section_active: step >= 1} ">
                <div class="main-container" v-bind:class="{ main_container_mobile_height: step == 1 }">
                    <div class="step-one-container">

                        <div class="flex" style="display: flex; width: 100%">
                            <div class="step-one-component" v-bind:class='{ inactive: num == ""} '>
                            <label>
                                <input type="radio" name="main_type" value="Ulkopesu" v-model="mainType" v-on:click="go(); rise(1,{{ $prices->step1_1 }})" />
                                <img src="{{ asset('img/img1.png') }}">
                            </label>
                            <b class="Lato">Ulkopesu</b>
                            </div>
                            <div class="step-one-component" v-bind:class='{ inactive: num == ""} '>
                            <label>
                                <input type="radio" name="main_type" value="Sisäpesu" v-model="mainType" v-on:click="go(); rise(1,{{ $prices->step1_2 }})"/>
                                <img src="{{ asset('img/img2.png') }}">
                            </label>
                            <b class="Lato">Sisäpesu</b>
                            </div>
                        </div>
                        <div class="step-one-third" v-bind:class='{ inactive: num == ""} '>
                            <label>
                                <input type="radio" name="main_type" value="Molemmat" v-model="mainType" v-on:click="go(); rise(1,{{ $prices->step1_3 }})"/>
                                <img src="{{ asset('img/variant3.png') }}">
                            </label>
                            <b class="Lato">Molemmat</b>
                        </div>
                        <div class="step-one-number">
                            <div class="step-one-number-container" >
                                <img src="{{ asset('img/euflag.png') }}" alt="">
                                <input type="text" v-model="num" name="registrar" placeholder="123NRO">
                            </div>
                            <span class="Lato">Käyttämällä tilauspalvelua hyväksyt <a href="{{ route('rules') }}">tietosuojaselosteen</a></span>
                        </div>
                    </div>
                </div>
                <style>
                    .step-one-component input[type=radio]{
                        visibility: hidden;
                        position: absolute;
                    }
                    label > input + img{
                        cursor:pointer;
                        border:2px solid transparent;
                    }
                    label > input:checked + img{
                        border:2px solid #f00;
                    }
                </style>
            </section>

            <section class="step2" v-bind:class="{ section_active: step >= 2} ">

                <div class="map-back" v-on:click="back()">
                    <img src="{{ asset('img/back.svg') }}" alt="">
                </div>

                <input type="text" id="adress__location_dup" name="adress__location" hidden >


                <div id="unique__google">
                    <input type="text" id="adress__location" placeholder="Syötä sijainti" value="{{ $data->adress }}"  name="adress__location" style="color: #FFF; border: none; padding: 3px; box-sizing:border-box" value="" >
                    <div id="infowindow-content"><span id="place-name" class="title"></span><br /><span id="place-address"></span></div>
                </div>
                <div id="map"></div>

                <div class="step2-go-button">
                    <div class="step2-button Bebas" v-on:click="go()" id="step2button" style="display: none">jatka eteenpäin</div>
                </div>

                <div class="order-controller" v-if="(step > 2 && step < 5) || step == 7" v-bind:class="{ order_controller_step_6: step >= 5 && step < 7}" style="position: relative">
                    <div class="order-controller-container">
                        <div class="order-controller-back" v-on:click="back()">
                            <img src="{{ asset('img/back.svg') }}" alt="">
                        </div>
                        <div class="order-controller-panel">
                            <div class="order-controller-line"></div>
                            <div class="order-controller-steps">
                                <div class="order-controller-step" v-on:click="goStep(3)" v-bind:class="{ order_controller_active_line: step == 3, order_controller_step_active: step > 3} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(4)" v-bind:class="{ order_controller_active_line: step == 4, order_controller_step_active: step > 4} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(5)" v-bind:class="{ order_controller_active_line: step == 5, order_controller_step_active: step > 5} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(6)" v-bind:class="{ order_controller_active_line: step == 6, order_controller_step_active: step > 6} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(7)" v-bind:class="{ order_controller_active_line: step == 7, order_controller_step_active: step > 7} " ></div>
                            </div>
                        </div>
                        <div class="order-controller-close" v-on:click="toBegin()">
                            <img src="{{ asset('img/close.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </section>

            <section class="step3" v-bind:class="{ section_active: step >= 3} ">
                <input type="hidden" name="order__type" v-bind:value='orderType'>
                <div class="step3-container">
                    <h1>Haluan... </h1>
                    <div class="step3-column" v-on:click="go(); setType('premium', 3); rise(3,{{ $prices->step3_1 }})">
                        <div class="step3-title step-row">
                            <span>PREMIUM</span>
                        </div>
                        <div class="step3-img step-row">
                            <img src="{{ asset('img/step3_1.png') }}" alt="">
                        </div>
                        <div class="step3-span step-row">
                            <span style="text-transform: uppercase">yksittäisen maskottipesun</span>
                        </div>
                    </div>
                    <div class="step3-column" v-on:click="go(); setType('standard', 3); rise(3,{{ $prices->step3_2 }})">
                        <div class="step3-title step-row">
                            <span>STANDARD</span>
                        </div>
                        <div class="step3-img step-row">
                            <img src="{{ asset('img/step3_2.png') }}" alt="">
                        </div>
                        <div class="step3-span step-row">
                            <span>YKSITTÄISEN PESUN</span>
                        </div>
                    </div>
                    <div class="step3-column" v-on:click="setModal()">
                        <div class="step3-title step-row">
                            <span>YRITYKSILLE</span>
                        </div>
                        <div class="step3-img step-row">
                            <img src="{{ asset('img/step3_3.png') }}" alt="">
                        </div>
                        <div class="step3-span step-row">
                            <span>RÄÄTÄLÖITYÄ PESURATKAISUA</span>
                        </div>
                    </div>
                </div>
                <div class="order-controller" v-if="(step > 2 && step < 5) || step == 7" v-bind:class="{ order_controller_step_6: step >= 5 && step < 7}" style="position: relative">
                    <div class="order-controller-container">
                        <div class="order-controller-back" v-on:click="back()">
                            <img src="{{ asset('img/back.svg') }}" alt="">
                        </div>
                        <div class="order-controller-panel">
                            <div class="order-controller-line"></div>
                            <div class="order-controller-steps">
                                <div class="order-controller-step" v-on:click="goStep(3)" v-bind:class="{ order_controller_active_line: step == 3, order_controller_step_active: step > 3} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(4)" v-bind:class="{ order_controller_active_line: step == 4, order_controller_step_active: step > 4} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(5)" v-bind:class="{ order_controller_active_line: step == 5, order_controller_step_active: step > 5} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(6)" v-bind:class="{ order_controller_active_line: step == 6, order_controller_step_active: step > 6} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(7)" v-bind:class="{ order_controller_active_line: step == 7, order_controller_step_active: step > 7} " ></div>
                            </div>
                        </div>
                        <div class="order-controller-close" v-on:click="toBegin()">
                            <img src="{{ asset('img/close.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="step4" v-bind:class="{ section_active: step >= 4} ">

                <div class="step4-container-text" style="color: #FFF; text-align: center; margin-top: 30px; font-size: 26px;"><h1>Valitse autosi tyyppi</h1></div>

                <input type="hidden" name="car__type" v-bind:value='carType'>
                <div class="step4-list">
                    <div class="step4-block" v-on:click="go(); setType('Sedan', 4); rise(5,{{ $prices->step4_1 }})">
                        <div class="step4-title">
                            <div class="step3-title step-row">
                                <span>suosituin!</span>
                            </div>
                        </div>
                        <div class="step4-img">
                            <img src="{{ asset('img/step4_1.png') }}" alt="">
                        </div>
                        <div class="step4-text">
                            <span>SEDAN</span>
                        </div>
                    </div>
                    <div class="step4-block" v-on:click="go(); setType('Farmari', 4); rise(5,{{ $prices->step4_2 }})">
                        <div class="step4-title">
                            <h1></h1>
                        </div>
                        <div class="step4-img">
                            <img src="{{ asset('img/step4_2.png') }}" alt="">
                        </div>
                        <div class="step4-text">
                            <span>FARMARI</span>
                        </div>
                    </div>
                    <div class="step4-block" v-on:click="go(); setType('Korkea', 4); rise(5,{{ $prices->step4_3 }})">
                        <div class="step4-title">
                            <h1></h1>
                        </div>
                        <div class="step4-img">
                            <img src="{{ asset('img/step4_3.png') }}" alt="">
                        </div>
                        <div class="step4-text">
                            <span>PATTIAUTO (KORKEA)</span>
                        </div>
                    </div>
                    <div class="step4-block" v-on:click="go(); setType('Matala', 4); rise(5,{{ $prices->step4_4 }})">
                        <div class="step4-title">
                            <h1></h1>
                        </div>
                        <div class="step4-img">
                            <img src="{{ asset('img/step4_4.png') }}" alt="">
                        </div>
                        <div class="step4-text">
                            <span>PATTIAUTO (MATALA)</span>
                        </div>
                    </div>
                    <div class="step4-block" v-on:click="go(); setType('Masstoauto', 4); rise(5,{{ $prices->step4_5 }})">
                        <div class="step4-title">
                            <h1></h1>
                        </div>
                        <div class="step4-img">
                            <img src="{{ asset('img/step4_5.png') }}" alt="">
                        </div>
                        <div class="step4-text">
                            <span>MASSTOAUTO</span>
                        </div>
                    </div>
                    <div class="step4-block"  style="opacity: 0">

                    </div>
                </div>
                <div class="order-controller" v-if="(step > 2 && step < 5) || step == 7" v-bind:class="{ order_controller_step_6: step >= 5 && step < 7}" style="position: relative">
                    <div class="order-controller-container">
                        <div class="order-controller-back" v-on:click="back()">
                            <img src="{{ asset('img/back.svg') }}" alt="">
                        </div>
                        <div class="order-controller-panel">
                            <div class="order-controller-line"></div>
                            <div class="order-controller-steps">
                                <div class="order-controller-step" v-on:click="goStep(3)" v-bind:class="{ order_controller_active_line: step == 3, order_controller_step_active: step > 3} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(4)" v-bind:class="{ order_controller_active_line: step == 4, order_controller_step_active: step > 4} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(5)" v-bind:class="{ order_controller_active_line: step == 5, order_controller_step_active: step > 5} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(6)" v-bind:class="{ order_controller_active_line: step == 6, order_controller_step_active: step > 6} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(7)" v-bind:class="{ order_controller_active_line: step == 7, order_controller_step_active: step > 7} " ></div>
                            </div>
                        </div>
                        <div class="order-controller-close" v-on:click="toBegin()">
                            <img src="{{ asset('img/close.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="step5" v-bind:class="{ section_active: step >= 5} ">
                <div class="order-controller" v-if="step > 2" v-bind:class="{ order_controller_step_6: step >= 5}">
                    <div class="order-controller-container">
                        <div class="order-controller-back" v-on:click="back()">
                            <img src="{{ asset('img/back.svg') }}" alt="">
                        </div>
                        <div class="order-controller-panel">
                            <div class="order-controller-line"></div>
                            <div class="order-controller-steps">
                                <div class="order-controller-step" v-on:click="goStep(3)" v-bind:class="{ order_controller_active_line: step == 3, order_controller_step_active: step > 3} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(4)" v-bind:class="{ order_controller_active_line: step == 4, order_controller_step_active: step > 4} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(5)" v-bind:class="{ order_controller_active_line: step == 5, order_controller_step_active: step > 5} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(6)" v-bind:class="{ order_controller_active_line: step == 6, order_controller_step_active: step > 6} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(7)" v-bind:class="{ order_controller_active_line: step == 7, order_controller_step_active: step > 7} " ></div>
                            </div>
                        </div>
                        <div class="order-controller-close" v-on:click="toBegin()">
                            <img src="{{ asset('img/close.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="step5-container">
                    <div class="step5-first">
                        <div class="step-field"><img src="{{ asset('img/step5_1.png') }}" alt=""><span>@{{ orderType }}</span></div>
                        <div class="step-field"><img src="{{ asset('img/step5_2.png') }}" alt=""><span>@{{ mainType }}</span></div>
                        <div class="step-field"><span>ASETUKSET</span></div>
                    </div>

                    <div class="step5-text">
                        <span>
                            Valitse sinulle sopivin pesu. Samoin voit tilata lisäpalveluita:
                        </span>
                    </div>


                    <div class="step5-checkboxex">
                        <div class="step5-checkbox"><span>Hyönteistenpoisto {{ $prices->step5_1 }}€</span><input type="checkbox" class="custom-checkbox" id="rb1" name="" v-on:click="checkBoxMethod(1,{{ $prices->step5_1 }})" v-model="checked1" ><label for="rb1"></label></div>
                        <div class="step5-checkbox"><span>Karvojenpoisto {{ $prices->step5_2 }}€</span><input type="checkbox" class="custom-checkbox" id="rb2" name="" v-on:click="checkBoxMethod(2,{{ $prices->step5_2 }})" v-model="checked2"><label for="rb2"></label></div>
                        <div class="step5-checkbox"><span>Renkaiden vaihto {{ $prices->step5_3 }}€</span><input type="checkbox" class="custom-checkbox" id="rb3" name="" v-on:click="checkBoxMethod(3,{{ $prices->step5_3 }})" v-model="checked3"><label for="rb3"></label></div>
                    </div>
                    <input type="hidden" name="checked1" v-bind:value="checked1">
                    <input type="hidden" name="checked2" v-bind:value="checked2">
                    <input type="hidden" name="checked3" v-bind:value="checked3">
                    <input type="hidden" name="param1" v-bind:value="active1">
                    <input type="hidden" name="param2" v-bind:value="active2">
                    <input type="hidden" name="param3" v-bind:value="active3">
                    <input type="hidden" name="param4" v-bind:value="active4">
                    <input type="hidden" name="priceCheck1" value="{{ $prices->step5_1 }}">
                    <input type="hidden" name="priceCheck2" value="{{ $prices->step5_2 }}">
                    <input type="hidden" name="priceCheck3" value="{{ $prices->step5_3 }}">
                    <input type="hidden" name="price1" value="{{ $prices->step6_1 }}">
                    <input type="hidden" name="price2" value="{{ $prices->step6_2 }}">
                    <input type="hidden" name="price3" value="{{ $prices->step6_3 }}">
                    <input type="hidden" name="price4" value="{{ $prices->step6_4 }}">

                    <div class="step5-action-list">
                        <div class="step5-action"  v-bind:class="{action_active: active1}" v-on:click="setActive(1, {{ $prices->step6_1 }})"><span class="action-text">Ulkopesu</span><ul><li><b>·</b> ulkopesu</li><li><b>·</b> ovenvälienpesu</li><li><b>·</b> rengaskiilto</li><li><b>·</b> kevytvaha</li></ul><span class="action-price"><b>+{{ $prices->step6_1 }} €</b></span></div>
                        <div class="step5-action"  v-if="active1" v-bind:class="{action_active: active54}" v-on:click="setActive(5, {{ $prices->step5_4 }})"><span class="action-text">Pesumaestromme on pukeutunut Apinapukuun!</span><ul><li><b>·</b> ulkopesu</li><li><b>·</b> ovenvälienpesu</li><li><b>·</b> rengaskiilto</li><li><b>·</b> Hyönteistenpoisto</li></ul><span class="action-price"><b>+{{ $prices->step5_4 }} €</b></span></div>
                        <div class="step5-action"  v-if="orderType !='premium'" v-bind:class="{action_active: active2}" v-on:click="setActive(2, {{ $prices->step6_2 }})"><span class="action-text">Perus Sisäpesu</span><ul><li><b>·</b> imurointi</li><li><b>·</b> mattojenpesu</li><li><b>·</b> pintojenpyyhintä</li><li><b>·</b> roskien poisto</li><li><b>·</b> ikkunoiden pesu</li></ul><span class="action-price"><b>+{{ $prices->step6_2 }} €</b></span></div>
                        <div class="step5-action"  v-if="orderType !='premium'" v-bind:class="{action_active: active3}" v-on:click="setActive(3, {{ $prices->step6_3 }})"><span class="action-text">Kevyt Sisäpesu</span><ul><li><b>·</b> imurointi</li><li><b>·</b> mattojenpesu</li><li><b>·</b> pintojenpyyhintä</li><li><b>·</b> roskien poisto</li><li><b>·</b> ikkunoiden pesu</li><li><b>·</b> penkkien syväpesu</li></ul><span class="action-price"><b>+{{ $prices->step6_3 }} €</b></span></div>
                        <div class="step5-action"  v-if="orderType !='premium'" v-bind:class="{action_active: active4}" v-on:click="setActive(4, {{ $prices->step6_4 }})"><span class="action-text">Luksus Sisäpesu</span><ul><li><b>·</b> imurointi</li><li><b>·</b> mattojenpesu</li><li><b>·</b> pintojenpyyhintä</li><li><b>·</b> roskien poisto</li><li><b>·</b> ikkunoiden pesu</li><li><b>·</b> penkkien syväpesu</li><li><b>·</b> ovien pesu</li></ul><span class="action-price"><b>+{{ $prices->step6_4 }} €</b></span></div>
                    </div>

                    <div class="step5-buttons">
                        <div class="step5-button" style="margin-bottom: 40px;" v-on:click="go(); setActive(6, 0)" v-if="checked1 || checked2 || checked3 || active1 || active2 || active3 || active4">Jatka eteenpäin <span class="price-button">@{{ price }} €</span></div>
                    </div>
                </div>
            </section>

            <section class="step6" v-bind:class="{ section_active: step >= 6} ">
                <div class="order-controller" v-if="step > 2" v-bind:class="{ order_controller_step_6: step >= 5}">
                    <div class="order-controller-container">
                        <div class="order-controller-back" v-on:click="back()">
                            <img src="{{ asset('img/back.svg') }}" alt="">
                        </div>
                        <div class="order-controller-panel">
                            <div class="order-controller-line"></div>
                            <div class="order-controller-steps">
                                <div class="order-controller-step" v-on:click="goStep(3)" v-bind:class="{ order_controller_active_line: step == 3, order_controller_step_active: step > 3} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(4)" v-bind:class="{ order_controller_active_line: step == 4, order_controller_step_active: step > 4} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(5)" v-bind:class="{ order_controller_active_line: step == 5, order_controller_step_active: step > 5} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(6)" v-bind:class="{ order_controller_active_line: step == 6, order_controller_step_active: step > 6} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(7)" v-bind:class="{ order_controller_active_line: step == 7, order_controller_step_active: step > 7} " ></div>
                            </div>
                        </div>
                        <div class="order-controller-close" v-on:click="toBegin()">
                            <img src="{{ asset('img/close.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="step6-container">
                    <div class="step6-date" style="padding-top: 100px">
                        <div class="step6-date-container">
                            <span class="date-back" v-on:click="dayBack()"><img src="https://www.svgrepo.com/show/365208/caret-right-thin.svg" alt=""></span>
                            <span class="date-text">@{{ day }}. @{{ months[month] }}</span>
                            <span class="date-forward" v-on:click="dayForward()"><img src="https://www.svgrepo.com/show/365208/caret-right-thin.svg" alt=""></span>
                        </div>
                    </div>

                    <div class="step6-time">
                        <div class="step6-time-container">
                            <div class="step6-times">
                                <input type="hidden" name="day" v-bind:value="day">
                                <input type="hidden" name="month" v-bind:value="month">
                                <input type="hidden" name="time" v-bind:value="time">


                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "09:00-09:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 1 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(1, '09:00-09:30', 1) : selectTime(1, '09:00-09:30', 0)"  @else v-bind:class="{time_active: isTime == 1 }" v-on:click="selectTime(1, '09:00-09:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 1"><b>09:00-09:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">09:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "09:30-10:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 2 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(2, '09:30-10:00', 2) : selectTime(2, '09:30-10:00', 0)"  @else v-bind:class="{time_active: isTime == 2 }" v-on:click="selectTime(2, '09:30-10:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 2"><b>09:30-10:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">09:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "10:00-10:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 3 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(3, '10:00-10:30', 3) : selectTime(3, '10:00-10:30', 0)"  @else v-bind:class="{time_active: isTime == 3 }" v-on:click="selectTime(3, '10:00-10:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 3"><b>10:00-10:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">10:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "10:30-11:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 4 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(4, '10:30-11:00', 4) : selectTime(4, '10:30-11:00', 0)"  @else v-bind:class="{time_active: isTime == 4 }" v-on:click="selectTime(4, '10:30-11:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 4"><b>10:30-11:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">10:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "11:00-11:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 5 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(5, '11:00-11:30', 5) : selectTime(5, '11:00-11:30', 0)"  @else v-bind:class="{time_active: isTime == 5 }" v-on:click="selectTime(5, '11:00-11:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 5"><b>11:00-11:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">11:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "11:30-12:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 6 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(6, '11:30-12:00', 6) : selectTime(6, '11:30-12:00', 0)"  @else v-bind:class="{time_active: isTime == 6 }" v-on:click="selectTime(6, '11:30-12:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 6"><b>11:30-12:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">11:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "12:00-12:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 7 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(7, '12:00-12:30', 7) : selectTime(7, '12:00-12:30', 0)"  @else v-bind:class="{time_active: isTime == 7 }" v-on:click="selectTime(7, '12:00-12:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 7"><b>12:00-12:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">12:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "12:30-13:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 8 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(8, '12:30-13:00', 8) : selectTime(8, '12:30-13:00', 0)"  @else v-bind:class="{time_active: isTime == 8 }" v-on:click="selectTime(8, '12:30-13:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 8"><b>12:30-13:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">12:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "13:00-13:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 9 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(9, '13:00-13:30', 9) : selectTime(9, '13:00-13:30', 0)"  @else v-bind:class="{time_active: isTime == 9 }" v-on:click="selectTime(9, '13:00-13:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 9"><b>13:00-13:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">13:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "13:30-14:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 10 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(10, '13:30-14:00', 10) : selectTime(10, '13:30-14:00', 0)"  @else v-bind:class="{time_active: isTime == 10 }" v-on:click="selectTime(10, '13:30-14:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 10"><b>13:30-14:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">13:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "14:00-14:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 11 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(11, '14:00-14:30', 11) : selectTime(11, '14:00-14:30', 0)"  @else v-bind:class="{time_active: isTime == 11 }" v-on:click="selectTime(11, '14:00-14:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 11"><b>14:00-14:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">14:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "14:30-15:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 12 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(12, '14:30-15:00', 12) : selectTime(12, '14:30-15:00', 0)"  @else v-bind:class="{time_active: isTime == 12 }" v-on:click="selectTime(12, '14:30-15:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 12"><b>14:30-15:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">14:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "15:00-15:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 13 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(13, '15:00-15:30', 13) : selectTime(13, '15:00-15:30', 0)"  @else v-bind:class="{time_active: isTime == 13 }" v-on:click="selectTime(13, '15:00-15:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 13"><b>15:00-15:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">15:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "15:30-16:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 14 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(14, '15:30-16:00', 14) : selectTime(14, '15:30-16:00', 0)"  @else v-bind:class="{time_active: isTime == 14 }" v-on:click="selectTime(14, '15:30-16:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 14"><b>15:30-16:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">15:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "16:00-16:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 15 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(15, '16:00-16:30', 15) : selectTime(15, '16:00-16:30', 0)"  @else v-bind:class="{time_active: isTime == 15 }" v-on:click="selectTime(15, '16:00-16:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 15"><b>16:00-16:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">16:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "16:30-17:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 16 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(16, '16:30-17:00', 16) : selectTime(16, '16:30-17:00', 0)"  @else v-bind:class="{time_active: isTime == 16 }" v-on:click="selectTime(16, '16:30-17:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 16"><b>16:30-17:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">16:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "17:00-17:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 17 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(17, '17:00-17:30', 17) : selectTime(17, '17:00-17:30', 0)"  @else v-bind:class="{time_active: isTime == 17 }" v-on:click="selectTime(17, '17:00-17:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 17"><b>17:00-17:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">17:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "17:30-18:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 18 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(18, '17:30-18:00', 18) : selectTime(18, '17:30-18:00', 0)"  @else v-bind:class="{time_active: isTime == 18 }" v-on:click="selectTime(18, '17:30-18:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 18"><b>17:30-18:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">17:30</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "18:00-18:30") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 19 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(19, '18:00-18:30', 19) : selectTime(19, '18:00-18:30', 0)"  @else v-bind:class="{time_active: isTime == 19 }" v-on:click="selectTime(19, '18:00-18:30', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 19"><b>18:00-18:30 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">18:00</span></div>
                                <div @php $flag=false @endphp @foreach($times as $time) @if($time->time == "18:30-19:00") @php $day=$time->time_d; $month=$time->time_m; @endphp @php $flag=true @endphp @endif @endforeach @if($flag) v-bind:class="{time_none: day == {!!$day!!} && month == {!!$month-1!!}, time_active: isTime == 20 }" v-on:click="day == {!! $day !!} && month == {!! $month-1 !!} ? selectTime(20, '18:30-19:00', 20) : selectTime(20, '18:30-19:00', 0)"  @else v-bind:class="{time_active: isTime == 20 }" v-on:click="selectTime(20, '18:30-19:00', 0)" @endif class="step6-time-block"><span class="time-container" v-if="isTime == 20"><b>18:30-19:00 (MAX)</b><br><ul><li v-if="active1">Ulkopesu</li><li v-if="active2">Ovenvälienpesu</li><li v-if="active3">Rengaskiilto</li><li v-if="active4">Kevytvaha</li></ul></span><span class="text">18:30</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="step5-buttons">
                        <div class="step5-button" v-on:click="go()" v-if="isTime != 0">Jatka eteenpäin </div>
                    </div>
                </div>
            </section>

            <section class="step7" v-bind:class="{ section_active: step >= 7} ">
                <div class="step7-new-container">
                    <div class="step7-row">
                        <h1>tilauksesi</h1>
                    </div>
                    <div class="step7-row">
                        <div class="step7-info">
                            <div class="step7-info-block">
                                <div class="step7-info-block-title">
                                    <span>PÄIVÄMÄÄRÄ</span>
                                </div>
                                <div class="step7-info-block-text"><span v-if="day <= 9">0</span>@{{ day }}-<span v-if="month+1 <= 9">0</span>@{{ month+1 }}-{!! date('Y'); !!}</div>
                            </div>
                            <div class="step7-info-block">
                                <div class="step7-info-block-title">
                                    <span>AIKA</span>
                                </div>
                                <div class="step7-info-block-text">@{{ time }}</div>
                            </div>
                            <div class="step7-info-block">
                                <div class="step7-info-block-title">
                                    <span>PAIKKA</span>
                                </div>
                                <div class="step7-info-block-text">@{{ adress }}</div>
                            </div>
                            <div class="step7-info-block">
                                <div class="step7-info-block-title">
                                    <span>AUTO</span>
                                </div>
                                <div class="step7-info-block-text">@{{ num }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="step7-row" style="padding:26px; box-sizing: border-box">
                        <h1 style="text-align: left; font-weight: 700">Pesu ja vahaus </h1>
                        <ul class="final-ul">
                            <li v-if="checked1">Hyönteistenpoisto <span>{!! $prices->step5_1 !!} €</span></li>
                            <li v-if="checked2">Karvojenpoisto  <span>{!! $prices->step5_2 !!} €</span></li>
                            <li v-if="checked3">Renkaiden vaihto <span>{!! $prices->step5_3 !!} €</span></li>
                            <li v-if="active1">Ulkopesu <span>{!! $prices->step6_1 !!} €</span></li>
                            <li v-if="active2">Ovenvälienpesu <span>{!! $prices->step6_2 !!} €</span></li>
                            <li v-if="active3">Rengaskiilto <span>{!! $prices->step6_3 !!} €</span></li>
                            <li v-if="active4">Kevytvaha <span>{!! $prices->step6_4 !!} €</span></li>
                        </ul>
                        <div class="step7-pesu">
                            <div class="step7-pesu-left">max 60 minuuttia</div>
                            <div class="step7-pesu-right"><b>@{{ price }} €</b></div>
                        </div>
                    </div>
                    <div class="step7-line"></div>
                    <div class="step7-row" style="padding:26px; box-sizing: border-box">
                        <div class="step7-pesu">
                            <div class="step7-pesu-left" style="color:#9D9FB4">YHTEENSÄ</div>
                            <div class="step7-pesu-right"><b style="font-size: 24px; position: relative; bottom: 6px">@{{ price }} €</b></div>
                        </div>
                    </div>

                    @if(!Session::has('auth'))

                    <div class="step7-input" style="height: auto">
                        <input type="text" name="name" placeholder="Nimi" required>
                        <input type="text" name="secondname" placeholder="Sukunimi" required>
                        <input type="text" name="email" placeholder="Sähköposti" required>
                        <input type="text" name="phone" placeholder="Puhelinnumero" required>
                    </div>
                    @endif


                    <div class="step7-row">
                        <div class="step7-button" v-on:click="showInput(2)"><span>MINULLA ON KUPONKI</span></div>
                    </div>

                    <div class="step7-row">
                        <div class="step7-input" v-bind:class="{step7_active_input: isCupon}">
                            <input type="text" name="cupon" v-model="cupon" :placeholder="placeholder">
                            <div v-on:click="findPercent()" style="width: 100%; padding: 15px; box-sizing: border-box; background: #FF6600; text-align: center; color: #FFF; font-weight: 700; font-size: 22px; text-transform:uppercase; cursor:pointer;">aktivoi kuponki</div>
                        </div>
                    </div>

                    <div class="step7-row">
                        <div class="step7-button" v-on:click="showInput(3)"><span>kommentti tilaukseen...</span></div>
                    </div>

                    <div class="step7-row">
                        <div class="step7-input" style="" v-bind:class="{step7_active_input: isComment}">
                            <textarea name="comment" id="" placeholder="Syötä kommentti…"></textarea>
                        </div>
                    </div>



                    <div class="step7-row">
                        <div class="step7-pay">
                            <form id="payment-form">

                                <div id="payment-element">

                                </div>

                                <button id="submit">

                                <div class="spinner hidden" id="spinner"></div>

                                <span id="button-text">Tilaa pesu</span>

                                </button>

                                <div id="payment-message" class="hidden"></div>

                            </form>
                        </div>
                    </div>

                    <div class="step7-row">
                        <div class="step7-input" style="height: auto">
                            <input type="submit" value="TILAA PESU">
                        </div>
                    </div>

                    </form>
                </div>
                <div class="order-controller" v-if="(step > 2 && step < 5) || step == 7" v-bind:class="{ order_controller_step_6: step >= 5 && step < 7}" style="position: relative">
                    <div class="order-controller-container">
                        <div class="order-controller-back" v-on:click="back()">
                            <img src="{{ asset('img/back.svg') }}" alt="">
                        </div>
                        <div class="order-controller-panel">
                            <div class="order-controller-line"></div>
                            <div class="order-controller-steps">
                                <div class="order-controller-step" v-on:click="goStep(3)" v-bind:class="{ order_controller_active_line: step == 3, order_controller_step_active: step > 3} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(4)" v-bind:class="{ order_controller_active_line: step == 4, order_controller_step_active: step > 4} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(5)" v-bind:class="{ order_controller_active_line: step == 5, order_controller_step_active: step > 5} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(6)" v-bind:class="{ order_controller_active_line: step == 6, order_controller_step_active: step > 6} " ></div>
                                <div class="order-controller-step" v-on:click="goStep(7)" v-bind:class="{ order_controller_active_line: step == 7, order_controller_step_active: step > 7} " ></div>
                            </div>
                        </div>
                        <div class="order-controller-close" v-on:click="toBegin()">
                            <img src="{{ asset('img/close.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="button-create-order" v-if="step < 2">
            <div class="button" v-on:click="click()" v-bind:class="{ rotate: step == 1} "><span>+</span></div>
        </div>



    <div class="modal-container" v-if="modal">
        <div class="back" v-on:click="setModal()" style="position: relative; top: 20px; left: 20px;">
            <img src="{{ asset('img/back.svg') }}" alt="" style=" width: 50px; height: 50px;">
        </div>
        <form action="{{ route('sendMail') }}" method="POST">
            @csrf
        <div class="modal step7-input" style="height: auto;">
            <fieldset>
                <h4>Haluatko autopesu sopimuksen?
                     Jätä tiedot niin olemme teihin
                     pikimmiten yhteydessä!
                     Sopimusasiakkaana saat pesut
                     vähintään -10% hintaan.
                     Työntekijäsi tilaavat pesut myös
                     alennettuun hintaan.
                </h4>

                <input type="text" name="interval" placeholder="Haluttu pesuväli: (esim. kerran kuukaudessa)" required="required">
                <input type="text" name="where" placeholder="Sisäpesut, ulkopesut vaiko molemmat?" required="required">
                <input type="text" name="amount" placeholder="Kuinka monta ajoneuvoa yrityksellä on ja minkälaisia? (esim. pakettiautoja, kuorma-autoja)" required="required">
            </fieldset>
            <fieldset>
                <h4>Yrityksen tiedot</h4>

                <input type="text" name="name" placeholder="Nimi" required="required">
                <input type="text" name="ytun" placeholder="Y-tunnus" required="required">
                <input type="text" name="adress" placeholder="Osoite" required="required">
                <input type="text" name="index" placeholder="Postinumero" required="required">
                <input type="text" name="indexStreet" placeholder="Postitoimipaikka" required="required">
            </fieldset>
            <fieldset>
                <h4>Yhteyshenkilö</h4>
                <input type="text" name="nameAndSecondname" placeholder="Etu- ja sukunimi" required="required">
                <input type="text" name="email" placeholder="Sähköpostiosoite" required="required">
                <input type="text" name="phone" placeholder="Puhelinnumero" required="required">
            </fieldset>
           <input type="submit" value="Lähetä tiedot" style="cursor: pointer;">
        </div>
        </form>
    </div>





        <footer>
            <div class="footer-container">
                @if(Session::has('auth'))
                <a href="{{ route('last') }}" v-if="step == 0" style="z-index: 9999999" class="footer-left"><img src="{{ asset('img/time.png') }}" alt=""></a>
                @endif
                <a href="{{ route('profile') }}" v-if="step == 0" class="footer-right"><img src="{{ asset('img/profile.png') }}" alt=""></a>
            </div>
        </footer>
    </div>




    </div>
    <style>
        .custom-map-control-button {
            padding: 10px;
            background: #FFF;
            color: #333;
            display:block;
            padding-left: 20px;
            padding-right: 20px;
            margin-top: 20px;
            font-size: 18px;
            cursor: pointer;
        }

        .step7-pay #submit {
            display: none;
        }

        .gm-ui-hover-effect {
            display: none !important;
        }
    </style>
</body>

@php $day_z = date("d"); $month_z = date("m")-1; @endphp

@if(isset($data)) @php $num = $data->auto; @endphp @endif

<script>

var app = new Vue({
  el: '#app',
  data: {
    step: 0,
    @if(isset($num)) num: "{!! $num !!}", @else num: "", @endif
    orderType: "none",
    carType: "none",
    modal: false,
    adress: "",
    time: "",
    date: "",
    month: {!! $month_z !!},
    day: {!! $day_z !!},
    months: ['Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kesäkuu', 'Heinäkuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu'],
    isTime: 0,
    isDay: 0,
    mainType: "none",
    checked1: false,
    checked2: false,
    checked3: false,
    active1: false,
    active2: false,
    active3: false,
    active4: false,
    active54: false,
    price1: 0,
    price3: 0,
    price41: 0,
    price42: 0,
    price43: 0,
    price44: 0,
    price5: 0,
    price61:0,
    price62:0,
    price63:0,
    price64:0,
    price: 0,
    isAuth: 0,
    isComment:0,
    isCupon:0,
    cuponActivated: 0,
    cupon: null,
    placeholder: "KUPONKI",
  },
  methods: {
    setModal() {
        if(this.modal) this.modal = false;
        else this.modal = true;
    },
    findPercent() {
        if(this.cuponActivated == 0) {
            @foreach($cupons as $cupon)
                @php
                $dateFrom = explode('-',$cupon->date);
                $dateTo = explode('-',$cupon->dateTo);
                $day_from = $dateFrom[2];
                $day_to = $dateTo[2];
                $month_from = $dateFrom[1];
                $month_to = $dateTo[1];
                $year_to = $dateTo[0];
                $year_from = $dateFrom[0];
                @endphp
                @if(date('d') >= $day_from && date('m') >= $month_from && '20'.date('y') >= $year_from && date('d') <= $day_to && date('m') <= $month_to && '20'.date('y') <= $year_to )
                        if(this.cupon == "{{ $cupon->code }}") {
                            percent = this.price*({{ $cupon->percent }}/100);
                            this.price = this.price-percent;
                            this.price = this.price.toFixed();
                            this.cuponActivated = 1;
                        }
                @endif
            @endforeach
        }
    },
    goStep(step) {
        if(this.step > step) {
            this.step = step;
        }
    },
    showInput(id) {
        if(id == 1) {
            this.isAuth = 1;
            this.isComment = 0;
            this.isCupon = 0;
        }
        if(id == 2) {
            this.isAuth = 0;
            this.isComment = 0;
            this.isCupon = 1;
        }
        if(id == 3) {
            this.isAuth = 0;
            this.isComment = 1;
            this.isCupon = 0;
        }
    },
    dayForward() {
        if(this.month + 1 != 12) {
            if(this.month == 0 || this.month == 2 || this.month == 4 || this.month == 6 || this.month == 8 || this.momth == 10) {
                if(this.day+1 != 32) {
                    this.day += 1;
                }
                else {
                    this.day = 1;
                    this.month += 1;
                }
            }
            else {
                if(this.day+1 != 31) {
                    this.day += 1;
                }
                else {
                    this.day = 1;
                    this.month += 1;
                }
            }
        }
        else {
            if(this.day+1 != 32) {
                this.day += 1;
            }
            else {
                this.day = 1;
                this.month = 0;
            }
        }

    },
    dayBack() {
        if((this.day-1 >= {!! $day_z !!} && this.month == {!! $month_z !!}) || this.month > {!! $month_z !!})
            if(this.month - 1 != -1) {
                if(this.month == 0 || this.month == 2 || this.month == 4 || this.month == 6 || this.month == 8 || this.momth == 10) {
                    if(this.day-1 != 0) {
                        this.day -= 1;
                    }
                    else {
                        this.day = 31;
                        this.month -= 1;
                    }
                }
                else {
                    if(this.day-1 != 0) {
                        this.day -= 1;
                    }
                    else {
                        this.day = 30;
                        this.month -= 1;
                    }
                }
            }
            else {
                if(this.day-1 != 0) {
                    this.day -= 1;
                }
                else {
                    this.day = 30;
                    this.month = 11;
                }
            }
    },
    selectTime(num, string, isBlock) {
        if(isBlock == 0) {
            this.isTime = num;
            this.time = string;
        }
    },
    go() {
        this.adress = document.getElementById("adress__location").value;
        if(this.step+1 > 7) {
            this.step = 7;
        }
        else {
            this.step = this.step+1;
        }
    },
    back() {
        if(this.step-1 < 0) {
            this.step = 0;
        }
        else {
            this.step = this.step-1;
        }
    },
    click() {
        if(this.step == 0)
            this.step = 1;
        else
            this.step = 0;
    },
    toBegin() {
        this.step = 0;
    },
    setType(type, step) {
        if(step == 3) {
            this.orderType = type;
        }

        if(step == 4) {
            this.carType = type;
        }
    },
    rise(step, sum) {
        if(step == 1) {
            this.price = 0;
            this.price1 = this.price1+sum;
            this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
        }
        if(step == 3){
            this.price = 0;
            this.price3 = this.price1+sum;
            this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
        }
        if(step == 5){
            this.price = 0;
            this.price5 = this.price5+sum;
            this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
        }
    },
    checkBoxMethod(box, sum)  {
        if(box == 1){
            if(this.checked1 == false) {
                this.price = 0;
                this.price41 = this.price41+sum;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
            else {
                this.price = 0;
                this.price41 = 0;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
        }
        if(box == 2) {
            if(this.checked2 == false) {
                this.price = 0;
                this.price42 = this.price42+sum;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
            else {
                this.price = 0;
                this.price42 = 0;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
        }
        if(box == 3) {
            if(this.checked3 == false) {
                this.price = 0;
                this.price43 = this.price43+sum;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
            else {
                this.price = 0;
                this.price43 = 0;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
        }
        if(box == 4) {
            this.price = 0;
            this.price44 = this.price44+sum;
            this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
        }
    },
    setActive(step, sum) {
        if(step == 1) {
            if(this.active1 == false) {
                this.active1 = true;
                this.price61 = sum;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
            else {
                this.active1 = false;
                this.price61 = 0;
                this.price  = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
        }
        if(step == 2) {
            if(this.active2 == false) {
                this.active2 = true;
                this.price62 = sum;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
            else {
                this.active2 = false;
                this.price62 = 0;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
        }
        if(step == 3) {
            if(this.active3 == false) {
                this.active3 = true;
                this.price63 = sum;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
            else {
                this.active3 = false;
                this.price63 = 0;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
        }
        if(step == 4) {
            if(this.active4 == false) {
                this.active4 = true;
                this.price64 = sum;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
            else {
                this.active4 = false;
                this.price64 = 0;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
        }
        if(step == 5) {
            if(this.active54 == false) {
                this.active54 = true;
                this.price5 = sum;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
            else {
                this.active54 = false;
                this.price5 = 0;
                this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
            }
        }
        if(step == 6) {
            this.price5 = 0;
            this.price = this.price1+this.price3+this.price41+this.price42+this.price43+this.price44+this.price5+this.price61+this.price62+this.price63+this.price64;
        }
    }
  },
  mounted() {
      let recaptchaScript = document.createElement('script')
      recaptchaScript.setAttribute('src', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB7ZrPl6qQ98pf1QLbur5DYjf2bFgcMFOs&region=FI&language=en&callback=initialize&libraries=places&v=weekly')
      document.head.appendChild(recaptchaScript)

      let pay = document.createElement('script')
      pay.setAttribute('src','https://js.stripe.com/v3/')
      document.head.appendChild(pay)
    },
})

</script>
<script>
  window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }
</script>

<script>
$(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});
</script>


<script type="text/javascript">
    function BrowserDetection() {

        //Check if browser is Safari, if it is, hide the <video> tag, otherwise hide the <img> tag
        if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
            document.getElementById('video-tagz').style.display= "none";
        } else {
            document.getElementById('img-tag').style.display= "none";
        }
    }

        //And run the script. Note that the script tag needs to be run after HTML so where you place it is important.
        BrowserDetection();
    </script>

</html>

<script>
$('form button').on("click",function(e){
    e.preventDefault();
});
</script>

