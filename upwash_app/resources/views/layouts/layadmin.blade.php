<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="{{ asset('img/favicon-old.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.0"></script>
    <title>Admin Hallintapaneeli</title>
</head>
<body>
    <div id="app">

        <header>
            <a href="{{ route('admin') }}">Hallintapaneeliin</a>
            <a href="{{ route('prices') }}">Hinnat</a>
            <a href="{{ route('orders') }}">Tilaukset</a>
            <a href="{{ route('tickets') }}">Tukipyynnöt</a>
            <a href="{{ route('users') }}">Työntekijät</a>
            <a href="{{ route('zip-codes') }}">Postinumerot</a>
            <a href="{{ route('/') }}">Upwashiin</a>
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>

    </div>
</body>
<script>

var app = new Vue({
  el: '#app',
  data: {
    step: 0
  },
  methods: {
    show(id) {
        this.step = id;
    }
  }
})

</script>
</html>
