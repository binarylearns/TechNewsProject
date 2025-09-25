@extends('adminlayouts.sidebar')
@section('content')


    @if (session('success'))
        <div class="mb-4 p-4 rounded-lg bg-green-100 border border-green-300 text-green-800">
            <h1 class="text-sm font-medium">
                {{ session('success') }}
            </h1>
        </div>
    @endif




    <div class="min-h-screen bg-gray-100 flex items-start justify-center py-10 px-4">
        <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Add Category Form -->
            <div class="bg-white p-6 rounded-2xl shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Add Category</h2>

                <form action="{{ route('admin.store_category') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Category Input -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                        <input type="text" id="category" name="category" placeholder="Enter category" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 outline-none">
                    </div>

                    <!-- Slug Input -->
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                        <input type="text" id="slug" name="slug" placeholder="Enter slug" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-2 bg-yellow-600 text-white font-semibold rounded-lg hover:bg-yellow-700 transition duration-200">
                        Save
                    </button>
                </form>
            </div>

            <!-- Category List -->
            <div class="bg-white p-6 rounded-2xl shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Category List</h2>

                <div class="divide-y divide-gray-200">
                    @foreach ($categories as $category)
                        <div class="flex justify-between items-center py-3">
                            <span class="text-gray-800 font-medium">{{ $category->category }}</span>
                            <div class="flex gap-2">
                                <a href="#"
                                    class="px-3 py-1 bg-green-500 text-white rounded-lg text-sm hover:bg-green-600 transition">Edit</a>
                                <form action="#" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition"
                                        onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>


@endsection