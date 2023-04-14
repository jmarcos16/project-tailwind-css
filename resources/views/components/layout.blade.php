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

    <x-header-navigation />

    {{-- Sidebar --}}

    <x-sidebar-navigation />


    {{-- CONTENT --}}
    <div class="lg:ml-64 py-1 relative top-[3.6rem]">
        <div class="text-xl font-semibold p-4 mt-2 w-full">{{ $title }}</div>
        {{ $slot }}
    </div>

</body>

</html>
