<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF6600">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
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
    <div class="auth-container">
        <h1>Tervetuloa Upwashiin!</h1>
        <form action="{{ route('regF') }}" method="post">
            @csrf
            <input type="text" name="login" id="" placeholder="Kirjautumistunnus" required>
            <input type="password" name="password" id="" placeholder="Salasana" required>
            <input type="email" name="email" id="" placeholder="Sähköposti" required>
            <select name="type" id="" required>
                <option disabled selected>Tilityyppi</option>
                <option value="client">Asiakas</option>
                <option value="washer">Pesijä</option>
            </select>
            <input type="submit" value="KIRJAUDU SISÄÄN" style="margin-top: 13px;">
        </form>
        <p>Onko sinulla tili? <a href="{{ route('login') }}">Sisääntulo</a></p>
        @if(Session::has('error'))
        <p style="color:red">{{ session('error') }}</p>
        @endif
    </div>
</body>
</html>
