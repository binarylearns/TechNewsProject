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

    <nav class="bg-yellow-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-white font-bold text-xl">TechnewsProject</a>
                </div>

                <!-- Menu -->
                <div class="hidden md:flex space-x-4 items-center">
                    <a href="{{ route('home') }}" class="text-white hover:bg-yellow-500 px-3 py-2 rounded-md">Home</a>
                    <a href="{{ route('admin.login_form') }}"
                        class="text-white hover:bg-yellow-500 px-3 py-2 rounded-md">Admin login</a>
                    <a href="{{ route('user.show_user_regitration_form') }}"
                        class="text-white hover:bg-yellow-500 px-3 py-2 rounded-md">Register User</a>
                    <a href="{{ route('user.show_login_form') }}"
                        class="text-white hover:bg-yellow-500 px-3 py-2 rounded-md">Login User</a>
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

        <!-- Mobile Menu (hidden by default) -->
        <div class="md:hidden hidden" id="mobile-menu">
            <a href="{{ route('home') }}" class="block text-white hover:bg-yellow-500 px-3 py-2 rounded-md">Home</a>
            <a href="#" class="block text-white hover:bg-yellow-500 px-3 py-2 rounded-md">About</a>
            <a href="#" class="block text-white hover:bg-yellow-500 px-3 py-2 rounded-md">Services</a>
            <a href="#" class="block text-white hover:bg-yellow-500 px-3 py-2 rounded-md">Contact</a>
        </div>
    </nav>

    @yield('content')

    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>



</body>

</html>