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

        <div class="flex flex-col justify-center items-center">
            <div>
                <div>
                    <h1>IT</h1>
                    <a href="">Company Profile</a>
                    <a href="">E-Commerce</a>
                </div>
                <div>

                </div>
            </div>

            <div>
                <div>
                    <h1>Design</h1>
                    <a href="">Desain Grafis</a>
                    <a href="">Editing Foto & Video</a>
                    <a href="">Ilustrasi</a>
                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
@endsection