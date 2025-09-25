@extends('adminlayouts.sidebar')
@section('content')



    @if (session('success'))
        <div class="mb-4 p-4 rounded-lg bg-green-100 border border-green-300 text-green-800">
            <h1 class="text-sm font-medium">
                {{ session('success') }}
            </h1>
        </div>
    @endif



    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form action="{{ route('admin.store_post') }}" method="POST" enctype="multipart/form-data"
            class="w-full max-w-md p-6 bg-white shadow-lg rounded-2xl space-y-4">
            @csrf

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter title"
                    class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 text-gray-900">
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                <textarea name="content" id="content" rows="4" placeholder="Enter content"
                    class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 text-gray-900"></textarea>
            </div>

            <!-- Image Upload -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Upload Image</label>
                <input type="file" name="image" id="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 
                                                                                             file:rounded-lg file:border-0 
                                                                                                file:text-sm file:font-semibold 
                                                                                            file:bg-yellow-50 file:text-yellow-600 
                                                                                               hover:file:bg-indigo-100">
            </div>



            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">
                    Category
                </label>
                <select name="category_id" id="category_id"
                    class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 text-gray-900"
                    required>
                    <option value="">-- Select a Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>







            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full bg-yellow-600 text-white rounded-lg py-2 px-4 font-semibold shadow hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Upload
                </button>
            </div>
        </form>
    </div>




@endsection