@props(['route', 'title', 'icon'])

<li>
    <a href="{{ $route }}"
        class=" flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl">
        <i class='text-2xl bx {{ $icon }} mr-2'></i>
        <span>{{ $title }}</span>
    </a>
</li>
