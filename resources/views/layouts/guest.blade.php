<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/1_20240212_220236_0000-removebg-preview (1).png') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- Tambahkan di dalam <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    @include('layouts.guestnavigation')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Lingkar Pena Pelajar</h1>
                <p class="lead text-white">Mewujudkan pelajar yang kreatif, inovatif, dan berdaya melalui literasi.</p>
            </div>
        </div>
    </header>
    
    @yield('content')

    <!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Lingkar Pena Pelajar Section -->
            <div class="col-lg-4 mb-3 mb-lg-0">
                <h5 class="font-weight-bold">Lingkar Pena Pelajar</h5>
                <p>Platform literasi yang mendukung pelajar Indonesia untuk berbagi inspirasi dan karya.</p>
            </div>
            <!-- Quick Links Section -->
            <div class="col-lg-4 mb-3 mb-lg-0">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Blog</a></li>
                    <li><a href="#" class="text-white">Tentang Kami</a></li>
                    <li><a href="#" class="text-white">Kontak</a></li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-lg-4 mb-3 mb-lg-0">
                <h5>Ikuti Kami</h5>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="text-center mt-4">
            <p class="mb-0">© 2024 Lingkar Pena Pelajar. All rights reserved.</p>
        </div>
    </div>
</footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>

    @yield('foot')
</body>

</html>
