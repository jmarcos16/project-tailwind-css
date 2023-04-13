@props(['route', 'title'])

<li>
    <a href="{{ $route }}"
        class=" flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl pl-10">
        {{-- <i class='text-2xl bx bx-user mr-2'></i --}}
        <span>{{ $title }}</span>
    </a>
</li>
