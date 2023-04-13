@props(['route', 'title'])


<li>
    <a href="{{ $route }}"
        class="flex text-gray-700 hover:text-black items-center p-2 hover:bg-gray-100 rounded-xl">
        <span class="ml-8">{{ $title }}</span>
    </a>
</li>
