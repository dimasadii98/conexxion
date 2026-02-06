        <nav id="navbar" class="bg-gray-200 fixed w-full shadow-sm z-50 overflow-hidden transition-all duration-500">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center h-18">

                    <!-- Logo -->
                    <a href="" class="flex items-center">
                        <img src="/img/conexxion.png" alt="logo" class="h-15 w-auto">
                    </a>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex space-x-8">
                        <a href="{{ route('home') }}"
                            class="font-medium hover:text-amber-500
                            {{ request()->routeIs('home') ? 'text-amber-500' : 'text-gray-700' }}">
                            Home
                        </a>

                        <a href="{{ route('products') }}"
                            class="font-medium hover:text-amber-500
                            {{ request()->routeIs('products') ? 'text-amber-500' : 'text-gray-700' }}">
                            Products
                        </a>
                        
                        <a href="{{ route('blog') }}"
                            class="font-medium hover:text-amber-500
                            {{ request()->routeIs('blog') ? 'text-amber-500' : 'text-gray-700' }}">
                            Blog
                        </a>

                        <a href="{{ route('about') }}"
                            class="font-medium hover:text-amber-500
                            {{ request()->routeIs('about') ? 'text-amber-500' : 'text-gray-700' }}">
                            About us
                        </a>
                        
                        <a href="{{ route('contact') }}"
                            class="font-medium hover:text-amber-500
                            {{ request()->routeIs('contact') ? 'text-amber-500' : 'text-gray-700' }}">
                            Contact us
                        </a>
                    </div>

                    <!-- Mobile Button -->
                    <button id="menu-btn" class="md:hidden p-4">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden px-4 py-3 space-y-4 ml-4 origin-top transform scale-y-0 opacity-0 transition-all duration-500 ease-out">
                <a href="{{ route('home') }}" class="block">Home</a>
                <a href="{{ route('products') }}" class="block">Products</a>
                <a href="{{ route('blog') }}" class="block">Blog</a>
                <a href="{{ route('about') }}" class="block">About us</a>
                <a href="{{ route('contact') }}" class="block">Contact us</a>
            </div>
        </nav>