@extends('layouts.app')
@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form action="{{ route('admin_login') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
            @csrf
            <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Admin Login</h2>

            <div class="mb-4">
                <input type="email" name="email" placeholder="Enter email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400">
            </div>

            <div class="mb-6">
                <input type="password" name="password" placeholder="Enter your password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400">
            </div>

            <button type="submit"
                class="w-full bg-yellow-400 text-white font-semibold py-2 rounded-md hover:bg-yellow-500 transition duration-300">
                Submit
            </button>
        </form>
    </div>

@endsection