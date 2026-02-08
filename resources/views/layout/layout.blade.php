<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="overflow-x-hidden">

    @include('layout.navbar')
    
    @yield('content')

</body>
</html>