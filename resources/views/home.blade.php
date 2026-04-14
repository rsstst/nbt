@extends('layout.layout')

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @section('content')
        <div>

            {{-- Hero --}}
            <section
                class="relative w-full h-screen bg-linear-to-r from-[--color-primary] to-[--color-secondary] flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
                    <div class="absolute bottom-20 right-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10 w-full max-w-6xl mx-auto px-6 lg:px-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center text-white">
                        <div class="text-center lg:text-left">
                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold mb-6 leading-tight">
                                Tingkatkan bisnismu secara digital
                            </h1>
                            <p class="text-lg md:text-xl mb-8 opacity-90 max-w-2xl mx-auto lg:mx-0">
                                Kami siap membantu memenuhi kebutuhan desain grafis dan pengembangan website anda
                            </p>
                            <div class="flex justify-center lg:justify-start">
                                <a href="#"
                                    class="inline-flex items-center justify-center min-w-40 min-h-11 px-8 py-3 bg-button font-semibold rounded-lg text-black hover:bg-button-hover transition-colors">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>

                        <div class="relative h-80 sm:h-95 lg:h-115">
                            <img src="https://placehold.co/640x800" alt="Creative showcase"
                                class="absolute left-1/2 top-0 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-52 sm:w-64 lg:w-72 h-72 sm:h-80 lg:h-96 object-cover rounded-3xl shadow-2xl border border-white/30">
                            <img src="https://placehold.co/520x680" alt="Tech showcase"
                                class="absolute right-3 sm:right-8 lg:right-0 top-16 lg:top-20 w-44 sm:w-52 lg:w-60 h-60 sm:h-72 lg:h-80 object-cover rounded-3xl shadow-2xl border border-white/30">
                            <img src="https://placehold.co/420x320" alt="Team showcase"
                                class="absolute left-4 sm:left-14 lg:left-16 bottom-0 w-40 sm:w-48 lg:w-56 h-28 sm:h-32 lg:h-36 object-cover rounded-2xl shadow-xl border border-white/30">
                        </div>
                    </div>
                </div>
            </section>

            {{-- Portfolio --}}
            <section class="py-16 bg-secondary">
                <div class="max-w-6xl mx-auto px-8">
                    <h2 class="text-3xl font-bold mb-8">Our Works</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-left">
                        <!-- Portfolio Item -->
                        <div class="bg-primary rounded-lg shadow-md overflow-hidden group relative">
                            <img src="https://placehold.co/400x300" alt="Project 1" class="w-full h-48 object-cover">
                            <a href="#" class="absolute inset-0 block">
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                </div>
                                <div
                                    class="absolute inset-0 p-4 flex flex-col justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Proyek A</h3>
                                    <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Ullam,
                                        ea?</p>
                                </div>
                            </a>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="bg-primary rounded-lg shadow-md overflow-hidden group relative">
                            <img src="https://placehold.co/400x300" alt="Project 2" class="w-full h-48 object-cover">
                            <a href="#" class="absolute inset-0 block">
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                </div>
                                <div
                                    class="absolute inset-0 p-4 flex flex-col justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Proyek B</h3>
                                    <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Ullam,
                                        ea?</p>
                                </div>
                            </a>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="bg-primary rounded-lg shadow-md overflow-hidden group relative">
                            <img src="https://placehold.co/400x300" alt="Project 3" class="w-full h-48 object-cover">
                            <a href="#" class="absolute inset-0 block">
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                </div>
                                <div
                                    class="absolute inset-0 p-4 flex flex-col justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Proyek C</h3>
                                    <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Ullam,
                                        ea?</p>
                                </div>
                            </a>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="bg-primary rounded-lg shadow-md overflow-hidden group relative">
                            <img src="https://placehold.co/400x300" alt="Project 3" class="w-full h-48 object-cover">
                            <a href="#" class="absolute inset-0 block">
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                </div>
                                <div
                                    class="absolute inset-0 p-4 flex flex-col justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Proyek C</h3>
                                    <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Ullam,
                                        ea?</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="flex justify-center">
                            <a href="#"
                                class="inline-flex items-center justify-center min-w-40 min-h-11 px-8 py-3 bg-button hover:bg-button-hover text-black border-2 font-semibold rounded-lg transition-colors">
                                Lihat Semua
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            {{-- Services --}}
            <section class="py-16 bg-secondary">
                <div class="max-w-6xl mx-auto px-8 text-center">
                    <h2 class="text-3xl font-bold mb-8 text-center">Percayakan kebutuhan anda pada kami</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-8 text-left">
                        <!-- Service Item -->
                        <div class="bg-primary rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-semibold mb-2">Desain Grafis</h3>
                            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas,
                                doloremque?</p>
                            <a href=""
                                class="inline-flex items-center justify-center min-w-40 min-h-11 mt-4 px-4 py-2 bg-button hover:bg-button-hover text-black border-2 font-semibold rounded-lg transition-colors w-full sm:w-auto text-center">Selengkapnya</a>
                        </div>
                        <!-- Service Item -->
                        <div class="bg-primary rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-semibold mb-2">Pengembangan Web</h3>
                            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas,
                                doloremque?</p>
                            <a href=""
                                class="inline-flex items-center justify-center min-w-40 min-h-11 mt-4 px-4 py-2 bg-button hover:bg-button-hover text-black border-2 font-semibold rounded-lg transition-colors w-full sm:w-auto text-center">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Maps --}}
            <section class="py-16 bg-secondary ">
                <div class="max-w-6xl mx-auto px-8 text-center">
                    <h2 class="text-3xl font-bold mb-8 text-center">Kunjungi kantor kami</h2>
                    <div class="w-full h-96">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255336.57807739702!2d117.563299!3d0.550695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320bb5683bb00f8b%3A0x41841a8f274ff533!2sSangatta%20Utara%2C%20East%20Kutai%20Regency%2C%20East%20Kalimantan%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1770440097917!5m2!1sen!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
        </div>
    @endsection
</body>

</html>
