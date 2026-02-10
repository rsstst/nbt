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

    <div class="flex flex-col w-full max-w-7xl px-4 sm:px-8 md:px-12 lg:px-24 py-8 md:py-12 lg:py-16">
        <div class="flex flex-col lg:flex-row gap-6 md:gap-8">
            <div class="border-button border-2 p-6 md:p-8 rounded-lg shadow-lg w-full lg:w-auto lg:shrink-0">
                <h2 class="text-xl sm:text-2xl font-semibold mb-4">Hubungi Kami</h2>
                <p class="mb-3 text-sm sm:text-base"><i class="fas fa-envelope"></i> email@example.com</p>
                <p class="mb-3 text-sm sm:text-base"><i class="fab fa-whatsapp"></i> 081234567890</p>
                <p class="mb-3 text-sm sm:text-base"><i class="fas fa-map-marker-alt"></i> Address here</p>
            </div>
            <div class="border-button border-2 p-4 md:p-6 rounded-lg shadow-lg w-full">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255336.57807739702!2d117.563299!3d0.550695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320bb5683bb00f8b%3A0x41841a8f274ff533!2sSangatta%20Utara%2C%20East%20Kutai%20Regency%2C%20East%20Kalimantan%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1770440097917!5m2!1sen!2sus"
                    class="w-full h-64 sm:h-80 md:h-96 lg:h-87.5 rounded"
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection