<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF6600">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Kirjaudu</title>
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
    <a href="/" class="login__back">takaisin</a>
    <div class="auth-container" >
        <form action="{{ route('loginF') }}" method="post">
            @csrf
            <input type="text" name="login" id="" placeholder="Kirjautumistunnus" required>
            <input type="password" name="password" id="" placeholder="Salasana" required>
            <input type="submit" value="KIRJAUDU SISÄÄN">

        </form>
        <a href="{{ url()->previous() }}" class="button">Unohtuiko salasanasi?</a>
        <p>Eikö tiliä löydy? <a href="{{ route('register') }}">Luo tili</a></p>
        @if(Session::has('error'))
        <p style="color:red">{{ session('error') }}</p>
        @endif
    </div>
</body>
</html>
