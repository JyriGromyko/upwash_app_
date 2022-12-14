<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>UpWash</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="{{ asset('img/favicon-old.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#fff" />

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/checkout.js') }}"></script>
    <script src="{{ asset('js/map-js.js') }}"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>

    
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HKPWBBNHMS"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-HKPWBBNHMS');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   var z = null;m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(90108297, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90108297" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '436988714373971'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=436988714373971&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<body>
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<div id="app">

    <form action="{{ route('addClient') }}" method="POST" id="add-client">
        @csrf
        <input type="hidden" name="price" v-bind:value="price">
        <div class="desktop">
            <div>
                        <input type="hidden" id="sis1_1" name="sis1_1" value="{{ $prices->sis1_1 }}">
                        <input type="hidden" id="sis1_2" name="sis1_2" value="{{ $prices->sis1_2 }}">
                        <input type="hidden" id="sis1_3" name="sis1_3" value="{{ $prices->sis1_3 }}">
                        <input type="hidden" id="sis1_4" name="sis1_4" value="{{ $prices->sis1_4 }}">
                        <input type="hidden" id="sis1_5" name="sis1_5" value="{{ $prices->sis1_5 }}">
                        <input type="hidden" id="sis1_6" name="sis1_6" value="{{ $prices->sis1_6 }}">
                        <input type="hidden" id="sis1_7" name="sis1_7" value="{{ $prices->sis1_7 }}">
                        <input type="hidden" id="sis1_8" name="sis1_8" value="{{ $prices->sis1_8 }}">
                        <input type="hidden" id="sis1_9" name="sis1_9" value="{{ $prices->sis1_9 }}">
                        <input type="hidden" id="sis1_10" name="sis1_10" value="{{ $prices->sis1_10 }}">
                        <input type="hidden" id="sis1_11" name="sis1_11" value="{{ $prices->sis1_11 }}">
                        <input type="hidden" id="sis1_12" name="sis1_12" value="{{ $prices->sis1_12 }}">
                    </div>
                    <div>
                        <input type="hidden" id="sis2_1" name="sis2_1" value="{{ $prices->sis2_1 }}">
                        <input type="hidden" id="sis2_2" name="sis2_2" value="{{ $prices->sis2_2 }}">
                        <input type="hidden" id="sis2_3" name="sis2_3" value="{{ $prices->sis2_3 }}">
                        <input type="hidden" id="sis2_4" name="sis2_4" value="{{ $prices->sis2_4 }}">
                    </div>
                    <div>
                        <input type="hidden" id="sis3_1" name="sis3_1" value="{{ $prices->sis3_1 }}">
                        <input type="hidden" id="sis3_2" name="sis3_2" value="{{ $prices->sis3_2 }}">
                        <input type="hidden" id="sis3_3" name="sis3_3" value="{{ $prices->sis3_3 }}">
                    </div>
                    <div>
                        <input type="hidden" id="ulk1_1" name="ulk1_1" value="{{ $prices->ulk1_1 }}">
                        <input type="hidden" id="ulk1_2" name="ulk1_2" value="{{ $prices->ulk1_2 }}">
                        <input type="hidden" id="ulk1_3" name="ulk1_3" value="{{ $prices->ulk1_3 }}">
                        <input type="hidden" id="ulk1_4" name="ulk1_4" value="{{ $prices->ulk1_4 }}">
                        <input type="hidden" id="ulk1_5" name="ulk1_5" value="{{ $prices->ulk1_5 }}">
                        <input type="hidden" id="ulk1_6" name="ulk1_6" value="{{ $prices->ulk1_6 }}">
                        <input type="hidden" id="ulk1_7" name="ulk1_7" value="{{ $prices->ulk1_7 }}">
                        <input type="hidden" id="ulk1_8" name="ulk1_8" value="{{ $prices->ulk1_8 }}">
                        <input type="hidden" id="ulk1_9" name="ulk1_9" value="{{ $prices->ulk1_9 }}">
                        <input type="hidden" id="ulk1_10" name="ulk1_10" value="{{ $prices->ulk1_10 }}">
                        <input type="hidden" id="ulk1_11" name="ulk1_11" value="{{ $prices->ulk1_11 }}">
                    </div>
                     <div>
                        <input type="hidden" id="ulk2_1" name="ulk2_1" value="{{ $prices->ulk2_1 }}">
                        <input type="hidden" id="ulk2_2" name="ulk2_2" value="{{ $prices->ulk2_2 }}">
                        <input type="hidden" id="ulk2_3" name="ulk2_3" value="{{ $prices->ulk2_3 }}">
                        <input type="hidden" id="ulk2_4" name="ulk2_4" value="{{ $prices->ulk2_4 }}">
                        <input type="hidden" id="ulk2_5" name="ulk2_5" value="{{ $prices->ulk2_5 }}">
                        <input type="hidden" id="ulk2_6" name="ulk2_6" value="{{ $prices->ulk2_6 }}">
                        <input type="hidden" id="ulk2_7" name="ulk2_7" value="{{ $prices->ulk2_7 }}">
                        <input type="hidden" id="ulk2_8" name="ulk2_8" value="{{ $prices->ulk2_8 }}">
                        <input type="hidden" id="ulk2_9" name="ulk2_9" value="{{ $prices->ulk2_9 }}">
                        <input type="hidden" id="ulk2_10" name="ulk2_10" value="{{ $prices->ulk2_10 }}">
                    </div>
                    <div>
                        <input type="hidden" id="ulk3_1" name="ulk3_1" value="{{ $prices->ulk3_1 }}">
                        <input type="hidden" id="ulk3_2" name="ulk3_2" value="{{ $prices->ulk3_2 }}">
                        <input type="hidden" id="ulk3_3" name="ulk3_3" value="{{ $prices->ulk3_3 }}">
                        <input type="hidden" id="ulk3_4" name="ulk3_4" value="{{ $prices->ulk3_4 }}">
                    </div>
                    <div>
                        <input type="hidden" id="mol1_1" name="mol1_1" value="{{ $prices->mol1_1 }}">
                        <input type="hidden" id="mol1_2" name="mol1_2" value="{{ $prices->mol1_2 }}">
                        <input type="hidden" id="mol1_3" name="mol1_3" value="{{ $prices->mol1_3 }}">
                        <input type="hidden" id="mol1_4" name="mol1_4" value="{{ $prices->mol1_4 }}">
                    </div>
                    <div>
                        <input type="hidden" id="mol2_1" name="mol2_1" value="{{ $prices->mol2_1 }}">
                        <input type="hidden" id="mol2_2" name="mol2_2" value="{{ $prices->mol2_2 }}">
                        <input type="hidden" id="mol2_3" name="mol2_3" value="{{ $prices->mol2_3 }}">
                        <input type="hidden" id="mol2_4" name="mol2_4" value="{{ $prices->mol2_4 }}">
                    </div>
                    <div>
                        <input type="hidden" id="mol3_1" name="mol3_1" value="{{ $prices->mol3_1 }}">
                        <input type="hidden" id="mol3_2" name="mol3_2" value="{{ $prices->mol3_2 }}">
                    </div>


            <div class="sections">
                <section class="main step0">
                    <div class="main-container">
                        <svg width="162" height="129" viewBox="0 0 162 129" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="logo">
                                <rect width="162" height="129" fill="url(#pattern0)"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_59_58" transform="translate(0 -0.000768049) scale(0.00358423 0.00463674)"/>
                                </pattern>
                                <image id="image0_59_58" width="279" height="216" xlink:href="data:image/png;base64,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"/>
                                </defs>
                                </svg>
                        <section class="slider">
                          <div class="slide slide_1 active">
                            <div class="row">
                                <div class="img-cont">
                                    <img src="{{ asset('img/1.svg') }}" alt="">
                                </div>
                                
                                <div class="row">
                                    <h1>Autopesu, joka tulee luoksesi sijainnista riippumatta</h1>
                                    <p>Tulemme luoksesi ja pesemme autosi ymp??rist??yst??v??llisesti</p>
                                    
                                </div>
                            </div>
                          </div>
                          <div class="slide slide_2">
                              <div class="row">
                                  <div class="img-cont">
                                    <img src="{{ asset('img/2.png') }}" alt="">
                                  </div>
                                  
                                  <div class="row">
                                      <h1>Ei turhaa jonottamista autopesuloissa</h1>
                                      <p>K??yt?? aikaasi fiksummin ja vapauta p??iv??st??si aikaa johonkin muuhun</p>
                                     
                                  </div>
                              </div>
                          </div>
                          <div class="slide slide_3">
                              <div class="row">
                                  <div class="img-cont">
                                      <img src="{{ asset('img/3_.png') }}" alt="">
                                  </div>
                                  <div class="row">
                                      <h1>Kunnioitamme luontoa</h1>
                                      <p>98% pienempi vedenkulutus pesukatuun verrattuna. Olemme markkinoiden ymp??rist??yst??v??llin autopesu.</p>
                                      
                                  </div>
                              </div>
                          </div>
                          <div class="slide slide_4">
                              <div class="row">
                                  
                                  <div class="img-cont">
                                      <img src="{{ asset('img/4_.png') }}" alt="" style="height: 10vh;width: auto;position: absolute; margin-top:45px; -webkit-animation-duration: 14s;z-index: 2;">
                                      <img src="{{ asset('img/4_svg.svg') }}" alt="" style="height:15vh;">
                                  </div>
                                  <div class="row">
                                      <h1>Saavumme aina paikalle sovitusti</h1>
                                      <p>Kaikki supersankarit eiv??t aina pid?? viittaa p????ll??.</p>
                                      
                                  </div>
                              </div>
                          </div>
                        </section>
                        <div class="btns">
                            <div onclick="document.querySelector('.main').remove();document.querySelector('.step1').classList.add('section_active');" href="#_" class="start" />aloita nyt</div>
                            <a href="/login/">minulla on jo k??ytt??j??tili</a>
                        </div>
                        
                    </div>
                </section>

                 <div class="map-symbol">
                        <div class="header">
                            <div class="burger-container">
                              <div id="burger">
                                <div class="bar topBar"></div>
                                <div class="bar btmBar"></div>
                              </div>
                            </div>

                            
                            
                            <div class="icon icon-apple"></div>
                            <ul class="menu menu1" style="border-bottom: 1px solid rgba(0,0,0,.2);">
                              <li class="menu-item menu-item-login"><a href="/login">Kirjaudu sis????n</a></li>
                              
                              @if(Session::has('auth'))
                              <li class="menu-item"><div onclick="open_maksutapa(this)">Maksutapa</a></li>
                              <li class="menu-item"><a href="/profile/campaings">Kampanjat</a></li>
                              <li class="menu-item"><a href="/profile#kuitit">Omat tilaukset</a></li>
                              <li class="menu-item"><a href="#">Yrityksille</a></li>
                              <li class="menu-item"><a href="/addTicket/">Tuki</a></li>
                              <li class="menu-item"><a href="https://upwash.fi" target="_blank">Tietoa meist??</a></li>

                              
                              @endif
                            </ul>
                            <div class="menu-item__add1">
                                <div class="backbtn"><img src="{{ asset('img/backarrow.svg') }}" alt="Back" onclick="open_maksutapa(this)"></div>
                                <ul class="menu_addon1">
                                    <li>
                                        <label>
                                            <span>Apple Pay</span>
                                            <input type="checkbox">
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <div class="toggle_credit" onclick="document.querySelector('.credit-card-inputs').classList.add('active')">Lis???? pankki-/luottokortti</div>
                                            <div class="credit-card-inputs">
                            <div class="credit-card-inputs__fields">
                                <input type="text" data-pos="1" placeholder="xxxx" class="cardnum">
                                <input type="text" data-pos="2" placeholder="xxxx" class="cardnum">
                                <input type="text" data-pos="3" placeholder="xxxx" class="cardnum">
                                <input type="text" data-pos="4" placeholder="xxxx" class="cardnum">
                            </div>
                            <div class="credit-card-inputs__fields">
                                <input type="text" data-pos="1" placeholder="XX" maxlength="2" onkeypress="return isNumber(event)" class="carddate">
                                <span>/</span>
                                <input type="text" data-pos="2" placeholder="XX" maxlength="2" onkeypress="return isNumber(event)" class="carddate">
                            </div>
                        </div>

                        <div class="demo__result" style="display: none;">
                            <input type="text" id="credit_card_result">
                        </div>
                                           </label>
                                            </li>
                                        </ul>
                            </div>

                            <script>
                                function open_maksutapa(e) {
                                    document.querySelector('.menu1').classList.toggle("hidden");

                                    document.querySelector(".menu-item__add1").classList.toggle("active");
                                }
                            </script>
                            
                            
                            <ul class="menu menu2" style="margin-top: 10px;">
                                <li class="menu-item"><svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.2596 4.13401C29.3846 4.13401 30.1086 4.15573 32.5267 4.26433C34.7638 4.36569 35.9801 4.73493 36.791 5.06072C37.8553 5.4734 38.6227 5.97296 39.4264 6.77659C40.23 7.58022 40.7223 8.34766 41.1422 9.41193C41.4535 10.2156 41.8228 11.4319 41.9386 13.669C42.0472 16.0944 42.0689 16.8184 42.0689 22.9361C42.0689 29.0611 42.0472 29.7851 41.9386 32.2033C41.8373 34.4332 41.4608 35.6495 41.1422 36.4676C40.7296 37.5319 40.23 38.2921 39.4264 39.103C38.6227 39.9066 37.8553 40.3989 36.791 40.8188C35.9874 41.1301 34.7711 41.4994 32.5267 41.6152C30.1086 41.7238 29.3846 41.7455 23.2596 41.7455C17.1418 41.7455 16.4178 41.7238 13.9997 41.6152C11.7625 41.5139 10.5462 41.1374 9.73534 40.8188C8.67107 40.4061 7.90364 39.9066 7.1 39.103C6.29637 38.2921 5.80405 37.5319 5.38413 36.4676C5.07282 35.664 4.70358 34.4477 4.58774 32.2033C4.47914 29.7851 4.45742 29.0611 4.45742 22.9361C4.45742 16.8184 4.47914 16.0944 4.58774 13.669C4.6891 11.4391 5.05834 10.2228 5.38413 9.41193C5.79681 8.34766 6.29637 7.58022 7.1 6.77659C7.90364 5.97296 8.67107 5.48064 9.73534 5.06072C10.539 4.7494 11.7553 4.37293 13.9997 4.26433C16.4178 4.15573 17.1418 4.13401 23.2596 4.13401ZM23.2596 0C17.0332 0 16.2585 0.0361993 13.8042 0.144799C11.3643 0.253399 9.6919 0.644354 8.23667 1.20907C6.73076 1.79551 5.45653 2.57742 4.17506 3.85165C2.90807 5.12588 2.12616 6.40735 1.54696 7.91326C0.982247 9.36849 0.591289 11.0409 0.47545 13.4808C0.366852 15.9206 0.337891 16.7098 0.337891 22.9289C0.337891 29.1625 0.366852 29.9372 0.47545 32.3843C0.591289 34.8314 0.982247 36.4966 1.54696 37.9518C2.12616 39.4649 2.90807 40.7392 4.18954 42.0134C5.46377 43.2876 6.738 44.0768 8.25115 44.656C9.70638 45.2207 11.3716 45.6117 13.8187 45.7203C16.2585 45.8361 17.0404 45.8651 23.274 45.8651C29.5076 45.8651 30.2751 45.8361 32.7294 45.7203C35.1693 45.6117 36.8417 45.2207 38.2969 44.656C39.8028 44.0768 41.0843 43.2876 42.3585 42.0134C43.6328 40.7392 44.4219 39.4649 45.0011 37.9518C45.5658 36.4966 45.9568 34.8314 46.0654 32.3843C46.1812 29.9444 46.2102 29.1625 46.2102 22.9289C46.2102 16.6953 46.1812 15.9206 46.0654 13.4735C45.9568 11.0264 45.5658 9.36125 45.0011 7.90602C44.4219 6.39287 43.6328 5.11864 42.3585 3.84441C41.0843 2.56294 39.8028 1.78103 38.2969 1.20183C36.8417 0.637114 35.1693 0.246157 32.7294 0.137559C30.2751 0.0361988 29.4932 0 23.2596 0Z" fill="#010101"/><path d="M23.9852 11C17.362 11 12 16.371 12 22.9963C12 29.6216 17.3768 35 24 35C30.6232 35 36 29.629 36 22.9963C35.9853 16.371 30.6159 11 23.9852 11ZM23.9852 30.7873C19.6853 30.7873 16.2041 27.305 16.2041 23.0037C16.2041 18.7024 19.6853 15.2201 23.9852 15.2201C28.2926 15.2201 31.7738 18.7024 31.7738 23.0037C31.7812 27.2976 28.2926 30.7873 23.9852 30.7873Z" fill="#010101"/><path d="M39 11.0039C39 12.6518 37.6518 14 35.9961 14C34.3482 14 33 12.6518 33 11.0039C33 9.34823 34.3482 8 35.9961 8C37.6518 8 39 9.34034 39 11.0039Z" fill="#010101"/></svg><a href="https://instagram.com/upwashfinland"  target="_blank">Instagram</a></li>
                                <li class="menu-item"><svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.4259 18.0051V22.1012H33.575L32.8526 27.7093H28.4259V40.5654H22.8092V27.7093H18V22.1012H22.8092V18.0051C22.8092 13.5612 26.3931 10.5654 30.8198 10.5654C32.7676 10.5654 34 10.8636 34 10.8636V15.6057H30.8198C29.5024 15.6057 28.4259 16.6847 28.4259 18.0051Z" fill="black"/><path d="M25.7163 51.4326C11.5477 51.4326 0 39.9066 0 25.7163C0 11.526 11.5477 0 25.7163 0C39.9066 0 51.4326 11.5477 51.4326 25.7163C51.4326 39.8849 39.9066 51.4326 25.7163 51.4326ZM25.7163 1.41179C12.3007 1.41179 1.40455 12.3079 1.40455 25.7163C1.40455 39.1247 12.3007 50.0208 25.7163 50.0208C39.1247 50.0208 50.0208 39.1247 50.0208 25.7163C50.0208 12.3079 39.1247 1.41179 25.7163 1.41179Z" fill="black"/></svg><a href="https://facebook.com/UpWashSuomi" target="_blank">Facebook</a></li>
                                <li class="menu-item"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.5084 21.4723C41.2336 19.6527 39.6864 18.3521 37.8861 18.3521H17.1429C15.3426 18.3521 13.7953 19.6747 13.5133 21.4723C13.2603 23.1529 13 25.4913 13 28.3484C13.0217 31.2128 13.2603 33.5512 13.5133 35.2318C13.7953 37.0221 15.3426 38.3521 17.1429 38.3521H37.8644C39.6647 38.3521 41.2336 37.0221 41.4867 35.2318C41.7469 33.5293 42 31.2128 42 28.3484C42 25.4913 41.7686 23.1529 41.5084 21.4723ZM24.438 32.3455V24.3805L31.7838 28.3703L24.438 32.3455Z" fill="black"/><path d="M27.8014 55.6028C12.4817 55.6028 0 43.1428 0 27.8014C0 12.4889 12.4817 0 27.8014 0C43.1139 0 55.5955 12.4889 55.5955 27.8014C55.5955 43.1428 43.1428 55.6028 27.8014 55.6028ZM27.8014 1.52763C13.2998 1.52763 1.52039 13.307 1.52039 27.8014C1.52039 42.303 13.2998 54.0824 27.8014 54.0824C42.2958 54.0824 54.0752 42.303 54.0752 27.8014C54.0752 13.307 42.2958 1.52763 27.8014 1.52763Z" fill="black"/></svg>
                                <a href="https://m.youtube.com/channel/UC9ipuLGPvAl5SU4vcH9VQSg"  target="_blank">Youtube</a></li>
                                <li class="menu-item"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.61731 0C2.97562 0 0 2.98286 0 6.62455V48.9855C0 52.6272 2.97562 55.6028 6.61731 55.6028H48.9782C52.6199 55.6028 55.5955 52.6272 55.5955 48.9855V6.62455C55.5955 2.98286 52.6199 0 48.9782 0H6.61731ZM6.61731 2.64982H48.9782C51.1937 2.64982 52.953 4.40913 52.953 6.62455V48.9855C52.953 51.2009 51.1937 52.953 48.9782 52.953H6.61731C4.40189 52.953 2.64982 51.2009 2.64982 48.9855V6.62455C2.64982 4.40913 4.40189 2.64982 6.61731 2.64982ZM29.177 7.94946C28.815 7.94946 28.5037 8.07254 28.243 8.33318C27.9896 8.59382 27.8593 8.90513 27.8593 9.26713C27.8593 9.26713 27.8448 15.7179 27.8304 22.1904C27.8231 25.4267 27.8086 28.6629 27.8086 31.1028C27.8014 33.5354 27.8014 35.0775 27.8014 35.2079C27.8014 37.6115 25.6149 39.5735 23.1316 39.5735C20.6628 39.5735 18.6935 37.6043 18.6935 35.1355C18.6935 32.6666 20.6628 30.6974 23.1316 30.6974C23.2113 30.6974 23.385 30.7263 23.6674 30.7625C23.8556 30.7843 24.0439 30.7698 24.2249 30.7119C24.4059 30.6539 24.5651 30.5598 24.7099 30.4367C24.8475 30.3137 24.9561 30.1616 25.0357 29.9879C25.1154 29.8141 25.1516 29.6331 25.1516 29.4449V23.8846C25.1516 23.5371 25.0285 23.233 24.7896 22.9796C24.5507 22.7262 24.2611 22.5814 23.9135 22.5597C23.7036 22.5524 23.4429 22.5235 23.1316 22.5235C16.1813 22.5235 10.5196 28.1851 10.5196 35.1355C10.5196 42.0858 16.1813 47.7474 23.1316 47.7474C30.082 47.7474 35.7436 42.0858 35.7436 35.1355V23.1606C37.6694 24.6955 40.0659 25.6729 42.7157 25.6729C43.0777 25.6729 43.4252 25.6511 43.751 25.6222C44.0913 25.5932 44.3809 25.4484 44.6053 25.195C44.837 24.9416 44.9528 24.6448 44.9528 24.3045V18.1216C44.9528 17.7741 44.837 17.47 44.5981 17.2166C44.3664 16.9632 44.0696 16.8256 43.7293 16.7967C39.5663 16.4998 36.2432 13.2563 35.8088 9.12957C35.7798 8.79653 35.635 8.51418 35.3816 8.28974C35.1282 8.05806 34.8314 7.94946 34.4983 7.94946H29.177ZM30.5019 10.592H33.521C34.4839 14.9577 37.8939 18.2881 42.3102 19.1279V22.9217C39.4722 22.7769 36.9889 21.3651 35.5264 19.1352C35.3671 18.889 35.1427 18.7225 34.8676 18.6211C34.5925 18.5198 34.3173 18.5125 34.035 18.5922C33.7599 18.6791 33.5282 18.8383 33.3544 19.0773C33.1807 19.3089 33.0938 19.5696 33.0938 19.8664V35.1355C33.0938 40.6523 28.6485 45.0976 23.1316 45.0976C17.6148 45.0976 13.1622 40.6523 13.1622 35.1355C13.1622 29.8431 17.2962 25.6367 22.5018 25.2964V28.1779C18.9107 28.5109 16.0437 31.4576 16.0437 35.1355C16.0437 39.0306 19.2293 42.2234 23.1316 42.2234C27.005 42.2234 30.444 39.1681 30.444 35.2079C30.444 35.273 30.4512 33.5427 30.4512 31.1028C30.4585 28.6702 30.4657 25.4267 30.4729 22.1977C30.4874 16.3912 30.5019 11.7215 30.5019 10.592Z" fill="black"/></svg><a href="https://www.tiktok.com/@upwashsuomi"  target="_blank">TikTok</a></li>
                                <li class="menu-item"><svg width="53" height="52" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.9245 0C11.6681 0 0.902344 10.773 0.902344 24.0221C0.902344 37.2785 11.6681 48.0443 24.9245 48.0443C27.1689 48.0443 29.3698 47.7257 31.4766 47.1248V42.9112C29.8404 44.4895 27.987 45.5031 26.0177 45.7782V37.1264H31.4766V34.94H26.0177V25.1154H31.4766V22.9289H26.0177V13.1043H36.2478C37.2252 15.9206 37.8405 19.1352 37.9781 22.5597L39.122 23.6312L40.2008 24.6375L40.7076 25.1154H46.724C46.6371 26.7806 46.3764 28.424 45.9203 30.0096L47.6869 31.6603C48.5122 29.2204 48.9466 26.6502 48.9466 24.0221C48.9466 10.773 38.1736 0 24.9245 0ZM23.8313 2.27334V10.9178H14.4845C14.8972 10.0201 15.3316 9.16577 15.8094 8.38386C17.9886 4.86524 20.805 2.7005 23.8313 2.27334ZM26.0177 2.27334C29.8404 2.80186 33.1997 6.08156 35.379 10.9178H26.0177V2.27334ZM33.1129 3.77201C36.827 5.27068 40.0125 7.76846 42.38 10.9178H37.7175C36.5229 8.05082 34.9518 5.6182 33.1129 3.77201ZM16.6565 3.81545C15.6646 4.80732 14.7524 5.944 13.956 7.23271C13.2609 8.36938 12.6383 9.60017 12.0953 10.9178H7.47621C9.82195 7.79742 12.9786 5.31412 16.6565 3.81545ZM6.02099 13.1043H11.2989C10.336 16.0799 9.77128 19.4103 9.66992 22.9289H3.11053C3.29153 19.3596 4.33408 16.022 6.02099 13.1043ZM13.6084 13.1043H23.8313V22.9289H11.8564C11.9577 19.3596 12.5804 16.0148 13.6084 13.1043ZM38.5211 13.1043H43.8425C45.5221 16.022 46.5574 19.3596 46.7312 22.9289H40.1791C40.0704 19.4031 39.4913 16.0799 38.5211 13.1043ZM3.11053 25.1154H9.66992C9.77128 28.6412 10.336 31.9644 11.2989 34.94H6.02099C4.33408 32.0295 3.29153 28.6919 3.11053 25.1154ZM11.8564 25.1154H23.8313V34.94H13.6084C12.5804 32.0368 11.9577 28.6919 11.8564 25.1154ZM35.7916 25.1154C35.2124 25.1443 34.7491 25.6222 34.7491 26.2086V47.2262C34.7491 47.6678 35.017 48.066 35.4224 48.2325C35.8351 48.4063 36.3057 48.3122 36.617 48.0008L39.9039 44.7067L42.6479 50.6869C42.894 51.2299 43.5456 51.4688 44.0959 51.2226L48.3095 49.2896C48.8597 49.0434 49.0987 48.3918 48.8453 47.8416L46 41.6297H51.1331C51.5747 41.6297 51.9802 41.3618 52.1467 40.9419C52.3132 40.522 52.2046 40.0514 51.8788 39.7401L36.588 25.4122C36.3708 25.2095 36.0885 25.1009 35.7916 25.1154ZM36.9356 28.7281L48.3674 39.4505H44.4434C44.2696 39.4505 44.1031 39.4867 43.9511 39.5663L43.8352 39.6242C43.3139 39.8849 43.0823 40.5147 43.3357 41.0505L46.4054 47.7547L44.1755 48.7828L41.2361 42.3682C41.0913 42.0424 40.7872 41.8179 40.4397 41.7528C40.0849 41.6876 39.7229 41.8035 39.4695 42.0569L36.9356 44.5908V28.7281ZM7.47621 37.1264H12.0953C12.6383 38.4441 13.2609 39.6821 13.956 40.8116C14.7524 42.1003 15.6646 43.237 16.6565 44.2361C12.9786 42.7302 9.82195 40.2541 7.47621 37.1264ZM14.4845 37.1264H23.8313V45.7709C20.805 45.3438 17.9886 43.179 15.8094 39.6677C15.3316 38.8858 14.8972 38.0242 14.4845 37.1264Z" fill="black"/></svg><a href="https://upwash.fi"  target="_blank">Nettisivu</a></li>
                                <li class="menu-item last-item"><a href="https://upwash.fi/tilaa-autopesu/">Ryhdy pesumaestroksi</a></li>
                            </ul>

                          </div>
                        </div>
                <div class="map-menu hidden">
                    <div v-on:click="back();"><img src="/img/backarrow.svg" alt="back"></div>
                    <div><input type="text" style="cursor: not-allowed;"></div>
                    <div>+</div>
                </div>
                <section class="step1" v-bind:class="{ section_active: step >= 1} ">
                    <input type="text" id="adress__location_dup" name="adress" hidden>

                    
                    <div id="unique__google">

                        
                    <div class="google__field_btn">
                        Minulla on useampi auto
                    </div>
                    <input type="text" id="adress__location" placeholder="Minne haluat pesun?"
                                 value="">
                        <div id="infowindow-content"><span id="place-name" class="title"></span><br/><span
                                id="place-address"></span></div>
                    </div>

                    <div class="step2-go-button">
                        <div class="step2-button Bebas" v-on:click="go();" id="step2button">Vahvista osoite
                        </div>
                    </div>

                    <div id="map"></div>
                    
                
                </section>

                <section class="step2" v-bind:class="{ section_active: step >= 2} ">
                    <fieldset class="step3-container">
                        <div class="flex" style="display: flex; width: 100%">
                                <div class="step-column step3-column" v-bind:class='{ active: num == ""} '>
                                    <label>
                                        <input type="radio" name="main_type" value="Ulkopesu" v-model="mainType"
                                               v-on:click="go();"/>
                                        <img src="{{ asset('img/1_.svg') }}" alt="">
                                        <h4>Ulkopesut</h4>
                                        <span>Alk 39???</span>
                                    </label>
                                    
                                </div>
                                <div class="step-column step3-column" v-bind:class='{ active: num == ""} '>
                                    <label>
                                        <input type="radio" name="main_type" value="Sis??pesu" v-model="mainType"
                                               v-on:click="go();"/>
                                        <img src="{{ asset('img/2_.svg') }}" alt="">
                                        <h4>Sis??pesut</h4>
                                        <span>Alk 39???</span>
                                    </label>
                                    
                                </div>
                            </div>
                            <div class="step-column step3-column" v-bind:class='{ active: num == ""} '>
                                <label>
                                    <input type="radio" name="main_type" value="Molemmat" v-model="mainType"
                                           v-on:click="go();"/>
                                    <img src="{{ asset('img/3_.svg') }}" alt="">
                                    <h4>Sis??- + ulkopesut</h4>
                                    <span>Alk 69???</span>
                                </label>
                                
                            </div>
                            <div class="step-column step3-column" v-bind:class='{ active: num == ""} '>
                                <label>
                                    <input type="radio" name="main_type" value="Renkaat" v-model="mainType"
                                           v-on:click="go();"/>
                                    <img src="{{ asset('img/4_.svg') }}" alt="">
                                    <h4>Renkaiden vaihto Kesto: Max 45min</h4>
                                    <span>44???</span>
                                </label>
                                
                            </div>

                        <button v-on:click="go();" class="show_next_3">Valitse vaihtoehto</button>
                    </fieldset>
                </section>

                <section class="step3" v-bind:class="{ section_active: step >= 3} ">
                    <input type="hidden" id="zipCodes" value='{!! $zipCodes->toJson() !!}' name="zipCodes">



                        <input type="hidden" name="price1" v-bind:value="price61" class="price__toggle">
                        <input type="hidden" name="price2" v-bind:value="price62" class="price__toggle">
                        <input type="hidden" name="price3" v-bind:value="price63" class="price__toggle">
                        <input type="hidden" name="price4" v-bind:value="price64" class="price__toggle">
                        <input type="hidden" name="additionalPrice" v-bind:value="additionalPrice">
                        <input type="hidden" name="postal_code" id="postal_code" value="">
                        <input type="hidden" name="zip_price" id="zip_price" value="0" ref="zipPrice">

                    <fieldset class="step3-container">


                        
                          <label class="tooltip step5-action"  v-if="mainType == 'Ulkopesu' || mainType == 'Renkaat'" for="ulk__active1">
                                  <input v-model="pesu" value="ulk__active1" id="ulk__active1" type="radio" name="washtype"  v-on:click="setActive(1, {!! $prices->ulk1 !!}, {!! $prices->ulk1_time !!})" v-if="mainType == 'Ulkopesu'" v-bind:class="{action_active: ulk__active1}" onclick="toggle__visibility(this);">
                                   <h4>Ulkopesu + vaha  (Suht. Puhtaat autot) Kesto: max 1h   
                                      <span class="tooltiptext">
                                        <li>
                                            <b>??</b> Ulkopesu
                                          </li>
                                          <li>
                                            <b>??</b> Kevyt vaha
                                          </li>
                                          <li>
                                            <b>??</b> Oven v??lien pesu
                                          </li>
                                          <li>
                                            <b>??</b> Rengaskiilto
                                          </li>
                                          </span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active');" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>
                                  <span class="action-price"><b>+@{{ ulk1+price5 }}???</b></span>
                          </label>


                          <label class="tooltip step5-action"  v-if="mainType == 'Ulkopesu' || mainType == 'Renkaat'" for="ulk__active2">
                                <input type="radio" id="ulk__active2" v-bind:class="{action_active: ulk__active2}" v-on:click="setActive(2, {!! $prices->ulk2 !!}, {!! $prices->ulk2_time !!})" onclick="toggle__visibility(this);" v-model="pesu" value="ulk__active2" name="washtype">
                               <h4>Ulkopesu Pro Kesto: max 1,15h    
                                  <span class="tooltiptext">
                                      <ul>
                                          <li>
                                            <b>??</b> Ulkopesu
                                          </li>
                                          <li>
                                            <b>??</b> Kevyt vaha 
                                          </li>
                                          <li>
                                            <b>??</b> Oven v??lien pesu
                                          </li>
                                          <li>
                                            <b>??</b> Rengaskiilto
                                          </li> 
                                          <li>
                                            <b>??</b> Hy??nteisten poisto
                                          </li>
                                          <li>
                                            <b>??</b> Kromiosien kiilloitus
                                          </li>
                                        </ul>
                                      </span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active');" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>
                            
                            <span class="action-price">
                              <b>+@{{ ulk2+price5 }}???</b>
                            </span>
                          </label>
                          <label class="tooltip step5-action"  v-if="mainType == 'Ulkopesu' ||  mainType == 'Renkaat'" for="ulk__active3">
                            <input type="radio" v-model="pesu" name="washtype" value="ulk__active3" id="ulk__active3" type="radio" name="washtype" v-if="mainType == 'Ulkopesu'" v-bind:class="{action_active: ulk__active3}" v-on:click="setActive(3, {!! $prices->ulk3 !!}, {!! $prices->ulk3_time !!})" onclick="toggle__visibility(this);">
                              <h4>Ulkopesu + kerramien pinnoite  
                                      <span class="tooltiptext">
                                          <ul>
                                              <li>
                                                <b>??</b> Ulkopesu
                                              </li>
                                              <li>
                                                <b>??</b> Kevyt vaha
                                              </li>
                                              <li>
                                                <b>??</b> Oven v??lien pesu
                                              </li>
                                              <li>
                                                <b>??</b> Rengaskiilto
                                              </li>
                                              <li>
                                                <b>??</b> Hy??nteisten poisto 
                                              </li>
                                              <li>
                                                <b>??</b> Kromiosien kiilloitus 
                                              </li>
                                              <li>
                                                <b>??</b> Keraaminen pinnoite (kesto: 6kk) 
                                              </li>
                                            </ul>
                                        </span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active');" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>
                            
                            <span class="action-price">
                              <b>+@{{ ulk3+price5 }}???</b>
                            </span>
                          </label>
                          <label class="tooltip step5-action" v-if="mainType == 'Sis??pesu' ||  mainType == 'Renkaat'" for="sisapesu__1">
                            <input type="radio" v-model="pesu" name="washtype" value="sisapesu__1" id="sisapesu__1" type="radio" name="washtype" v-bind:class="{action_active: sisapesu__1}" v-on:click="setActive(3, {!! $prices->sis1 !!}, {!! $prices->sis1_time !!})" onclick="toggle__visibility(this);">
                              <h4>Perus sis??pesu  (suht. Puhtaat autot) Kesto: max 1h  
 
                                      <span class="tooltiptext">
                                          <ul>
                                              <li>
                                                <b>??</b> Imurointi
                                              </li>
                                              <li>
                                                <b>??</b> Mattojen pesu
                                              </li>
                                              <li>
                                                <b>??</b> Yleisten pintojen pesu 
                                              </li>
                                              <li>
                                                <b>??</b> Ikkunoiden pesu
                                              </li>
                                              <li>
                                                <b>??</b> Roskien poisto
                                              </li>
                                          </ul>
                                    </span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active');" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>
                            <span class="action-price">
                              <b>+@{{ sis1+price5 }}???</b>
                            </span>
                          </label>
                          <label class="tooltip step5-action" v-if="mainType == 'Sis??pesu' || mainType == 'Renkaat'" for="sisapesu__2">
                             <input type="radio" v-model="pesu" name="washtype" value="sisapesu__2" id="sisapesu__2" type="radio" name="washtype" v-if="mainType == 'Sis??pesu'" v-bind:class="{action_active: sisapesu__2}" v-on:click="setActive(2, {!! $prices->sis2 !!}, {!! $prices->sis2_time !!})"  onclick="toggle__visibility(this);">
                              <h4>Sis??pesu premium Kesto: max 2,5h 
                                      <span class="tooltiptext">
                                          <ul>
                                              <li>
                                                <b>??</b> Imurointi
                                              </li>
                                              <li>
                                                <b>??</b> Mattojen pesu
                                              </li>
                                              <li>
                                                <b>??</b> Penkkien pesu (5 penkki??)
                                              </li>
                                              <li>
                                                <b>??</b> Pintojen pesu (ei pienimpi?? rakoja) 
                                              </li>
                                              <li>
                                                <b>??</b> Ikkunoiden pesu
                                              </li>
                                              <li>
                                                <b>??</b> Roskien poisto
                                              </li>
                                              <li>
                                                <b>??</b>  Ilmaraikastin (valinnainen) 
                                              </li>
                                            </ul>
                                      </span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active');" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>
                            <span class="action-price">
                              <b>+@{{ sis2+price5 }}???</b>
                            </span>
                          </label>
                          <label class="tooltip step5-action" v-if="mainType == 'Sis??pesu' || mainType == 'Renkaat'" for="sisapesu__3" >
                                 <input type="radio" v-model="pesu" name="washtype" value="sisapesu__3" id="sisapesu__3" type="radio" name="washtype" v-if="mainType == 'Sis??pesu'" v-bind:class="{action_active: sisapesu__3}" v-on:click="setActive(3, {!! $prices->sis3 !!}, {!! $prices->sis3_time !!})"  onclick="toggle__visibility(this); add_lux();">
                                 <script>
                                     function add_lux() {
                                        const place = document.querySelector('.loaded');
                                        var elem = document.createElement("style");
                                        var elem_text = "#add-client > div > div > section.step6.section_active > div > div.step6-time > div > div > div:nth-child(6) {display: none !important;}";

                                        elem.innerHTML = elem_text;
                                        place.prepend(elem);
                                    }
                                 </script>
                              <h4>Luksus sis??pesu Kesto: max 4h 
                                      <span class="tooltiptext">
                                           <ul>
                                              <li>
                                                <b>??</b> Imurointi 
                                              </li>
                                              <li>
                                                <b>??</b> Mattojen pesu
                                              </li>
                                              <li>
                                                <b>??</b> Penkkien pesu (5 penkki??) 
                                              </li>
                                              <li>
                                                <b>??</b> Pintojen pesu 
                                              </li>
                                              <li>
                                                <b>??</b> Kaikkien rakojen ja kolojen pesu 
                                              </li>
                                              <li>
                                                <b>??</b> Ikkunoiden pesu 
                                              </li>
                                              <li>
                                                <b>??</b> Hoito/suoja-aineet muoville 
                                              </li>
                                              <li>
                                                <b>??</b> Nahkapenkkien k??sittely 
                                              </li>
                                              <li>
                                                <b>??</b> Kangas penkkien suoja-aine 
                                              </li>
                                              <li>
                                                <b>??</b> Roskien poisto 
                                              </li>
                                              <li>
                                                <b>??</b> Ilmaraikastin (valinnainen)  
                                              </li>
                                              <li>
                                                <b>??</b> Karvojen poisto 
                                              </li>
                                              <li>
                                                <b>??</b> Takakontin pesu 
                                              </li>
                                            </ul>
                                        </span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active');" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>                        
                            <span class="action-price">
                              <b>+@{{ sis3+price5 }}???</b>
                            </span>
                          </label>
                        </label>


                        <label class="tooltip step5-action" v-if="mainType == 'Molemmat' ||  mainType == 'Renkaat'" for="molemmat__1">
                            <input type="radio" v-model="pesu" name="washtype" value="molemmat__1" id="molemmat__1" v-bind:class="{action_active: molemmat__1}" v-on:click="setActive(1, {!! $prices->mol1 !!}, {!! $prices->mol1_time !!})" onclick="toggle__visibility(this);">
                              <h4>Perus Sis??pesu + Ulkopesu Kesto: max 1,5h
                                      <span class="tooltiptext">
                                          <li>
                                            <b>??</b> Ulkopesu 
                                          </li>
                                          <li>
                                            <b>??</b> Kevyt vaha  
                                          </li>
                                          <li>
                                            <b>??</b> Oven v??lien pesu 
                                          </li>
                                          <li>
                                            <b>??</b> Rengaskiilto  
                                          </li>
                                          <li>
                                            <b>??</b> Imurointi  
                                          </li>
                                          <li>
                                            <b>??</b> Mattojen pesu
                                          </li>
                                          <li>
                                            <b>??</b> Yleisten pintojen pesu 
                                          </li>
                                          <li>
                                            <b>??</b> Ikkunoiden pesu  
                                          </li>
                                          <li>
                                            <b>??</b> Roskien poisto 
                                          </li>
                                          
                                      </span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active');" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>

                            <span class="action-price">
                              <b>+@{{ mol1+price5 }}???</b>
                            </span>
                        </label>
                        <label class="tooltip step5-action" v-if="mainType == 'Molemmat' ||  mainType == 'Renkaat'" for="molemmat__2">
                            <input type="radio" v-model="pesu" name="washtype" value="molemmat__2" id="molemmat__2" v-bind:class="{action_active: molemmat__2}" v-on:click="setActive(2, {!! $prices->mol2 !!}, {!! $prices->mol2_time !!})"  onclick="toggle__visibility(this);">
                            <h4>Premium + ulko Kesto: max 3h  
                                      <span class="tooltiptext">
                                          <ul>
                                              <li>
                                                <b>??</b> Ulkopesu
                                              </li>
                                              <li>
                                                <b>??</b> Mattojen pesu  
                                              </li>
                                              <li>
                                                <b>??</b> Penkkien pesu (5 penkki??)  
                                              </li>
                                              <li>
                                                <b>??</b> Pintojen pesu (ei pienimpi?? rakoja)  
                                              </li>
                                              <li>
                                                <b>??</b> Ikkunoiden pesu  
                                              </li>
                                              <li>
                                                <b>??</b> Roskien poisto 
 
                                              </li>
                                              <li>
                                                <b>??</b> Ilmaraikastin (valinnainen)  
                                              </li>
                                              <li>
                                                <b>??</b> Kevyt vaha 
 
                                              </li>
                                              <li>
                                                <b>??</b> Oven v??lien pesu  
                                              </li>
                                              <li>
                                                <b>??</b> Rengaskiilto  
                                              </li>
                                            </ul>
                                        </span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active');" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>

                            <span class="action-price">
                              <b>+@{{ mol2+price5 }}???</b>
                            </span>
                        </label>
                        <label class="tooltip step5-action" v-if="mainType == 'Molemmat'" for="molemmat__3">
                            <input type="radio" name="washtype" v-model="pesu" value="molemmat__3"  id="molemmat__3" v-bind:class="{action_active: molemmat__3}" v-on:click="setActive(3, {!! $prices->mol3 !!}, {!! $prices->mol3_time !!})" onclick="toggle__visibility(this);">
                              <h4>All In Luksus Kesto: max 5h  
                                      <span class="tooltiptext">
                                          <ul>
                                              <li>
                                                <b>??</b> Imurointi 
                                              </li>
                                              <li>
                                                <b>??</b> Mattojen pesu 
                                              </li>
                                              <li>
                                                <b>??</b> Penkkien pesu (5 penkki??) 
                                              </li>
                                              <li>
                                                <b>??</b> Pintojen pesu
                                              </li>
                                              <li>
                                                <b>??</b> Kaikkien rakojen ja kolojen pesu 
                                              </li>
                                              <li>
                                                <b>??</b>  Ikkunoiden pesu 

                                              </li>
                                              <li>
                                                <b>??</b> Hoito/suoja-aineet muoville
                                              </li>
                                              <li>
                                                <b>??</b> Nahkapenkkien k??sittely 
                                              </li>
                                              <li>
                                                <b>??</b> Kangas penkkien suoja-aine 
                                              </li>
                                              <li>
                                                <b>??</b> Roskien poisto
                                              </li>
                                              <li>
                                                <b>??</b> Ilmaraikastin (valinnainen)
                                              </li>
                                              <li>
                                                <b>??</b> Karvojen poisto 
                                              </li>
                                              <li>
                                                <b>??</b> Takakontin pesu 

                                              </li>
                                              <li>
                                                <b>??</b> Ulkopesu 
                                              </li>
                                              <li>
                                                <b>??</b> Kevyt vaha
                                              </li>
                                              <li>
                                                <b>??</b> Oven v??lien pesu
                                              </li>
                                              <li>
                                                <b>??</b> Rengaskiilto  
                                              </li>
                                              <li>
                                                <b>??</b> Hy??nteisten poisto 
 
                                              </li>
                                              <li>
                                                <b>??</b> Kromiosien kiilloitus 
                                              </li>
                                              <li>
                                                <b>??</b> Keraaminen pinnoite (kesto: 6kk) 
                                              </li>
                                            </ul></span>
                                      <svg onclick="this.parentElement.parentElement.classList.toggle('tooltip_active')" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_63_774)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 0C26.3826 0 34 7.61742 34 17C34 26.3826 26.3826 34 17 34C7.61742 34 0 26.3826 0 17C0 7.61742 7.61742 0 17 0ZM17 1.41667C25.6006 1.41667 32.5833 8.39942 32.5833 17C32.5833 25.6006 25.6006 32.5833 17 32.5833C8.39942 32.5833 1.41667 25.6006 1.41667 17C1.41667 8.39942 8.39942 1.41667 17 1.41667ZM17.7083 25.5H16.2917V12.75H17.7083V25.5ZM17 8.5C17.6602 8.5 18.1971 9.0355 18.1971 9.69708C18.1971 10.3572 17.6602 10.8927 17 10.8927C16.3398 10.8927 15.8029 10.3572 15.8029 9.69708C15.8029 9.0355 16.3398 8.5 17 8.5Z" fill="black"/></g><defs><clipPath id="clip0_63_774"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></h4>

                            <span class="action-price">
                              <b>+@{{ mol3+price5 }}???</b>
                            </span>
                        </label>
                                    

                            
                         <div class="step5-buttons">
                            <div class="show_next_4" style="margin-bottom: 40px;display: none;" v-on:click="go()"
                                 v-if="">
                                Valitse vaihtoehto <span class="price-button">@{{ price }} ???</span></div>
                        </div>
                    </fieldset>
                </section>

                <section class="step4" v-bind:class="{ section_active: step >= 4} ">
                    <div class="step4-container">
                        <div class="step4-action" onclick="this.classList.toggle('action_active');document.querySelector('#rb1').click();"  v-bind:class='{ active: num == ""} ' v-if="pesu == 'ulk__active1' || pesu == 'sisapesu__1' || pesu == 'ulk__active2'">
                            <span>Karvojen poisto {{ $prices->step5_1 }}???</span>
                            <input
                                type="checkbox" class="custom-checkbox" id="rb1" name=""
                                v-on:click="checkBoxMethod(1,{{ $prices->step5_1 }})" v-model="checked1"><label
                                for="rb1"></label>
                        </div>
                        <div class="step4-action" onclick="this.classList.toggle('action_active');document.querySelector('#rb2').click();" 
                             v-if="pesu == 'sisapesu__2' || pesu == 'sisapesu__1' || pesu == 'molemmat__2' || pesu == 'molemmat__1'">
                            <span>Takakontin pesu {{ $prices->step5_2 }}???</span><input
                                type="checkbox" class="custom-checkbox" id="rb2" name=""
                                v-on:click="checkBoxMethod(2,{{ $prices->step5_2 }})" v-model="checked2"><label
                                for="rb2"></label>
                        </div>

                        <div class="step4-action" onclick="this.classList.toggle('action_active'); document.querySelector('#rb3').click();" v-if="pesu == 'ulk__active1' || pesu == 'ulk__active2' || pesu == 'ulk__active3' || pesu == 'sisapesu__1' || pesu == 'sisapesu__2' || pesu == 'sisapesu__3'">
                            <span>
                                Renkaiden vaihto {{ $prices->step5_3 }}???</span>
                            <input type="checkbox" class="custom-checkbox" id="rb3" name=""
                                v-on:click="checkBoxMethod(3,{{ $prices->step5_3 }})" v-model="checked3"><label
                                for="rb3"></label>
                        </div>

                        <div class="step4-action" onclick="this.classList.toggle('action_active'); document.querySelector('#rb4').click();" v-if="pesu == 'sisapesu__1' || pesu == 'molemmat__1'">
                          <span>Ilmanraikastin {{ $prices->step5_4 }}???</span>
                          <input type="checkbox" class="custom-checkbox" id="rb4" name="" v-on:click="checkBoxMethod(4,{{ $prices->step5_4 }})" v-model="checked4">
                          <label for="rb4"></label>
                        </div>
                        <!-- <div class="step4-action" onclick="this.classList.toggle('action_active'); document.querySelector('#rb5').click();" v-if="pesu == 'ulk__active0'">
                          <span>Penkin pesu {{ $prices->step5_5 }}???/penkki</span>
                          <input type="checkbox" class="custom-checkbox" id="rb5" name="" v-on:click="checkBoxMethod(3,{{ $prices->step5_5 }})" v-model="checked5">
                          <label for="rb5"></label>
                        </div> -->
                        <div class="step4-action" onclick="this.classList.toggle('action_active'); document.querySelector('#rb6').click();" v-if="pesu == 'sisapesu__2' || pesu == 'sisapesu__3' || pesu == 'molemmat__2' || pesu == 'molemmat__3'">
                          <span>Ilmastoinnin puhdistaminen h??yryll?? {{ $prices->step5_6 }}???</span>
                          <input type="checkbox" class="custom-checkbox" id="rb6" name="" v-on:click="checkBoxMethod(4,{{ $prices->step5_6 }})" v-model="checked6">
                          <label for="rb6"></label>
                        </div>

                        <div class="step4-action" onclick="this.classList.toggle('action_active'); document.querySelector('#rb7').click();" v-if="pesu == 'ulk__active1' || pesu == 'molemmat__1' || pesu == 'molemmat__2'">
                          <span>Hy??nteisten poisto {{ $prices->step5_7 }}???</span>
                          <input type="checkbox" class="custom-checkbox" id="rb7" name="" v-on:click="checkBoxMethod(4,{{ $prices->step5_7 }})" v-model="checked7">
                          <label for="rb7"></label>
                        </div>

                        <div class="step4-action" onclick="this.classList.toggle('action_active'); document.querySelector('#rb8').click();" v-if="mainType == 'Renkaat'">
                          <span>Renkaiden kanto (esim. Varastosta) {{ $prices->step5_8 }}???</span>
                          <input type="checkbox" class="custom-checkbox" id="rb8" name="" v-on:click="checkBoxMethod(5,{{ $prices->step5_8 }})" v-model="checked8">
                          <label for="rb8"></label>
                        </div>

                        <div class="step4-action" onclick="this.classList.toggle('action_active'); document.querySelector('#rb9').click();"  v-if="mainType == 'Renkaat'">
                          <span>Renkaiden/Vanteiden pesu {{ $prices->step5_9 }}???</span>
                          <input type="checkbox" class="custom-checkbox" id="rb9" name="" v-on:click="checkBoxMethod(6,{{ $prices->step5_9 }})" v-model="checked9">
                          <label for="rb9"></label>
                        </div>


                        <div class="start" style="margin-bottom: 40px;" v-on:click="go()"
                                 v-if="checked1 || checked2 || checked3 || active1 || active2 || active3 || active4 || ulk__active2 || ulk__active3">
                                Valitse vaihtoehto <span class="price-button">@{{ price }} ???</span></div>
                                <div class="start" style="margin-bottom: 40px;background:#707070;" v-on:click="go()"
                                 v-if="">Ohita</div>
                    </div>
                </section>

                <section class="step5" v-bind:class="{ section_active: step >= 5} ">

                    <div class="step5-container">
                        <div class="step-one-number">
                            <div class="step-one-number-container">
                                <img src="{{ asset('img/euflag.png') }}" alt="">
                                <input type="text" class="to__cart_num" id="reg" onchange="open5();" oninput="open5();" placeholder="123 NRO">
                            </div>
                            <div>
                                <select name="car__type" id="cars">
                                  <option style="" name="car__type" value="Sedan" class="cars__item">Sedan</option>
                                  <option style="" name="car__type" value="Farmari" class="cars__item">Farmari</option>
                                  <option style="" name="car__type" value="Maastoauto" class="cars__item">Maastoauto</option>
                                  <option style="" name="car__type" value="Pakettiauto matala" class="cars__item">Pakettiauto matala</option>
                                  <option style="" name="car__type" value="Pakettiauto korkea" class="cars__item">Pakettiauto korkea</option>
                                </select>
                            </div>
                            <div v-on:click="go();" class="start" id="step5_go" style="display: none;"/>Vahvista</div>     
                        </div>
                        <input type="hidden" id="zipCodes" value='{!! $zipCodes->toJson() !!}' name="zipCodes">
                        <input type="hidden" name="checked1" v-bind:value="checked1">
                        <input type="hidden" name="checked2" v-bind:value="checked2">
                        <input type="hidden" name="checked3" v-bind:value="checked3">
                        <input type="hidden" name="checked4" v-bind:value="checked4">
                        <input type="hidden" name="checked5" v-bind:value="checked5">
                        <input type="hidden" name="checked6" v-bind:value="checked6">
                        <input type="hidden" name="checked7" v-bind:value="checked7">
                        <input type="hidden" name="checked8" v-bind:value="checked8">
                        <input type="hidden" name="checked9" v-bind:value="checked9">

                        <input type="hidden" name="active1" v-bind:value="active1">
                        <input type="hidden" name="active2" v-bind:value="active2">
                        <input type="hidden" name="active3" v-bind:value="active3">
                        <input type="hidden" name="active4" v-bind:value="active4">

                      <!--   <input type="hidden" name="sisapesu__1" v-bind:value="sisapesu__1">
                        <input type="hidden" name="sisapesu__2" v-bind:value="sisapesu__2">
                        <input type="hidden" name="sisapesu__3" v-bind:value="sisapesu__3">
 -->
                        <input type="hidden" name="ulk__active1" v-bind:value="ulk__active1">
                        <input type="hidden" name="ulk__active2" v-bind:value="ulk__active2">
                        <input type="hidden" name="ulk__active3" v-bind:value="ulk__active3">

                       <!--  <input type="hidden" name="molemmat__1" v-bind:value="molemmat__1">
                        <input type="hidden" name="molemmat__2" v-bind:value="molemmat__2">
                        <input type="hidden" name="molemmat__3" v-bind:value="molemmat__3"> 

 -->
                        <input type="hidden" name="priceCheck1" value="10">
                        <input type="hidden" name="priceCheck2" value="20">
                        <input type="hidden" name="priceCheck3" value="39">




                        <!-- // Renkaiden pesu -->

                        <input type="hidden" name="price1" v-bind:value="price61" class="price__toggle">
                        <input type="hidden" name="price2" v-bind:value="price62" class="price__toggle">
                        <input type="hidden" name="price3" v-bind:value="price63" class="price__toggle">
                        <input type="hidden" name="price4" v-bind:value="price64" class="price__toggle">
                        <input type="hidden" name="additionalPrice" v-bind:value="additionalPrice">
                        <input type="hidden" name="postal_code" id="postal_code" value="">
                        <input type="hidden" name="zip_price" id="zip_price" value="0" ref="zipPrice">

                        
                    </div>
                </section>

                <section class="step6" v-bind:class="{ section_active: step >= 6} ">
                    <div class="step6-container">
                        <div class="step6-date" style="padding-top: 100px">
                            <div class="step6-date-container">
                                <span class="date-back" v-on:click="dayBack()"><img
                                        src="https://www.svgrepo.com/show/365208/caret-right-thin.svg" alt=""></span>
                                <span class="date-text">@{{ day }}. @{{ months[month-1] }}</span>
                                <span class="date-forward" v-on:click="dayForward()"><img
                                        src="https://www.svgrepo.com/show/365208/caret-right-thin.svg" alt=""></span>
                            </div>
                        </div>

                        <div class="step6-time">
                            <div class="step6-time-container">
                                <div class="step6-times">
                                    <input type="hidden" name="day" v-bind:value="day">
                                    <input type="hidden" name="month" v-bind:value="month">
                                    <input type="hidden" name="time" v-bind:value="time">

                                    <div v-for="(value, index) in continuity" >
                                        <div
                                             v-bind:class="{ time_none: checkFlag(value), time_active: isTime == index+1 }"
                                             v-on:click="checkFlag(value) ? selectTime(index, value, 1) : selectTime(index+1, value, 0)"
                                             class="step6-time-block">
                                        <span class="time-container" v-if="isTime == index+1">
                                            <b>@{{ value }} (MAX)</b><br>
                                            <b>Kesto: @{{ getHours() }} tuntia</b><br>
                                            <ul>
                                                <li v-if="active1">Ulkopesu</li>
                                                <li v-if="active2">Ovenv??lienpesu</li>
                                                <li v-if="active3">Rengaskiilto</li>
                                                <li v-if="active4">Kevytvaha</li>
                                            </ul>
                                        </span>
                                            <span class="text">@{{ value }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<div class="step5-buttons">
                            <div class="step5-button" v-on:click="go()" v-if="isTime != 0" id="step6_go" onclick="open5();selection();">Jatka eteenp??in</div>
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
                                     <div class="step7-info-block-text"><span v-if="day <= 9">0</span>@{{ day }}-<span
                                            v-if="month+1 <= 9">0</span>@{{ month+1 }}-{!! date('Y'); !!}</div>
                                    <!-- <fieldset>
                                        <select name="" id="">
                                            <option class="day" v-bind:value="day" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 1" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 2" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 3" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 4" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 5" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 6" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 7" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 8" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 9" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 10" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 11" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 12" type="radio" name="day__date"></option>
                                            <option class="day" v-bind:value="day + 13" type="radio" name="day__date"></option>
                                        </select>
                                    </fieldset> -->
                                </div>
                                <div class="step7-info-block">
                                    <div class="step7-info-block-text">@{{ time }}</div>
                                    <!-- <fieldset>
                                        <select>
                                        <option>7:00-7:15</option>
                                        <option>7:15-7:30</option>
                                        <option>7:30-7:45</option>
                                        <option>7:45-8:00</option>
                                        <option>8:00-8:15</option>
                                        <option>8:15-8:30</option>
                                        <option>8:30-8:45</option>
                                        <option>8:45-9:00</option>
                                        <option>9:00-9:15</option>
                                        <option>9:15-9:30</option>
                                        <option>9:30-9:45</option>
                                        <option>9:45-10:00</option>
                                        <option>10:00-10:15</option>
                                        <option>10:15-10:30</option>
                                        <option>10:30-10:45</option>
                                        <option>10:45-11:00</option>
                                        <option>11:00-11:15</option>
                                        <option>11:15-11:30</option>
                                        <option>11:30-11:45</option>
                                        <option>11:45-12:00</option>
                                        <option>12:00-12:15</option>
                                        <option>12:15-12:30</option>
                                        <option>12:30-12:45</option>
                                        <option>12:45-13:00</option>
                                        <option>13:00-13:15</option>
                                        <option>13:15-13:30</option>
                                        <option>13:30-13:45</option>
                                        <option>13:45-14:00</option>
                                        <option>14:00-14:15</option>
                                        <option>14:15-14:30</option>
                                        <option>14:30-14:45</option>
                                        <option>14:45-15:00</option>
                                        <option>15:00-15:15</option>
                                        <option>15:15-15:30</option>
                                        <option>15:30-15:45</option>
                                        <option>15:45-16:00</option>
                                        <option>16:00-16:15</option>
                                        <option>16:15-16:30</option>
                                        <option>16:30-16:45</option>
                                        <option>16:45-17:00</option>
                                        <option>17:00-17:15</option>
                                        <option>17:15-17:30</option>
                                        <option>17:30-17:45</option>
                                        <option>17:45-18:00</option>
                                        <option>18:00-18:15</option>
                                        <option>18:15-18:30</option>
                                        <option>18:30-18:45</option>
                                        <option>18:45-19:00</option>
                                        <option>19:00-19:15</option>
                                        <option>19:15-19:30</option>
                                        <option>19:30-19:45</option>
                                        <option>19:45-20:00</option>
                                    </select>
                                    </fieldset> -->
                                </div>
                                <div class="step7-info-block">
                                    <div class="step-one-number-container">
                                        <img src="/img/euflag.png" alt="EU"> <input type="text" id="reg_dup" name="registrar" placeholder="NRO 123" v-model="num">
                                    </div>
                                   
                                </div>
                                <div class="step7-info-block">
                                    <div class="step7-info-block-title">
                                        <select name="car__type" id="cars2"><option value="Sedan" class="cars__item">Sedan</option> <option value="Farmari" class="cars__item">Farmari</option> <option value="Maastoauto" class="cars__item">Maastoauto</option> <option value="Pakettiauto matala" class="cars__item">Pakettiauto matala</option> <option value="Pakettiauto korkea" class="cars__item">Pakettiauto korkea</option></select>
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="step7-info-block special_info_blocc">
                                <!-- <span>@{{ adress }}</span> -->
                                <fieldset>
                                    <label for="step7-adress"><img src="/img/pin.svg" alt="EU"></label>
                                    <input class="step7-info-block-text adress__block"  placeholder="Minne haluat pesun?"
                               v-bind:value="adress "
                               id="step7-adress" v-model="adress">
                                </fieldset>
                                
                            </div>
                        </div>

                        <div class="step7-row step7-comment">
                            <div class="step7-button" v-on:click="showInput(3)"><span>kommentti tilaukseen...</span>
                            </div>
                        </div>

                        <div class="step7-row">
                            <div class="step7-input" style="" v-bind:class="{step7_active_input: isComment}">
                                <textarea name="comment" id="" placeholder="Sy??t?? kommentti???"></textarea>
                            </div>
                        </div>
                        
                        <div class="step7-row">
                            <div class="step7-button" v-on:click="showInput(2)"><span>MINULLA ON KUPONKI</span></div>
                        </div>

                        <div class="step7-row">
                            <div class="step7-input" v-bind:class="{step7_active_input: isCupon}">
                                <input type="text" name="cupon" v-model="cupon" :placeholder="placeholder">
                                <div v-on:click="findPercent()"
                                     style="width: 100%; padding: 15px; box-sizing: border-box; background: #FF9A5A; text-align: center; color: #FFF; font-weight: 700; font-size: 22px; text-transform:uppercase; cursor:pointer;">
                                    aktivoi kuponki
                                </div>
                            </div>
                        </div>
                        

                        @if(!Session::has('auth'))

                            <div class="step7-input" style="height: auto">
                                <input type="text" name="name" placeholder="Nimi">
                                <input type="text" name="secondname" placeholder="Sukunimi">
                                <input type="text" name="email" placeholder="S??hk??posti">
                                <input type="text" name="phone" placeholder="Puhelinnumero">
                            </div>
                        @endif
                        
    
                        <div class="step7-row" style="padding:26px; box-sizing: border-box">
                            <h1 style="text-align: left; font-weight: 700"> </h1>
                            <ul class="final-ul">

                                <li v-if="pesu == 'ulk__active1'">Ulkopesu + vaha  (Suht. Puhtaat autot) Kesto: max 1h  <!-- <span>@{{ ulk1+price5 }}???</span> --></li>
                                <li v-if="pesu == 'ulk__active2'">Ulkopesu Pro Kesto: max 1,15h   <!-- <span>@{{ ulk2+price5 }}???</span> --></li>
                                <li v-if="pesu == 'ulk__active3'">Ulkopesu Pro Kesto: max 1,15h  <!-- <span>@{{ ulk3+price5 }}???</span> --></li>

                                <li v-if="pesu == 'sisapesu__1'">Perus sis??pesu  (suht. Puhtaat autot) Kesto: max 1h  <!-- <span>@{{ sis1+price5 }}???</span> --></li>
                                <li v-if="pesu == 'sisapesu__2'">Sis??pesu premium Kesto: max 2,5h  <!-- <span>@{{ sis2+price5 }}???</li> -->
                                <li v-if="pesu == 'sisapesu__3'">Luksus sis??pesu Kesto: max 4h  <!-- <span>@{{ sis3+price5 }}???</span> --></li>

                                <li v-if="pesu == 'molemmat__1'">Perus Sis??pesu + Ulkopesu Kesto: max 1,5h <!-- <span>@{{ mol1+price5 }}???</span> --></li>
                                <li v-if="pesu == 'molemmat__2'">Premium + ulko Kesto: max 3h   <!-- <span>@{{ mol2+price5 }}???</span> --></li>
                                <li v-if="pesu == 'molemmat__3'">All In Luksus Kesto: max 5h <!-- <span>@{{ mol3+price5 }}???</span> --></li>

                                <li v-if="checked1">Karvojen poisto  <!-- <span>{!! $prices->step5_1 !!} ???</span> --></li>
                                <li v-if="checked2">Takakontin pesu <!-- <span>{!! $prices->step5_2 !!} ???</span> --></li>
                                <li v-if="checked3">Renkaiden vaihto <!-- <span>{!! $prices->step5_3 !!} ???</span> --></li>
                                <li v-if="checked4">Ilmanraikastin  <!-- <span>{!! $prices->step5_4 !!} ???</span> --></li>
                                <li v-if="checked5">Penkin pesu <!-- <span>{!! $prices->step5_5 !!} ???</span> --></li>
                                <li v-if="checked6">Ilmastoinnin puhdistaminen h??yryll?? <!-- <span>{!! $prices->step5_6 !!} ???</span> --> </li>
                                <li v-if="checked7">Hy??nteisten poisto <!-- <span>{!! $prices->step5_7 !!} ???</span> --></li>
                                <li v-if="checked8">Renkaiden kanto (esim. Varastosta) <!-- <span>{!! $prices->step5_8 !!} ???</span> --></li>
                                <li v-if="checked9">Renkaiden/Vanteiden pesu  <!-- <span>{!! $prices->step5_9 !!} ???</span> --></li>
                               
                                <li v-if="additionalPrice > 0">Pesij??n matkakulut <span>1,5 ???</span></li>

                            
                            </ul>
                            <div class="step7-pesu">
                                <div class="step7-pesu-right"><b id="stripe__price_unique">@{{ price }}???</b></div>
                            </div>
                        </div>
                        <div class="step7-line"></div>
                        <div class="step7-row" style="padding:26px; box-sizing: border-box">
                            <div class="step7-pesu">
                                <div class="step7-pesu-left" style="color:#9D9FB4">YHTEENS??</div>
                                <div class="step7-pesu-right"><b
                                        style="font-size: 24px; position: relative; bottom: 6px">@{{ price }}???</b>
                                </div>
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
                                <p style="display: flex;margin-top: 10px;align-items: center;justify-content: space-between;">Maksuyhteyden tarjoaa <a href="https://stripe.com/" target="_blank" style="display: flex;"><svg viewBox="0 0 60 25" xmlns="http://www.w3.org/2000/svg" width="60" height="25" class="UserLogo variant-- "><title>Stripe logo</title><path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg></a></p>
                            </div>
                        </div>

                        <div class="step7-row">
                            <div class="step7-input" style="height: auto">
                                <input type="submit" value="TILAA PESU">
                            </div>
                        </div>

    </form>
</div>
</section>
</div>

<!-- <div class="button-create-order" v-if="step < 2">
    <div class="button" v-on:click="click()" v-bind:class="{ rotate: step == 1} "><span>+</span></div>
</div> -->


<div class="modal-container" v-if="modal">
    <div class="back" v-on:click="setModal()" style="position: relative; top: 20px; left: 20px;">
        <img src="{{ asset('img/back.svg') }}" alt="" style=" width: 50px; height: 50px;">
    </div>
    <form action="{{ route('sendMail') }}" method="POST">
        @csrf
        <div class="modal step7-input" style="height: auto;">
            <fieldset>
                <h4>Haluatko autopesu sopimuksen?
                    J??t?? tiedot niin olemme teihin
                    pikimmiten yhteydess??!
                    Sopimusasiakkaana saat pesut
                    v??hint????n -10% hintaan.
                    Ty??ntekij??si tilaavat pesut my??s
                    alennettuun hintaan.
                </h4>

                <input type="text" name="interval" placeholder="Haluttu pesuv??li: (esim. kerran kuukaudessa)"
                      >
                <input type="text" name="where" placeholder="Sis??pesut, ulkopesut vaiko molemmat?">
                <input type="text" name="amount"
                       placeholder="Kuinka monta ajoneuvoa yrityksell?? on ja mink??laisia? (esim. pakettiautoja, kuorma-autoja)"
                      >
            </fieldset>
            <fieldset>
                <h4>Yrityksen tiedot</h4>

                <input type="text" name="name" placeholder="Nimi">
                <input type="text" name="ytun" placeholder="Y-tunnus">
                <input type="text" name="adress" placeholder="Osoite">
                <input type="text" name="index" placeholder="Postinumero">
                <input type="text" name="indexStreet" placeholder="Postitoimipaikka">
            </fieldset>
            <fieldset>
                <h4>Yhteyshenkil??</h4>
                <input type="text" name="nameAndSecondname" placeholder="Etu- ja sukunimi">
                <input type="text" name="email" placeholder="S??hk??postiosoite">
                <input type="text" name="phone" placeholder="Puhelinnumero">
            </fieldset>
            <input type="submit" value="L??het?? tiedot" style="cursor: pointer;">
        </div>
    </form>
</div>

<!-- <footer>
    <div class="footer-container">
        @if(Session::has('auth'))
            <a href="{{ route('last') }}" v-if="step == 0" style="z-index: 9999999" class="footer-left"><img
                    src="{{ asset('img/time.png') }}" alt=""></a>
        @endif
        <a href="{{ route('profile') }}" v-if="step == 0" class="footer-right"><img src="{{ asset('img/profile.png') }}"
                                                                                    alt=""></a>
    </div>
</footer> -->
</div>


</div>
<style>
    .custom-map-control-button {
        padding: 10px;
        background: #FFF;
        color: #333;
        display: block;
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

<style id="hide_cal"></style>
</body>

@php $day_z = date("d", strtotime("+1 day")); $month_z = date("m", strtotime("+1 day"))-1; @endphp

@if(isset($data))
    @php $num = $data->num; @endphp
@endif

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
            month: {!! $month_z+1 !!},
            day: {!! $day_z !!},
            months: ['Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kes??kuu', 'Hein??kuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu'],
            isTime: 0,
            isDay: 0,
            mainType: "none",
            pesu: "none",
            renkvaihto: "none",
            

            checked1: false,
            checked2: false,
            checked3: false,
            checked4: false,

            checked5: false,
            checked6: false,
            checked7: false,
            checked8: false,
            checked9: false,


            active1: false,
            active2: false,
            active3: false,
            active4: false,
            active5: false,
            active6: false,
            sisapesu__1: false,
            sisapesu__2: false,
            sisapesu__3: false,
            molemmat__1: false,
            molemmat__2: false,
            molemmat__3: false,
            ulk__active3: false,
            ulk__active1: false,
            ulk__active2: false,
            ulko1: false,
            active54: false,
            price1: 0,
            price3: 0,
            price41: 0,
            price42: 0,
            price43: 0,
            price44: 0,
            price5: 0,
            price61: 0,
            price62: 0,
            price63: 0,
            price64: 0,

            pr_checked5: 0,
            pr_checked6: 0,
            pr_checked7: 0,
            pr_checked8: 0,
            pr_checked9: 0,
            pr_checked10: 0,
            pr_checked11: 0,
            pr_checked12: 0,
            pr_checked13: 0,
            pr_checked14: 0,
            pr_checked15: 0,
            pr_checked16: 0,
            pr_checked17: 0,
            pr_checked18: 0,
            pr_checked19: 0,
            pr_checked20: 0,
            pr_checked21: 0,
            pr_checked22: 0,
            pr_checked23: 0,

            price: 0,
            additionalPrice: {{ $orders > 0 ? 1.5 : 0 }},
            isAuth: 0,
            isComment: 0,
            isCupon: 0,
            cuponActivated: 0,
            cupon: null,
            placeholder: "KUPONKI",
            continues: 0,
            times: {!! $times->toJson() !!},
            zipCodes: {!! $zipCodes->toJson() !!},
            flag: false,
            zipPrice: 0,


            ulk1: {!! $prices->ulk1 !!},
            ulk2: {!! $prices->ulk2 !!},
            ulk3: {!! $prices->ulk3 !!},
            ulk4: {!! $prices->ulk4 !!},
            sis1: {!! $prices->sis1 !!},
            sis2: {!! $prices->sis2 !!},
            sis3: {!! $prices->sis3 !!},
            mol1: {!! $prices->mol1 !!},
            mol2: {!! $prices->mol2 !!},
            mol3: {!! $prices->mol3 !!},

            ulk1_time: {!! $prices->ulk1_time !!},
            ulk2_time: {!! $prices->ulk2_time !!},
            ulk3_time: {!! $prices->ulk3_time !!},
            ulk4_time: {!! $prices->ulk4_time !!},
            sis1_time: {!! $prices->sis1_time !!},
            sis2_time: {!! $prices->sis2_time !!},
            sis3_time: {!! $prices->sis3_time !!},
            mol1_time: {!! $prices->mol1_time !!},
            mol2_time: {!! $prices->mol2_time !!},
            mol3_time: {!! $prices->mol3_time !!},

        
            sis1_1: {!! $prices->sis1_1 !!},
            continuity: [],
        },
        methods: {
            getHours(){
              return Math.round((this.continues/60)*100)/100;
            },
            changePostal(event){
                console.log(event.value)
            },
            checkFlag(timeInterval){
                let flag = false;
                let dayChecked = false;
                let monthChecked = false;
                for(let t in this.times){
                    if(this.times[t].time == timeInterval){
                        flag = true;
                        dayChecked = this.times[t].time_d;
                        monthChecked = this.times[t].time_m;
                    }
                }

                return flag && (this.day == dayChecked && (this.month == monthChecked));

            },
            setModal() {
                if (this.modal) this.modal = false;
                else this.modal = true;
            },
            findPercent() {
                if (this.cuponActivated == 0) {
                    @foreach($cupons as $cupon)
                    if (this.cupon == "{{ $cupon->code }}") {
                        percent = this.price * ({{ $cupon->percent }} / 100);
                        this.price = this.price - percent;
                        this.price = this.price.toFixed();
                        this.cuponActivated = 1;
                        setTimeout(function(){
                            paymentInitialize();
                            checkStatus();
                        }, 200);
                        
                    }
                    
                    @endforeach
                }
            },
            goStep(step) {
                if (this.step > step) {
                    this.step = step;
                }
            },
            showInput(id) {
                if (id == 1) {
                    this.isAuth = 1;
                    this.isComment = 0;
                    this.isCupon = 0;
                }
                if (id == 2) {
                    this.isAuth = 0;
                    this.isComment = 0;
                    this.isCupon = 1;
                }
                if (id == 3) {
                    this.isAuth = 0;
                    this.isComment = 1;
                    this.isCupon = 0;
                }
            },
            dayForward() {
                if (this.month + 1 != 12) {
                    if (this.month == 0 || this.month == 2 || this.month == 4 || this.month == 6 || this.month == 8 || this.momth == 10) {
                        if (this.day + 1 != 32) {
                            this.day += 1;
                        } else {
                            this.day = 1;
                            this.month += 1;
                        }
                    } else {
                        if (this.day + 1 != 31) {
                            this.day += 1;
                        } else {
                            this.day = 1;
                            this.month += 1;
                        }
                    }
                } else {
                    if (this.day + 1 != 32) {
                        this.day += 1;
                    } else {
                        this.day = 1;
                        this.month = 0;
                    }
                }

            },
            dayBack() {
                if ((this.day - 1 >= {!! $day_z !!} && this.month == {!! $month_z !!}) || this.month > {!! $month_z !!})
                    if (this.month - 1 != -1) {
                        if (this.month == 0 || this.month == 2 || this.month == 4 || this.month == 6 || this.month == 8 || this.momth == 10) {
                            if (this.day - 1 != 0) {
                                this.day -= 1;
                            } else {
                                this.day = 31;
                                this.month -= 1;
                            }
                        } else {
                            if (this.day - 1 != 0) {
                                this.day -= 1;
                            } else {
                                this.day = 30;
                                this.month -= 1;
                            }
                        }
                    } else {
                        if (this.day - 1 != 0) {
                            this.day -= 1;
                        } else {
                            this.day = 30;
                            this.month = 11;
                        }
                    }
            },
            selectTime(num, string, isBlock) {
                if (isBlock == 0) {
                    this.isTime = num;
                    this.time = string;
                }
            },
            go() {
                if(this.step > 5){
                    paymentInitialize();
                    checkStatus();
                }
                this.zipPrice = parseFloat(this.$refs.zipPrice.value ?? 0);
                this.adress = document.getElementById("adress__location").value;
                document.getElementById("adress__location_dup").value = document.getElementById("adress__location").value;
                if (this.step + 1 > 7) {
                    this.step = 7;
                    
                } 
                else {
                    if(this.step == 0) {
                        this.step = 1;
                    }
                    if(this.step == 1) {
                        this.step = this.step + 1;
                        step2button_();
                    }
                    
                    else {
                        this.step = this.step + 1;
                    }
                    console.log(this.step);
                    
                }
            },
            back() {
                if (this.step - 1 < 0) {
                    this.step = 1;
                }
                if(this.step == 2) {
                    step2button_back();
                    this.step = 1;
                }
                else {
                    this.step = this.step - 1;
                    
                }
            },
            click() {
                if (this.step == 0)
                    this.step = 1;
                else
                    this.step = 0;
            },
            toBegin() {
                this.step = 0;
            },
            setType(type, step) {
                if (step == 3) {
                    this.orderType = type;
                }

                if (step == 4) {
                    this.carType = type;
                }
            },
            rise(step, sum) {
                if (step == 1) {
                    this.price = 0;
                    this.price1 = 0;
                    this.price1 = this.price1 + sum;
                    this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                }
                if (step == 3) {
                    this.price = 0;
                    this.price3 = 0;
                    this.price3 = this.price1 + sum;
                    this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                }
                if (step == 5) {
                    this.price = 0;
                    this.price5 = 0;
                    this.price5 = this.price5 + sum;
                    this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                }
            },
            checkBoxMethod(box, sum) {
                if (box == 1) {
                    if (this.checked1 == false) {
                        this.price = 0;
                        this.price41 = this.price41 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.price41 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }
                if (box == 2) {
                    if (this.checked2 == false) {
                        this.price = 0;
                        this.price42 = this.price42 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.price42 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }
                if (box == 3) {
                    if (this.checked3 == false) {
                        this.price = 0;
                        this.price43 = this.price43 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.price43 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }
                if (box == 4) {
                    if (this.checked7 == false) {
                        this.price = 0;
                        this.pr_checked5 = this.pr_checked5 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.pr_checked5 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }
                if (box == 5) {
                    if (this.checked7 == false) {
                        this.price = 0;
                        this.pr_checked5 = this.pr_checked5 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.pr_checked5 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }
                if (box == 6) {
                    if (this.checked7 == false) {
                        this.price = 0;
                        this.pr_checked6 = this.pr_checked6 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.pr_checked6 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }
                if (box == 7) {
                    if (this.checked7 == false) {
                        this.price = 0;
                        this.pr_checked7 = this.pr_checked7 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.pr_checked7 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }
                if (box == 8) {
                    if (this.checked7 == false) {
                        this.price = 0;
                        this.pr_checked8 = this.pr_checked8 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.pr_checked8 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }
                if (box == 9) {
                    if (this.checked7 == false) {
                        this.price = 0;
                        this.pr_checked9 = this.pr_checked9 + sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    } else {
                        this.price = 0;
                        this.pr_checked9 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                    }
                }

                // if (box == 5) {
                //     this.price = 0;
                //     this.price44 = this.price44 + sum;
                //     this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice;
                // }
            },
            setActive(step, sum, time) {
                if (step == 1) {
                    if (this.active1 == false) {
                        this.continues+=time;
                        this.active1 = true;
                        this.price61 = sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    } else {
                        this.continues-=time;
                        this.active1 = false;
                        this.price61 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    }
                }
                if (step == 2) {
                    if (this.active2 == false) {
                        this.continues+=time;
                        this.active2 = true;
                        this.price62 = sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    } else {
                        this.continues-=time;
                        this.active2 = false;
                        this.price62 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    }
                }
                if (step == 3) {
                    if (this.active3 == false) {
                        this.continues+=time;
                        this.active3 = true;
                        this.price63 = sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    } else {
                        this.continues-=time;
                        this.active3 = false;
                        this.price63 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    }
                }
                if (step == 4) {
                    if (this.active4 == false) {
                        this.continues+=time;
                        this.active4 = true;
                        this.price64 = sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    } else {
                        this.continues-=time;
                        this.active4 = false;
                        this.price64 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    }
                }
                if (step == 5) {
                    if (this.active54 == false) {
                        this.continues+=time;
                        this.active54 = true;
                        this.price5 = sum;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;


                    } else {
                        this.continues-=time;
                        this.active54 = false;
                        this.price5 = 0;
                        this.price = this.price1 + this.price3 + this.price41 + this.price42 + this.price43 + this.price44 + this.price5 + this.price61 + this.price62 + this.pr_checked5 + this.pr_checked6 + this.pr_checked7 + this.pr_checked8 + this.pr_checked9 + this.price63 + this.price64 + this.additionalPrice + this.zipPrice;
                    }
                }

                this.continuity = [];
                if(this.continues != 0){
                    for(let i=540; i <= 1140; i+=this.continues){
                        let minutes = i;
                        let minute = minutes % 60;
                        let hours = Math.floor(minutes / 60);
                        minute = minute < 10 ? '0' + minute : minute;
                        hours = hours < 10 ? '0' + hours : hours;
                        hours = hours + ':' + minute;

                        let minutes_next = i + this.continues;
                        let minute_next = minutes_next % 60;
                        let hours_next = Math.floor(minutes_next / 60);
                        minute_next = minute_next < 10 ? '0' + minute_next : minute_next;
                        hours_next = hours_next < 10 ? '0' + hours_next : hours_next;
                        hours_next = hours_next + ':' + minute_next;
                        this.continuity.push(hours + '-' + hours_next);
                    }
                }
            }
        },
        mounted() {
            let recaptchaScript = document.createElement('script')
            recaptchaScript.setAttribute('src', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB7ZrPl6qQ98pf1QLbur5DYjf2bFgcMFOs&region=FI&language=en&callback=initialize&libraries=places&v=weekly')
            document.head.appendChild(recaptchaScript)

            // let pay = document.createElement('script')
            // pay.setAttribute('src', 'https://js.stripe.com/v3/')
            // document.head.appendChild(pay)
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
        if (window.location.href.indexOf("succeeded") != -1) {
            loc =  window.location.href;
            if (loc.indexOf('?') > -1) {
                l = loc.split('?');
                z = String(l[1]);
                window.location.replace("https://tilaus.upwash.fi/thanks?" + z);
            }
            
        }

    }
</script>

<script>
    $(document).keypress(
        function (event) {
            if (event.which == '13') {
                event.preventDefault();
            }
        });
</script>


</html>

<script>
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');
    
    burger.addEventListener("click", myFunction);

    function step2button_() {
        // document.querySelector(".step2").classList.add("section_active");
        document.querySelector(".step1").step + 1;
        document.querySelector('#map').classList.add('active');

        document.querySelector(".map-symbol").classList.add('hidden');
        document.querySelector(".map-menu").classList.remove('hidden');

        const al = document.querySelector("#adress__location");
        const nal = al.cloneNode(true);
        nal.readOnly = true;

        al.remove();
        document.querySelector(".map-menu > div:nth-child(2)").innerHTML = "";
        document.querySelector(".map-menu > div:nth-child(2)").appendChild(nal);
    }

    function step2button_back() {
       
        // step2button.click();
        document.querySelector('#map').classList.remove('active');

        document.querySelector(".map-symbol").classList.remove('hidden');
        document.querySelector(".map-menu").classList.add('hidden');

        const al = document.querySelector("#adress__location");
        const nal = al.cloneNode(true);
        nal.readOnly = false;

        al.remove();
        document.querySelector("#unique__google").innerHTML = "";
        document.querySelector(".step1").prepend(nal);
    }
    function myFunction() {
        header.classList.toggle('menu-opened');
    }

    var google__field_btn = document.querySelector('.google__field_btn');

    google__field_btn.addEventListener("click", google__field_btn_f);

    function google__field_btn_f() { 
        if(google__field_btn.classList.contains("active")) {

            google__field_btn = document.querySelector('.google__field_btn');
            google__field_btn.innerHTML = '<div class="row"><input type="text" name="cupon" v-model="cupon" placeholder="Sy??t?? alennuskuponki" id="coupon"></div>';
            google__field_btn.classList.add("coupon__active")
            google__field_btn.classList.remove("active")
        }
        else if(google__field_btn.classList.contains("coupon__active") && coupon.value != "") {
            cross = document.querySelector('.cross');
            cross.addEventListener("click", crossFunction);
            google__field_btn.removeEventListener("click", crossFunction);
            crossFunction();

        }
        
    }
    function crossFunction() {
        google__field_btn.addEventListener("click", google__field_btn_f);
        google__field_btn.innerHTML = "Sy??t?? kampanjakoodi";
        google__field_btn.classList.remove("coupon__active")
            google__field_btn.classList.add("active")
    }



</script>
<script>
    $(document).click(function(event) { 
  var $target = $(event.target);
  if(!$target.closest('.header.menu-opened').length && 
  $('.header.menu-opened').is(":visible")) {
    $('.header.menu-opened').toggleClass('menu-opened');
  }        
});
</script>
<script type='text/javascript'>

window.addEventListener('load', (event) => {
  var visited = localStorage.getItem('visited');
    if (!visited) {
        document.querySelector(".main").style.visibility = "visible";
        localStorage.setItem('visited', true);
    }
    else {
        document.querySelector(".main").remove();
        document.querySelector(".step1").classList.add("section_active");
    }

    document.addEventListener('DOMContentLoaded', (event) => {
      document.querySelector(".preloader").remove();
    });

});

</script>
<script>
    function set5() {
        var google__field_btn = document.querySelector('.google__field_btn');
        google__field_btn.innerHTML = "Sy??t?? autosi rekisterinumero ja -tyyppi";
        google__field_btn.classList.remove("coupon__active");
        google__field_btn.classList.remove("active");
        google__field_btn.classList.add("active_");
        google__field_btn.removeEventListener("click", crossFunction);
        google__field_btn.style.background = "gray";
    }

    

    document.querySelectorAll('.step5-column').forEach(item => {
      item.addEventListener('click', event => {
        document.querySelector('.show_next_4').style.display = "block";
      });
    });

    var s = document.querySelector("#hide_cal");
    var s1_1 = document.querySelector("#sis1_1").value;
    var s1_2 = document.querySelector("#sis1_2").value;
    var s1_3 = document.querySelector("#sis1_3").value;
    var s1_4 = document.querySelector("#sis1_4").value;
    var s1_5 = document.querySelector("#sis1_5").value;
    var s1_6 = document.querySelector("#sis1_6").value;
    var s1_7 = document.querySelector("#sis1_7").value;
    var s1_8 = document.querySelector("#sis1_8").value;
    var s1_9 = document.querySelector("#sis1_9").value;
    var s1_10 = document.querySelector("#sis1_10").value;
    var s1_11 = document.querySelector("#sis1_11").value;
    var s1_12 = document.querySelector("#sis1_12").value;

    var s2_1 = document.querySelector("#sis2_1").value;
    var s2_2 = document.querySelector("#sis2_2").value;
    var s2_3 = document.querySelector("#sis2_3").value;
    var s2_4 = document.querySelector("#sis2_4").value;

    var s3_1 = document.querySelector("#sis3_1").value;
    var s3_2 = document.querySelector("#sis3_2").value;
    var s3_3 = document.querySelector("#sis3_3").value;

    var u1_1 = document.querySelector("#ulk1_1").value;
    var u1_2 = document.querySelector("#ulk1_2").value;
    var u1_3 = document.querySelector("#ulk1_3").value;
    var u1_4 = document.querySelector("#ulk1_4").value;
    var u1_5 = document.querySelector("#ulk1_5").value;
    var u1_6 = document.querySelector("#ulk1_6").value;
    var u1_7 = document.querySelector("#ulk1_7").value;
    var u1_8 = document.querySelector("#ulk1_8").value;
    var u1_9 = document.querySelector("#ulk1_9").value;
    var u1_10 = document.querySelector("#ulk1_10").value;
    var u1_11 = document.querySelector("#ulk1_11").value;

    var u2_1 = document.querySelector("#ulk2_1").value;
    var u2_2 = document.querySelector("#ulk2_2").value;
    var u2_3 = document.querySelector("#ulk2_3").value;
    var u2_4 = document.querySelector("#ulk2_4").value;
    var u2_5 = document.querySelector("#ulk2_5").value;
    var u2_6 = document.querySelector("#ulk2_6").value;
    var u2_7 = document.querySelector("#ulk2_7").value;
    var u2_8 = document.querySelector("#ulk2_8").value;
    var u2_9 = document.querySelector("#ulk2_9").value;
    var u2_10 = document.querySelector("#ulk2_10").value;

    var u3_1 = document.querySelector("#ulk3_1").value;
    var u3_2 = document.querySelector("#ulk3_2").value;
    var u3_3 = document.querySelector("#ulk3_3").value;
    var u3_4 = document.querySelector("#ulk3_4").value;

    var m1_1 = document.querySelector("#mol1_1").value;
    var m1_2 = document.querySelector("#mol1_2").value;
    var m1_3 = document.querySelector("#mol1_3").value;
    var m1_4 = document.querySelector("#mol1_4").value;


    var m2_1 = document.querySelector("#mol2_1").value;
    var m2_2 = document.querySelector("#mol2_2").value;
    var m2_3 = document.querySelector("#mol2_3").value;
    var m2_4 = document.querySelector("#mol2_4").value;

    var m3_1 = document.querySelector("#mol3_1").value;
    var m3_2 = document.querySelector("#mol3_2").value;



    function toggle__visibility(arg) {
        
        
        // if (arg.parentElement.classList.contains('c_c')) {
        //    arg.parentElement.style.border = "2px solid #ff894a";
            
        // }
        // else {
        //     arg.parentElement.style.border = "1px solid #000";
            
        // }

        document.querySelectorAll('.c_c').forEach(item => {
            if(item.classList.contains('c_c')) {
                item.classList.remove('c_c');
                
            }
            // item.click();
        });

        arg.parentElement.classList.toggle('c_c');

        if (arg.id == "sisapesu__1") {
            console.log(true);

            if (s1_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important}";
               
            }
            if (s1_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important}";

            }
            if (s1_3 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";

            }
            if (s1_4 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(7) {display:none !important}";

            }
            if (s1_5 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(8) {display:none !important}";

            }
            if (s1_6 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(9) {display:none !important}";

            }
            if (s1_7 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(10) {display:none !important}";

            }
            if (s1_8 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(11) {display:none !important}";
            }
            if (s1_9 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(12) {display:none !important}";

            }
            if (s1_10 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(13) {display:none !important}";

            }
            if (s1_11 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(14) {display:none !important}";

            }
            if (s1_12 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(15) {display:none !important}";

            }
        }

        if (arg.id == "sisapesu__2") {
            console.log(true);

            if (s2_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important}";
               
            }
            if (s2_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important}";

            }
            if (s2_3 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";

            }
            if (s2_4 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(7) {display:none !important}";

            }
            

        }

        if (arg.id == "sisapesu__3") {
            console.log(true);

            if (s3_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important}";
               
            }
            if (s3_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important}";

            }
            if (s3_3 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";

            }
        }

        if (arg.id == "ulk__active1") {
            console.log(true);

            if (u1_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important}";
               
            }
            if (u1_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important}";

            }
            if (u1_3 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";

            }
            if (u1_4 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(7) {display:none !important}";

            }
            if (u1_5 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(8) {display:none !important}";

            }
            if (u1_6 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(9) {display:none !important}";

            }
            if (u1_7 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(10) {display:none !important}";

            }
            if (u1_8 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(11) {display:none !important}";
            }
            if (u1_9 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(12) {display:none !important}";

            }
            if (u1_10 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(13) {display:none !important}";

            }
            if (u1_11 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(14) {display:none !important}";

            }

        }

        if (arg.id == "ulk__active2") {
            console.log(true);

            if (u2_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important}";
               
            }
            if (u2_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important}";

            }
            if (u2_3 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";

            }
            if (u2_4 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(7) {display:none !important}";

            }
            if (u2_5 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(8) {display:none !important}";

            }
            if (u2_6 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(9) {display:none !important}";

            }
            if (u2_7 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(10) {display:none !important}";

            }
            if (u2_8 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(11) {display:none !important}";
            }
            if (u2_9 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(12) {display:none !important}";

            }
            if (u2_10 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(13) {display:none !important}";

            }

        }

        if (arg.id == "ulk__active3") {
            console.log(true);

            if (u3_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important}";
               
            }
            if (u3_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important}";

            }
            if (u3_3 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";

            }
            if (u3_4 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(7) {display:none !important}";

            }
        }

        if (arg.id == "molemmat__1") {
            console.log(true);

            if (m1_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important}";
               
            }
            if (m1_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important}";

            }
            if (m1_3 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";

            }
            if (m1_4 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(7) {display:none !important}";

            }
            
        }

        if (arg.id == "molemmat__2") {
            console.log(true);

            if (m2_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important}";
               
            }
            if (m2_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important}";

            }
            if (m2_3 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";

            }
            if (m2_4 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(7) {display:none !important}";

            }
            
        }

        if (arg.id == "molemmat__3") {
            console.log(true);
            s.innerHTML += "div.step6-time > div > div > div:nth-child(6) {display:none !important}";
            if (m3_1 == '1') {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(4) {display:none !important};div.step6-time > div > div > div:nth-child(6) {display:none !important}";
               
            }
            if (m3_2 == "1") {
                s.innerHTML += "div.step6-time > div > div > div:nth-child(5) {display:none !important};";

            }
            
        }
        
        setTimeout(function(){
            current_price = parseFloat(document.querySelector("#add-client > div > div.sections > section.step3.section_active > fieldset > div > div > span").innerText);

            if(current_price < 5) {
                document.querySelector('.show_next_4').style.display = "none";
            }
        
            else {
              document.querySelector('.show_next_4').style.display = "block";
            }
        }, 100);
    }
    
    function open3() {
        document.querySelectorAll('.step3 > .step3-container > label.step5-action > input').forEach(item => {
          item.addEventListener('click', event => {
           
            
            
          });
          
          
        });
        
        arg = document.querySelector("#reg");
        
        arg_dup = document.querySelector("#reg_dup");
        if(arg.value != "") {
            document.querySelector('#step5_go').style.display = 'block';
            arg_dup.value = arg.value;
        }
        arg_dup.value = arg.value;
    }
    


    function selection() {
        setTimeout(function(){
            cars = document.querySelector("#cars");
            cars2 = document.querySelector("#cars2");
    
            if (cars.selectedIndex == 0) {
                cars2.options[0].selected = true;
            }
            else if (cars.selectedIndex == 1) {
                cars2.options[1].selected = true;
            }
            else if (cars.selectedIndex == 2) {
                cars2.options[2].selected = true;
            }
            else if (cars.selectedIndex == 3) {
                cars2.options[3].selected = true;
            }
            else if (cars.selectedIndex == 4) {
                cars2.options[4].selected = true;
            }
        }, 100);
        
    }
    
    function open5() {
        setTimeout(function(){
        arg = document.querySelector("#reg");
        
        arg_dup = document.querySelector("#reg_dup");
        if(arg.value != "") {
            document.querySelector('#step5_go').style.display = 'block';
            arg_dup.value = arg.value;
        }
        arg_dup.value = arg.value;
        }, 100);
    }
    open5();
</script>
<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
<script  src="{{ asset('js/script.js') }}"></script>