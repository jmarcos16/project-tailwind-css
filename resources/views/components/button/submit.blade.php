@props(['atributts' => null, 'title', 'icon'])

<button type="submit"
    class="{{ $atributts ?? 'bg-blue-600 text-white' }} hover:brightness-95 p-2 rounded flex items-center mx-1 h-9">
    <i class='bx {{ $icon }} leading-6'></i>
    {{ $title }}
</button>
