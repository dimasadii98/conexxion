<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body>
    <!-- Header Start -->
    <header>
        <nav id="navbar" class="bg-gray-200 fixed w-full shadow-sm z-50 overflow-hidden transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center h-18">

                    <!-- Logo -->
                    <a href="" class="flex items-center">
                        <img src="/img/conexxion.png" alt="logo" class="h-15 w-auto">
                    </a>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex space-x-8">
                        <a href="#" class="hover:text-amber-500 font-medium">Home</a>
                        <a href="#" class="hover:text-amber-500 font-medium">Shop</a>
                        <a href="#" class="hover:text-amber-500 font-medium">Blog</a>
                        <a href="#" class="hover:text-amber-500 font-medium">About us</a>
                        <a href="#" class="hover:text-amber-500 font-medium">Contact us</a>
                    </div>

                    <!-- Mobile Button -->
                    <button id="menu-btn" class="md:hidden">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden px-4 py-3 space-y-4 ml-4 origin-top transform scale-y-0 opacity-0 transition-all duration-300 ease-out">
                <a href="#" class="block">Home</a>
                <a href="#" class="block">Shop</a>
                <a href="#" class="block">Blog</a>
                <a href="#" class="block">About us</a>
                <a href="#" class="block">Contact us</a>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->
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