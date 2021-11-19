<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('logo')
        <nav class="menu">
            <a href="/favorite">
                <i class="far fa-heart"></i>
                Favoritos
            </a>
            <a href="/setting">
                <i class="far fa-cog"></i>
                Ajustes
            </a>
            <a href="/about">
                <i class="far fa-info-circle"></i>
                Nosotros
            </a>
            <a href="/">
                <i class="far fa-sign-out-alt"></i>
                Salir
            </a>
        </nav>
    </header>
    @yield('content')
</body>
</html>