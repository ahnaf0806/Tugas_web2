<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DaharGo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm fixed-top navbar-custom " id="mainNav">
        <div class="container">
            <h1 class="navbar-brand fs-3 text-info" href="#">DaharGo</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto fs-5">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang</a>
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Hubungi</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid banner">
        <div class="container banner-konten">
            <h1 class="company-name fs-1">DaharGo</h1>
            <p class="tagline fs-1">Makan Zaman Now, Pakai DaharGo!</p>
        </div>
    </div>
    <div class="container pt-3 text-center k text-light">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima iste laudantium asperiores porro.
            Sit eaque minima consectetur, veniam nostrum deleniti?</p>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>