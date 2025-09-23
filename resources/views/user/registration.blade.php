@extends('layouts.app')
@section('content')

    <form action="{{ route('register.user') }}" method="POST"
        class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-2xl space-y-4">
        @csrf
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Register User Here</h2>



        <input type="text" name="name" placeholder="Enter name" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">

        <input type="email" name="email" placeholder="Enter Email" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">

        <input type="password" name="password" placeholder="Enter Password" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">

        <input type="password" name="password_confirmation" placeholder="Confirm Password" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">

        <button type="submit"
            class="w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition duration-200 font-medium">
            Submit
        </button>
    </form>



@endsection