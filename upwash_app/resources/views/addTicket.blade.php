<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <title>Lähetä tukipyyntö</title>
</head>
<body>
    <div class="auth-container">
        <h1>Kysymys</h1>
        <form action="{{ route('ticketF') }}" method="post">
            @csrf
            <input type="text" name="email" id="" placeholder="Tukipyyntö " value="{{ $data->email }}" required>
            <input type="text" name="theme" id="" placeholder="Aihe" required>
            <textarea name="text" id="" placeholder="Kysymys" required style="padding-left: 20px; padding-right: 20px; height: 140px;"></textarea>
            <input type="submit" value="Lähetä">
        </form>
    </div>
</body>
</html>