<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 

</head>

@php
    $color = 'red';
@endphp

<body class="antialiased">

    <div class="container mx-auto">
        <x-alert :color="$color" class="mb-4">
            {{-- This value will be stored in a component's variable to which you assign a name --}}
            <x-slot name="title">
                Titulo 1
            </x-slot>
            
            Hola mundo!
        </x-alert>
        <x-alert>

            <x-slot name="title">
                Titulo 2
            </x-slot>

            {{-- This will be stored in a component's variable called slot --}}
            lorem ipsum dolor sit amet, consectetur adip
        </x-alert>
    </div>

</body>

</html>
