@extends('layouts.app')
@section('content')





    {{-- Example: If you want to show related posts/products --}}

    @foreach ($category->posts as $post)


        <div class="flex justify-center my-8">
            <a href="#" class="flex flex-col md:flex-row items-center bg-yellow-100 border border-yellow-300 rounded-lg shadow-md 
                                           w-[700px] h-[250px] hover:bg-yellow-200 transition duration-200 overflow-hidden">

                <!-- Image -->
                <img class="object-cover w-full md:w-48 h-full md:h-full md:rounded-l-lg"
                    src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">

                <!-- Content -->
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">{{ $post->title }}</h5>
                    <p class="mb-3 font-normal text-gray-900">{{ Str::limit($post->content, 150) }}</p>
                </div>
            </a>
        </div>





    @endforeach

@endsection