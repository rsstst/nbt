<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    @include('layout.navbar')

    <div class="flex flex-col justify-center items-center w-screen p-8">
        <div>
            <h1 class="text-4xl font-bold">{{ $title }}
                <span class="block h-1 bg-button mt-2"></span>
            </h1>
        </div>

        <div class="flex flex-col p-24 space-y-16">
            <div class="flex flex-row space-x-8 w-full">
                <img src="https://placehold.co/600x400" alt="">
                <p class="text-justify">NARU BRANCH TECH adalah studio desain dan teknologi yang hadir untuk membantu brand membangun
                    identitas digital yang kuat, estetis, dan bermakna. Kami percaya bahwa setiap desain memiliki
                    cerita, dan tugas kami adalah menerjemahkan cerita tersebut menjadi bentuk visual yang ikonik dan
                    pengalaman digital yang fungsional. Dipadukan dengan kreativitas, riset, dan fondasi teknologi yang
                    solid, kami menghadirkan solusi desain dan IT yang bukan hanya indah dipandang, tetapi juga efektif
                    dan mudah digunakan. Kami berkomitmen menjadi mitra kolaboratif bagi setiap klien, bekerja secara
                    transparan dan mendalam untuk mewujudkan ide menjadi realitas digital yang autentik dan relevan.</p>
            </div>
            <div class="flex flex-row space-x-8 w-full">
                <p class="text-justify">NARU BRANCH TECH berkomitmen untuk menghadirkan identitas digital yang ikonik dan solusi teknologi
                    yang inovatif sesuai visi kami sebagai studio desain dan teknologi terkemuka. Kami menempatkan
                    desain sebagai inti dari setiap proyek, memastikan setiap karya memiliki cerita dan narasi visual
                    yang kuat. Dengan mengintegrasikan estetika dan fungsionalitas, kami menciptakan solusi digital yang
                    menarik sekaligus mudah digunakan. Misi kami adalah menyediakan layanan teknologi yang mendukung
                    proses kreatif, membantu klien mewujudkan ide menjadi hasil digital yang relevan dan bernilai. Kami
                    menjadi mitra yang berorientasi pada kolaborasi, membangun hubungan kerja yang transparan serta
                    berfokus pada kebutuhan dan tujuan klien. Selain itu, kami selalu mengikuti perkembangan desain dan
                    teknologi terbaru agar setiap solusi yang kami hadirkan tetap modern, efektif, dan kompetitif.</p>
                <img src="https://placehold.co/600x400" alt="">
            </div>
        </div>
    </div>
</body>

</html>