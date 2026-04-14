@extends('layout.layout')

@section('content')
    <div class="flex flex-col justify-center items-center w-full px-4 sm:px-6 lg:px-8 py-8 overflow-hidden">
        <div class="text-center mb-8">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold">{{ $title }}
                <span class="block h-1 bg-button mt-2 mx-auto"></span>
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 w-4/5">
            @foreach ($posts as $p)
                @php
                    $benefits = data_get($p, 'benefits', []);
                    $benefits = is_array($benefits) ? $benefits : [];
                @endphp
                <article class="border border-button rounded-2xl p-6 flex flex-col h-full">
                    <h2 class=" min-h-16 w-full uppercase leading-tight text-2xl font-bold">
                        {{ data_get($p, 'title') }}
                    </h2>
                    <p class="sm:mt-0 mt-4 min-h-16 text-justify">{{ data_get($p, 'description') }}</p>

                    <div class="h-px bg-button my-4"></div>

                    <h3 class="min-h-8 font-bold">Benefit</h3>

                    <ul class="space-y-4 mb-8">
                        @foreach ($benefits as $benefit)
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-button mt-1"></i>
                                <span>{{ $benefit }}</span>
                            </li>
                        @endforeach
                        </ul>

                        <a href=""
                            class="mt-auto inline-flex items-center justify-center min-w-40 min-h-11 px-4 py-2 bg-button hover:bg-button-hover text-black border-2 font-semibold rounded-lg transition-colors w-full sm:w-auto text-center">Hubungi Kami</a>
                </article>
            @endforeach
        </div>
    </div>
@endsection