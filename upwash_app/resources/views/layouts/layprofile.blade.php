<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="{{ asset('img/favicon-old.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css" integrity="sha512-GgUcFJ5lgRdt/8m5A0d0qEnsoi8cDoF0d6q+RirBPtL423Qsj5cI9OxQ5hWvPi5jjvTLM/YhaaFuIeWCLi6lyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Henkilökohtainen tili</title>
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
    <header>
        <div class="header-field">
            <span class="Bebas">Tilin asetukset</span>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="panel">
            <div class="panel-left"><a href="{{ route('last') }}"><img src="{{ asset('img/timeOrange.png') }}" alt=""></a></div>
            <div class="panel-center"><a href="{{ route('profile') }}"><img src="{{ asset('img/homeOrange.png') }}" alt=""></a></div>
            <div class="panel-right"><a href="{{ route('/') }}"><img src="{{ asset('img/addOrange.png') }}" alt=""></a></div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.js" integrity="sha512-WHnaxy6FscGMvbIB5EgmjW71v5BCQyz5kQTcZ5iMxann3HczLlBHH5PQk7030XmmK5siar66qzY+EJxKHZTPEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('input[name="start_time"]').timepicker({ 'timeFormat': 'H:i' });
    $('input[name="end_time"]').timepicker({ 'timeFormat': 'H:i' });
</script>
</html>
