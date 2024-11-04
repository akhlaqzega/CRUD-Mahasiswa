<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootsrap/css/bootstrap.css') }}">
    <style>
        body {
            background-color: black;
            color: #fff;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 600px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        .btn-custom {
            background-color: #34c759;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #28a745;
        }

        footer {
            margin-top: auto;
            color: #dcdcdc;
            font-size: 0.9rem;
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        .slide-up {
            opacity: 0;
            transform: translateY(30px);
            animation: slideUp 1.5s forwards;
        }

        .logo {
            width: 100px; /* Ukuran logo */
            margin-bottom: 20px; /* Jarak antara logo dan teks */
            animation: bounce 1s infinite; /* Efek animasi */
        }

        @keyframes fadeIn {
            to { opacity: 1; }
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>

<body>

    <div class="container text-center mt-5">
        <img src="" alt="Logo" class="logo fade-in">

        <h1 class="fade-in">Selamat Datang di Aplikasi Kami</h1>
        <p class="slide-up">Kelola data siswa dengan mudah dan fleksibel.</p>
      
        <div class="mt-3">
            <a href="{{ route('login') }}" class="btn btn-custom fade-in">Silahkan Login</a>
            <a href="{{ route('siswa.tampil') }}" class="btn btn-secondary fade-in ml-3">Lanjutkan sebagai Tamu</a>
        </div>
    </div>

    <footer>
        <p>© 2024 Aplikasi Laravel CRUD. All rights reserved.</p>
    </footer>

    <script src="{{ asset('bootsrap/js/bootstrap.bundle.js') }}"></script>
    <script>
        window.addEventListener('load', function () {
            document.querySelectorAll('.fade-in, .slide-up').forEach(el => {
                el.classList.add('animate');
            });
        });
    </script>
    
</body>

</html>
