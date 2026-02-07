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

        <div class="flex flex-col p-24">
            <div class="flex flex-row space-x-8">
                <div class="border-button border-2 p-4 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4">Hubungi Kami</h2>
                    <p class="mb-2"><i class="fas fa-envelope"></i> email@example.com</p>
                    <p class="mb-2"><i class="fab fa-whatsapp"></i> 081234567890</p>
                    <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Address here</p>
                </div>
                <div class="border-button border-2 p-4 rounded-lg shadow-lg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255336.57807739702!2d117.563299!3d0.550695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320bb5683bb00f8b%3A0x41841a8f274ff533!2sSangatta%20Utara%2C%20East%20Kutai%20Regency%2C%20East%20Kalimantan%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1770440097917!5m2!1sen!2sus"
                        width="700" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>