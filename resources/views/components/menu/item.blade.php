@props(['route' => null, 'title', 'icon', 'submenu' => null])

<li>
    <a href="{{ $route }}"
        class="dropdown flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl">
        <i class='text-2xl bx {{ $icon }} mr-2'></i>
        <span>{{ $title }}</span>
        @if ($submenu)
            <i class='bx bx-chevrorn-down text-3xl ml-auto'></i>
        @endif
    </a>

    @if ($submenu)
        <ul class="hidden drop-items">
            {{ $submenu }}
        </ul>
    @endif
</li>
