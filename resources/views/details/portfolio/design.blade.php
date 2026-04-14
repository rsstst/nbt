@extends('layout.layout')

<head>
    <title>{{ $title }}</title>
</head>

@section('content')
<div class="flex flex-col justify-center items-center w-full px-4 sm:px-6 lg:px-8 py-8 overflow-hidden">
    <div class="text-center mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold">{{ $title }}
            <span class="block h-1 bg-button mt-2 mx-auto"></span>
        </h1>
    </div>



        <div class="flex flex-row flex-wrap items-center gap-4 justify-center border-button border-2 rounded-lg p-8">
            @foreach ($posts as $post)
                <div class="bg-primary rounded-lg shadow-md overflow-hidden group relative">
                    <img src="https://placehold.co/400x300" alt="Project 1" class="w-full h-48 object-cover">
                    <a href="/portfolio/design/{{ $post['slug'] }}" class="absolute inset-0 block">
                        <div
                            class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        </div>
                        <div
                            class="absolute inset-0 p-4 flex flex-col justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <h3 class="text-xl font-semibold mb-2 text-white">{{ $post['title'] }}</h3>
                            <p class="text-gray-200">{{ $post['description'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endsection
