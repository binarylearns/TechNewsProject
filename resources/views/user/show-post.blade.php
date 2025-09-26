@extends('layouts.app')
@section('content')

    <div class="flex justify-center my-8">
        <div
            class="w-[700px] bg-yellow-100 border border-yellow-300 rounded-lg shadow-md hover:bg-yellow-200 transition duration-200 overflow-hidden">

            <!-- Image -->
            <img class="object-cover w-full h-96" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">

            <!-- Content -->
            <div class="p-6 leading-normal">
                <h5 class="mb-2 text-3xl font-bold tracking-tight text-black">{{ $post->title }}</h5>
                <p class="mb-3 font-normal text-gray-900">{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection