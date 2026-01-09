<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Conexxion | {{ $title }}</title>
</head>
<body>
    <!-- Header Start -->
    <header>
        @include('partials.navbar')
    </header>
    <!-- Navbar End -->
    @yield('container')
</body>
<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    const navbar = document.getElementById('navbar');

    btn.addEventListener('click', () => {
        const isClosed = menu.classList.contains('scale-y-0');

        if (isClosed) {
            menu.classList.remove("scale-y-0", "opacity-0");
            menu.classList.add("scale-y-100", "opacity-100");

            navbar.classList.add("nav-open");

        } else {
            menu.classList.add("scale-y-0", "opacity-0");
            menu.classList.remove("scale-y-100", "opacity-100");

            navbar.classList.remove("nav-open");
        }
    });
</script>
</html>