@props(['title', 'atributts' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="{{ $atributts ?? 'bg-gray-50' }}">

    {{-- Navbar --}}

    <x-sidebar-navigation />

    {{-- Sidebar --}}

    <x-sidebar-navigation />


    {{-- CONTENT --}}
    <div class="lg:ml-64 py-4 relative top-[4.4rem]">
        <span class="text-xl font-semibold p-4 mt-2">{{ $title }}</span>
        {{ $slot }}
    </div>

</body>

</html>
