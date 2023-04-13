@props(['title', 'icon', 'dropitems'])

<li class="dropdown my-2">
    <div class="flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl cursor-pointer">
        <i class='bx {{ $icon }} text-2xl mr-2'></i>
        <span>{{ $title }}</span>
        <i class='bx bx-chevron-down text-2xl ml-auto'></i>
    </div>

    <ul class="hidden">
        {{ $dropitems }}
    </ul>
</li>
