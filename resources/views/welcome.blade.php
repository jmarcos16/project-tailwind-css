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

            <li>
                <a href="/users"
                    class=" flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl">
                    <i class='text-2xl bx bx-user mr-2'></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="dropdown ">
                <div
                    class="flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl cursor-pointer">
                    <i class='bx bx-chevron-down-square text-2xl mr-2'></i>
                    <span>Dropdown</span>
                    <i class='bx bx-chevron-down text-2xl ml-auto'></i>
                </div>

                <ul class="hidden">
                    <li>
                        <a href="/users"
                            class=" flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl pl-10">
                            {{-- <i class='text-2xl bx bx-user mr-2'></i --}}
                            <span>Submenu 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="/users"
                            class=" flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl pl-10">
                            {{-- <i class='text-2xl bx bx-user mr-2'></i --}}
                            <span>Submenu 2</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown ">
                <div
                    class="flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl cursor-pointer">
                    <i class='bx bx-chevron-down-square text-2xl mr-2'></i>
                    <span>Dropdown</span>
                    <i class='bx bx-chevron-down text-2xl ml-auto'></i>
                </div>

                <ul class="hidden">
                    <li>
                        <a href="/users"
                            class=" flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl pl-10">
                            {{-- <i class='text-2xl bx bx-user mr-2'></i --}}
                            <span>Submenu 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="/users"
                            class=" flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl pl-10">
                            {{-- <i class='text-2xl bx bx-user mr-2'></i --}}
                            <span>Submenu 2</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>


</body>

</html>
