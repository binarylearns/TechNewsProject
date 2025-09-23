@extends('layouts.adminlayouts')

<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-yellow-800 text-white flex flex-col">
        <div class="h-16 flex items-center justify-center font-bold text-xl shadow-md">
            Admin Panel
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="#" class="block px-3 py-2 rounded-md hover:bg-yellow-500">Dashboard</a>
            <a href="#" class="block px-3 py-2 rounded-md hover:bg-yellow-500">Users</a>
            <a href="#" class="block px-3 py-2 rounded-md hover:bg-yellow-500">Settings</a>
            <a href="#" class="block px-3 py-2 rounded-md hover:bg-yellow-500">Reports</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <header class="h-16 bg-white shadow flex items-center justify-between px-6">
            <h1 class="text-lg font-semibold text-gray-700">Welcome to the Dashboard 🎉</h1>

            <div class="flex items-center space-x-4">
                <!-- Username -->
                <span class="text-gray-600 font-medium">Hello, {{ Auth::user()->name ?? 'Admin' }}</span>

                <!-- Keep your original logout form -->
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-yellow-400 text-white font-semibold px-4 py-2 rounded-md hover:bg-yellow-500 transition">
                        LOGOUT
                    </button>
                </form>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 p-6">
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-gray-600">
                    This is your dashboard content area. You can place your widgets, charts, or tables here.
                </p>
            </div>
        </main>
    </div>
</div>