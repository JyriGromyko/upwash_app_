<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiitos tilauksestasi!</title>
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HKPWBBNHMS"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HKPWBBNHMS');
</script>
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
    <div class="container">
        <div class="container-top">
            <span>Kiitos tilauksestasi!</span>
        </div>
        <div class="container-center">
            <img src="{{ asset('img/monkey.png') }}" alt="">
        </div>
        <div class="container-bottom">
            <span>Käsittelemme sen mahdollisimman pian.</span>
        </div>
    </div>
</body>

<style>
    html,body {
        width: 100%;
        height: 100%;
        overflow-x: hidden;
    }
    .container {
        width: 572px;
        height: 100%;
        background: #FFF;
        margin: 0 auto;
        position: relative;
    }

    .container-center {
        width: 100%;
        height: 678px;
        position: absolute;
        top: 120px;
        overflow: hidden
    }

    .container-center img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .container-top {
        width: 100%;
        text-align: center;
        background: #FFF;
        position: absolute;
        font-size: 42px;
        top: 90px;
        color: #0D0E2C;
        font-family: Impact;
    }

    .container-bottom {
        width: 100%;
        text-align: center;
        background: #FFF;
        position: absolute;
        font-size: 42px;
        bottom: 90px;
        font-weight: 500;
        color: #0D0E2C;
        font-family: Arial;
    }

    .container-center P {
        margin-top: 35px;
        text-align: center;
        font-family: sans-serif;
        font-size: 20px;
    }

    @media screen and (max-width: 550px) {
        .container {
            width: 100%;
            min-height: 800px;
            max-height: 100%;
        }
    }
</style>
</html>
