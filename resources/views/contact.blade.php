<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami</title>
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

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-5">
                <h3 class="text-info mb-4">Informasi Kontak</h3>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong>Alamat:</strong><br>
                        Jl. Malioboro No. 22, Yogyakarta, Indonesia
                    </li>
                    <li class="mb-3">
                        <strong>Telepon:</strong><br>
                        (0274) 456-7890
                    </li>
                    <li class="mb-3">
                        <strong>Email:</strong><br>
                        support@dahargo.co.id
                    </li>
                    <li class="mb-3">
                        <strong>Jam Operasional:</strong><br>
                        Senin - Sabtu: 08.00 - 20.00 WIB
                    </li>
                </ul>
                <p class="mt-4">Ikuti kami di media sosial:</p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-info">dahargo<i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-info">@dahar_Go<i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="text-info">DAHARGO<i class="bi bi-twitter fs-4"></i></a>
                </div>
            </div>

            <div class="col-md-7">
                <h3 class="text-info mb-4">Kirim Pesan</h3>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="bg-secondary p-4 rounded shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-info text-dark fw-bold">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-light py-3 mt-auto border-top border-secondary">
        <p class="mb-0">&copy; 2025 DaharGo. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>