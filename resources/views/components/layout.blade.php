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
    <div class="fixed bg-white text-black h-[4.4rem] w-full border flex items-center justify-between px-5 z-20">
        <div class="flex items-center m-0 w-3/6">
            {{-- <i class='bx bx-menu text-3xl'></i> --}}
            <a href="#" class="flex items-center ml-5 text-5xl">
                <i class='bx bxl-tailwind-css text-blue-500'></i>
                <span class="text-2xl font-semibold">Theman</span>
            </a>
            <div class="hidden lg:flex ml-10 w-3/6 items-center ">
                <i class='bx bx-search translate-x-9 text-lg text-[#6B7280]'></i>
                <input type="text"
                    class="border-slate-300 placeholder-slate-400 px-10 bg-gray-50 rounded-lg w-4/5 py-2"
                    placeholder="Search">
            </div>
        </div>

        <div>
            LOGIN
        </div>

    </div>

    {{-- Sidebar --}}

    <x-sidebar-navigation />


    {{-- CONTENT --}}
    <div class="lg:ml-64 py-4 relative top-[4.4rem]">
        <span class="text-xl font-semibold p-4 mt-2">{{ $title }}</span>
        {{ $slot }}
    </div>

</body>

</html>
