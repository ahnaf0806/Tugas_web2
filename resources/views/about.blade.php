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
    <div class="container py-5 konten-tentang">
        <div class="mb-5">
            <h2 class="text-info mb-3">Siapa Kami?</h2>
            <p>
                <strong>DaharGo</strong> adalah perusahaan startup teknologi kuliner asal Yogyakarta
                yang berdiri pada tahun <strong>2025</strong>. Kami berfokus pada pengembangan
                platform digital untuk pemesanan makanan dari berbagai restoran lokal dengan layanan cepat dan efisien.
            </p>
            <p>
                Dengan semangat “<em>Makan Zaman Now, Pakai DaharGo!</em>”, kami ingin memudahkan masyarakat Indonesia
                menikmati kuliner favorit tanpa ribet — cukup lewat satu aplikasi.
            </p>
        </div>

        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <img src="{{asset('img/Logo.png')}}" class="img-fluid rounded shadow-sm" alt="Tim DaharGo">
            </div>
            <div class="col-md-6">
                <h3 class="text-info">Visi Kami</h3>
                <p>Menjadi platform kuliner nomor satu di Indonesia yang menghubungkan pelanggan dengan cita rasa
                    terbaik dari seluruh nusantara.</p>

                <h3 class="text-info mt-4">Misi Kami</h3>
                <ul>
                    <li>Mendukung pertumbuhan UMKM kuliner lokal dengan teknologi digital.</li>
                    <li>Memberikan pengalaman pesan makanan yang cepat, aman, dan menyenangkan.</li>
                    <li>Menciptakan lapangan kerja baru melalui kemitraan dengan restoran dan kurir.</li>
                </ul>
            </div>
        </div>

        <!-- Sejarah -->
        <div class="mb-5">
            <h3 class="text-info mb-3">Sejarah Singkat</h3>
            <p>
                DaharGo bermula dari ide tiga sahabat pecinta kuliner yang kesulitan mencari makanan di tengah pandemi.
                Dari masalah itu, lahirlah solusi digital yang kini telah berkembang menjadi platform dengan lebih dari
                <strong>10.000 restoran mitra</strong> dan <strong>500.000 pengguna aktif</strong> di seluruh Indonesia.
            </p>
        </div>

        <!-- Struktur Organisasi -->
        <div class="text-center mb-4">
            <h3 class="text-info mb-4">Struktur Organisasi</h3>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm bg-secondary text-light">
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">CEO</h5>
                        <p class="mb-0">Andra Putra</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm bg-secondary text-light">
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">CTO</h5>
                        <p class="mb-0">Nadia Prameswari</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm bg-secondary text-light">
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">COO</h5>
                        <p class="mb-0">Dimas Wirawan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm bg-secondary text-light">
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">Marketing Manager</h5>
                        <p class="mb-0">Rina Lestari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-light py-3 mt-auto border-top border-secondary">
        <p class="mb-0">&copy; 2025 DaharGo. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>