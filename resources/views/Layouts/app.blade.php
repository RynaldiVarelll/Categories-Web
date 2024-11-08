<!doctype html>
<html lang="{{ str_replace('_', '-',  app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel 11 CRUD Application</title>

    <!-- Fonts and CSS -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* Fade out animation for the notification */
        .fade-out {
            opacity: 0;
            transition: opacity 0.3s ease-out;
        }
    </style>
</head>
<body>

    <div class="container mt-4">
        <!-- Notification message -->
        @if (session('status'))
            <div id="notification" class="alert alert-success bg-green-500 text-black p-4 rounded mb-4" data-aos="fade-in">
                {{ session('status') }}
            </div>
        @endif

        <!-- Content section -->
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS for animations
        AOS.init({
            duration: 800,
        });

        // Set timeout to hide notification after 3 seconds
        setTimeout(() => {
            const notification = document.getElementById('notification');
            if (notification) {
                notification.classList.add('fade-out');
                setTimeout(() => notification.remove(), 500);
            }
        }, 3000);
    </script>
</body>
</html>
