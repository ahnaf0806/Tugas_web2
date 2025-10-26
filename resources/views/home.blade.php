<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DaharGo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-dark d-flex flex-column min-vh-100 bg-dark text-light">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm fixed-top navbar-custom border border-secondary flex-grow-1"
        id="mainNav">
        <img src="{{ asset('img/Logo.png')}}" class="logo">
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
    <div class="container-fluid banner text-light text-center">
        <div class="container banner-konten">
        </div>
        <h1 class="company-name h1">DaharGo</h1>
        <p class="tagline fs-4">Makan Zaman Now, Pakai DaharGo!</p>
    </div>

    <footer class="bg-dark text-center text-light py-3 mt-auto border-top border-secondary">
        <p class="mb-0">&copy; 2025 DaharGo. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>