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

    <div class="flex flex-col max-w-7xl w-full px-4 sm:px-8 md:px-12 lg:px-24 py-8 md:py-12 lg:py-16 space-y-12 md:space-y-16">
        <div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12 w-full items-center">
            <img src="https://placehold.co/600x400" alt="NARU BRANCH TECH Studio" class="w-full md:w-1/2 h-auto object-cover rounded-lg shadow-lg">
            <p class="text-sm sm:text-base lg:text-lg text-justify md:text-left flex-1 leading-relaxed">
                NARU BRANCH TECH adalah studio desain dan teknologi yang hadir untuk membantu brand
                membangun identitas digital yang kuat, estetis, dan bermakna. Kami percaya bahwa setiap desain memiliki
                cerita, dan tugas kami adalah menerjemahkan cerita tersebut menjadi bentuk visual yang ikonik dan
                pengalaman digital yang fungsional. Dipadukan dengan kreativitas, riset, dan fondasi teknologi yang
                solid, kami menghadirkan solusi desain dan IT yang bukan hanya indah dipandang, tetapi juga efektif
                dan mudah digunakan. Kami berkomitmen menjadi mitra kolaboratif bagi setiap klien, bekerja secara
                transparan dan mendalam untuk mewujudkan ide menjadi realitas digital yang autentik dan relevan.
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12 w-full items-center">
            <p class="text-sm sm:text-base lg:text-lg text-justify md:text-left flex-1 leading-relaxed order-2 md:order-1">
                NARU BRANCH TECH berkomitmen untuk menghadirkan identitas digital yang ikonik dan
                solusi teknologi yang inovatif sesuai visi kami sebagai studio desain dan teknologi terkemuka. Kami menempatkan
                desain sebagai inti dari setiap proyek, memastikan setiap karya memiliki cerita dan narasi visual
                yang kuat. Dengan mengintegrasikan estetika dan fungsionalitas, kami menciptakan solusi digital yang
                menarik sekaligus mudah digunakan. Misi kami adalah menyediakan layanan teknologi yang mendukung
                proses kreatif, membantu klien mewujudkan ide menjadi hasil digital yang relevan dan bernilai. Kami
                menjadi mitra yang berorientasi pada kolaborasi, membangun hubungan kerja yang transparan serta
                berfokus pada kebutuhan dan tujuan klien. Selain itu, kami selalu mengikuti perkembangan desain dan
                teknologi terbaru agar setiap solusi yang kami hadirkan tetap modern, efektif, dan kompetitif.
            </p>
            <img src="https://placehold.co/600x400" alt="NARU BRANCH TECH Vision" class="w-full md:w-1/2 h-auto object-cover rounded-lg shadow-lg order-1 md:order-2">
        </div>
    </div>
</div>
@endsection