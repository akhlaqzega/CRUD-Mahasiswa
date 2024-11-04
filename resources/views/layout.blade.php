<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('bootsrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMa3gKXb1L0iQ3P6Q4ey5qfYy3I0A3+R7h4Pp+" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f4; /* Warna latar belakang yang lembut */
            font-family: Arial, sans-serif; /* Pemanggilan font yang benar */
        }
        .navbar-brand {
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            width: 40px; /* Ukuran logo */
            margin-right: 10px; /* Jarak antara logo dan teks */
        }
        footer {
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            background-color: #343a40; /* Warna latar belakang footer */
            color: white; /* Warna teks footer */
            border-radius: 0 0 10px 10px; /* Membuat sudut footer lebih halus */
        }
        .pagination .page-link {
    padding: 5px 10px;
    font-size: 0.875rem; /* Mengatur ukuran teks lebih kecil */
}
.pagination .page-item.active .page-link {
    background-color: #007bff; /* Warna sesuai dengan tema */
    border-color: #007bff;

    
}
.fade-in {
    opacity: 0; /* Awal transparan */
    transform: translateY(30px); /* Sedikit turun */
    transition: opacity 0.5s ease-out, transform 0.5s ease-out; /* Animasi */
}

.fade-in.show {
    opacity: 3; /* Menjadi terlihat */
    transform: translateY(0); /* Kembali ke posisi asli */
}

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid mt-3 fade-in">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('logo.png') }}" alt="Logo"> <!-- Ganti dengan path logo Anda -->
           Aplikasi
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/siswa"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/features"><i class="fas fa-star"></i> Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            @if (Auth::check())
                <span class="navbar-text text-white me-2">{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="post" style="display:inline;">
                    @csrf
                    <button class="btn btn-danger btn-sm">Logout</button>
                </form>
            @else
                <a class="btn btn-outline-light me-2" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                <a class="btn btn-outline-light" href="/registrasi"><i class="fas fa-user-plus"></i> Register</a>
            @endif
        </div>
    </div>
</nav>

<div class="container">
    <div class="mt-3">
        @yield('konten')
    </div>
</div>

<footer>
    <p>&copy; 2024 Aplikasi CRUD Siswa - All Rights Reserved</p>
</footer>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.fade-in');
        elements.forEach((el) => {
            el.classList.add('show'); // Tambah class show setelah halaman dimuat
        });
    });
</script>



<script src="{{ asset('bootsrap/js/bootstrap.bundle.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
