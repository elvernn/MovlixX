<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />
    <style>
        body {
            background-color: #0D253F; /* Warna biru tua */
            color: white;
            margin-top: 20px; /* Tambahkan margin di bagian atas */
            margin-bottom: 20px; /* Tambahkan margin di bagian bawah */
        }

        .movlix-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            font-weight: bold;
            opacity: 0.8;
        }

        .btn-transparent {
            background-color: transparent;
            border: 1px solid white;
            color: white;
        }

        footer {
            background-color: #0D253F; /* Warna biru tua untuk latar belakang footer */
            color: white;
            padding: 20px 0; /* Tambahkan padding di atas dan bawah footer */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container text-center">
            <a class="navbar-brand" href="#">Movlix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('films.index') }}">Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Live</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Anime</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="text-center">
        <hr>
        <p>&copy; Movlix by Kelompok 5 Ayo Nonton Anime</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
