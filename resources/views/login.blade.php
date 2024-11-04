<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootsrap/css/bootstrap.css') }}">
    <style>
        /* Background gradient animation with soft colors */
        body {
            background: linear-gradient(135deg, #fe89c3e0, #66f5ff);
            background-size: 200% 200%;
            animation: gradientAnimation 8s ease infinite;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #343a40;
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
            border-radius: 15px;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
        }

        .card h2 {
            font-weight: bold;
            color: #343a40;
            margin-bottom: 1rem;
        }

        /* Button styling */
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Text styling */
        .text-muted {
            color: #6c757d;
        }

        /* Form control focus effect */
        .form-control {
            transition: box-shadow 0.3s ease;
            border-radius: 8px;
        }

        .form-control:focus {
            box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.5);
            border-color: #007bff;
        }

        /* Responsive layout for mobile */
        @media (max-width: 576px) {
            .card {
                width: 100%;
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="text-center mb-4">
            <h2>Login Aplikasi</h2>
            <p class="text-muted">Silakan masuk dengan akun Anda</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>

                            @if (session('gagal'))
                                <p class="text-danger mt-2">{{ session('gagal') }}</p>
                            @endif

                            <div class="text-center mt-3">
                                <small>Belum punya akun? <a href="{{ route('registrasi.tampil') }}">Daftar
                                        disini</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
