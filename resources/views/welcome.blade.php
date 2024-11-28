<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar Example</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Custom Styling for Navbar */
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Beautiful gradient */
            border-bottom: 2px solid #0056b3;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: 600;
            margin-right: 20px;
            font-size: 16px;
            letter-spacing: 0.5px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
            text-decoration: none;
        }

        .navbar-brand img {
            height: 50px; /* Adjust the size of the logo */
            width: auto;
        }

        .navbar-nav .nav-link.active {
            color: #ffd700;
        }

        /* Apply Now Button */
        .apply-now-btn {
            background-color: #ffd700;
            color: #1a1a1a;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: bold;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .apply-now-btn:hover {
            background-color: #ffcc00;
            color: #1a1a1a;
            transform: scale(1.05);
        }

        /* Phone and Email Styling */
        .contact-info {
            color: #ffffff;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .contact-info i {
            margin-right: 8px;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        /* Styling for the navbar when collapsed on mobile */
        .navbar-collapse {
            text-align: center;
        }

        @media (max-width: 992px) {
            .contact-info {
                display: none;
            }
        }

        .navbar-light .navbar-nav .nav-link {
            color: white;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #ffd700;
        }

        .navbar-light .navbar-brand img {
            max-height: 45px;
        }

        /* Custom Container for Logo */
        .brand-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-container img {
            max-height: 45px;
        }
    </style>
</head>

<body>
    <!-- Top Navbar for Contact Info -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm">
        <div class="container">
            <div class="d-flex justify-content-between w-100">
                <div class="d-flex">
                    <div class="contact-info">
                        <i class="bi bi-telephone"></i> +1 (914) 384-7924
                    </div>
                    <div class="contact-info">
                        <i class="bi bi-envelope"></i> alex@vantagecapgroup.com
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a class="nav-link apply-now-btn" href="{{ route('apply.create') }}">Apply Now</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="{{url('/')}}">
                <div class="brand-container">
                    <img src="{{ asset('storage/logo/logo.jpg') }}" alt="Brand Logo"> <!-- Logo Path from Laravel Storage -->
                </div>
            </a>

            <!-- Hamburger Menu for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Image Section -->
    <div class="container mt-5">
        <img src="{{ asset('storage/logo/backImage.jpg') }}" alt="" class="img-fluid">
        <img src="{{ asset('storage/logo/image_1.png') }}" alt="" class="img-fluid">
    </div>

    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
