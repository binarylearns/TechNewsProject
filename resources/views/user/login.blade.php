@extends('layouts.app')
@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-6">
        <form action="{{ route('login.user') }}" method="POST"
            class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md space-y-6">
            @csrf

            <label class="block text-lg font-semibold text-gray-700 mb-2">Login to your account</label>

            <input type="text" placeholder="Enter your email" name="email" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

            <input type="password" placeholder="Enter your password" name="password" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

            <button type="submit"
                class="w-full bg-yellow-800 hover:bg-yellow-700 text-white font-semibold py-3 rounded-lg transition duration-200">
                Submit
            </button>
        </form>
    </div>

@endsection