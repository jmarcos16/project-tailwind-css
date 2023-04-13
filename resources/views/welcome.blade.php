<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sidebar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-gray-50">

    {{-- Navbar --}}
    <div class="bg-white text-black h-[4.4rem] w-full border flex items-center justify-between px-5">
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

    <div class="font-sans col-span-3 lg:block fixed z-20 overflow-y-auto right-auto bg-white h-full w-64 border-r">
        <ul class="mx-5 mt-5">

            <x-menu.item route='/dashboard' title="Dashboard" icon='bx-grid-alt' />
            <x-menu.item route='/users' title="Users" icon='bx-user' />

            <x-menu.dropdown title="DropTest" icon='bx-grid'>
                <x-slot:dropitems>
                    <x-menu.drop-items title="Fist Item" route='/first' />
                    <x-menu.drop-items title="Second Item" route='/second' />
                    <x-menu.drop-items title="Third Item" route='/third' />
                </x-slot:dropitems>
            </x-menu.dropdown>



        </ul>
    </div>


</body>

</html>
