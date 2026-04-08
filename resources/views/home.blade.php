<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>

<body>
    @include('layout.navbar')
    <div>

        {{-- CTO / Banner / Carousel --}}
        <section
            class="relative w-full h-screen bg-linear-to-r from-[--color-primary] to-[--color-secondary] flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 right-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 max-w-4xl mx-auto px-6 text-center text-white">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight text-button">
                    Naru Branch Tech
                </h1>
                <p class="text-lg md:text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                    Akar Teknologi - Cabang Solusi
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#"
                        class="px-8 py-3 bg-transparent border-2 border-white font-semibold rounded-lg hover:text-link-hover transition-colors">
                        Desain & Kreatif
                    </a>
                    <a href="#"
                        class="px-8 py-3 bg-transparent border-2 border-white font-semibold rounded-lg  hover:text-link-hover transition-colors">
                        Web & IT
                    </a>
                </div>
            </div>
        </section>

        {{-- Portfolio --}}
        <section class="py-16 bg-secondary">
            <div class="max-w-6xl mx-auto px-8 text-center">
                <h2 class="text-3xl font-bold mb-8 text-center">Portfolio Kami</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-left">
                    <!-- Portfolio Item -->
                    <div class="bg-primary rounded-lg shadow-md overflow-hidden group relative">
                        <img src="https://placehold.co/400x300" alt="Project 1" class="w-full h-48 object-cover">
                        <a href="#" class="absolute inset-0 block">
                            <div
                                class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                            <div
                                class="absolute inset-0 p-4 flex flex-col justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <h3 class="text-xl font-semibold mb-2 text-white">Proyek A</h3>
                                <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam,
                                    ea?</p>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="bg-primary rounded-lg shadow-md overflow-hidden group relative">
                        <img src="https://placehold.co/400x300" alt="Project 2" class="w-full h-48 object-cover">
                        <a href="#" class="absolute inset-0 block">
                            <div
                                class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                            <div
                                class="absolute inset-0 p-4 flex flex-col justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <h3 class="text-xl font-semibold mb-2 text-white">Proyek B</h3>
                                <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam,
                                    ea?</p>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="bg-primary rounded-lg shadow-md overflow-hidden group relative">
                        <img src="https://placehold.co/400x300" alt="Project 3" class="w-full h-48 object-cover">
                        <a href="#" class="absolute inset-0 block">
                            <div
                                class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                            <div
                                class="absolute inset-0 p-4 flex flex-col justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <h3 class="text-xl font-semibold mb-2 text-white">Proyek C</h3>
                                <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam,
                                    ea?</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="/portfolio"
                        class="px-8 py-3 bg-transparent border-2 border-white font-semibold rounded-lg hover:text-link-hover transition-colors">
                        Lihat Semua
                    </a>
                </div>
            </div>
        </section>

        {{-- Services --}}

        {{-- About --}}

        {{-- Contact --}}
    </div>
</body>

</html>
