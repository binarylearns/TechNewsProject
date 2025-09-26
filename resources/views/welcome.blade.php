@extends('layouts.app')
@section('content')

    <div class="flex justify-center my-8 space-x-6">
        <!-- Posts Section -->
        <div class="flex flex-col space-y-6">
            @foreach ($posts as $post)
                <a href="{{ route('post.show', $post) }}"
                    class="flex flex-col md:flex-row items-center bg-yellow-100 border border-yellow-300 rounded-lg shadow-md 
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
            @endforeach



        </div>


        <!-- Author Card (only once, outside loop) -->
        <div
            class="w-[250px] h-[320px] bg-white border border-gray-300 rounded-lg shadow-md p-4 flex flex-col items-center text-center">

            <img src="{{ asset('storage/images/author.jpg') }}" alt="Author"
                class="w-32 h-32 rounded-full object-cover mb-3">

            <h3 class="text-lg font-bold">Ishwor Adhikari</h3>
            <p class="text-sm text-gray-600">Hey Guys Whats Up? My name is Ishwor Adhikari and I am Programmer and
                Founder
                of TechNewsProject</p>
            <a href="#" class="mt-3 text-blue-600 hover:underline">View Profile</a>
        </div>




    </div>




@endsection