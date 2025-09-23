@extends('layouts.adminlayouts')

<div class="min-h-screen flex bg-gray-100">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md p-6 hidden md:block">
        <h2 class="text-xl font-bold mb-6">Dashboard</h2>
        <nav class="space-y-3">
            <a href="#dashboard" class="block px-4 py-2 rounded hover:bg-gray-200 transition">Dashboard</a>
            <a href="#profile" class="block px-4 py-2 rounded hover:bg-gray-200 transition">Profile</a>
            <a href="#favourites" class="block px-4 py-2 rounded hover:bg-gray-200 transition">Favourites</a>
            <a href="#settings" class="block px-4 py-2 rounded hover:bg-gray-200 transition">Settings</a>

            <!-- Logout Button -->
            <form action="{{ route('user.logout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded-lg transition">
                    Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Welcome, User</h1>
            <nav class="space-x-4">
                <a href="#notifications" class="text-gray-600 hover:text-gray-800 transition">Notifications</a>
                <a href="#messages" class="text-gray-600 hover:text-gray-800 transition">Messages</a>
                <a href="#account" class="text-gray-600 hover:text-gray-800 transition">Account</a>
            </nav>
        </header>

        <!-- Content area -->
        <main class="flex-1 p-6">
            <!-- Add your dynamic content here -->
        </main>
    </div>

</div>