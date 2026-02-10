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

    <div>

    </div>

</div>
@endsection