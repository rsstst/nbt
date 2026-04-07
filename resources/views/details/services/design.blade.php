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
                <a href="/services/design/{{ $post['slug'] }} " class="group relative w-64 h-64 overflow-hidden rounded-lg">
                    <img src="https://placehold.co/800x400/3b82f6/ffffff?text={{ $post['imgUrl'] }}"
                        alt="{{ $post['title'] }}"
                        class="h-full w-full object-cover transition duration-300 ease-out motion-safe:group-hover:scale-105">
                    <span
                        class="pointer-events-none absolute inset-x-0 bottom-0 bg-black/60 px-3 py-2 text-sm font-semibold text-white transition duration-300 ease-out motion-safe:translate-y-3 motion-safe:opacity-0 motion-safe:group-hover:translate-y-0 motion-safe:group-hover:opacity-100">
                        {{ $post['title'] }}
                    </span>
                </a>
            @endforeach
        </div>
    @endsection
