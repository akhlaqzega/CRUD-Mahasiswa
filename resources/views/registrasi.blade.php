<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootsrap/css/bootstrap.css') }}">
    <style>
        /* Background gradient animation */
        body {
            background: linear-gradient(120deg, #a1fde9, #c2e9fb);
            background-size: 200% 200%;
            animation: gradientAnimation 6s ease infinite;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Gradient animation keyframes */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Card styling */
        .card {
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.9);
        }

        h2 {
            font-weight: bold;
            color: #343a40;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Form control focus effect */
        .form-control {
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.5);
            border-color: #007bff;
        }

        /* Responsive layout for mobile */
        @media (max-width: 576px) {
            .card {
                padding: 20px;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="text-center mb-4">
            <h2>Registrasi Aplikasi</h2>
            <p class="text-muted">Silakan isi formulir untuk mendaftar</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <div class="card-body">
                        <form action="{{ route('registrasi.submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </form>

                        <div class="mt-3 text-center">
                            <p>Sudah punya akun? <a href="{{ route('login') }}">Silakan Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootsrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
