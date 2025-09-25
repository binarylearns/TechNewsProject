<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Technewsproject</title>
</head>

<body>

    <nav class=" shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end  h-16">


                <!-- Menu -->
                <div class="hidden md:flex space-x-4 items-center">

                    <a href="{{ route('user.show_user_regitration_form') }}"
                        class="text-black hover:underline px-3 py-2 rounded-md">Register</a>
                    <a href="{{ route('user.show_login_form') }}"
                        class="text-black hover:underline px-3 py-2 rounded-md">Login</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Lower Navbar -->
    <nav class="bg-yellow-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-white font-bold text-4xl p-6">
                        TechnewsProject
                    </a>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex space-x-6">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('category.show', $category->slug) }}" class="text-white font-bold text-2xl">
                                {{ $category->category }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-yellow-700">
            <ul class="px-2 pt-2 pb-3 space-y-1">
                @foreach ($categories as $category)
                    <li>
                        <a href="#"
                            class="block text-white px-3 py-2 rounded-md hover:bg-yellow-600 transition duration-200">
                            {{ $category->category }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
    @yield('content')

    <footer class="bg-yellow-800 text-white py-6 mt-12">
        <div class="container mx-auto px-4 flex justify-center">
            <p class="text-sm text-center">&copy; {{ date('Y') }} Programmed with ❤️ by Binary</p>
        </div>
    </footer>



    <!-- Mobile menu toggle script -->
    <script>
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>




    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>



</body>

</html>