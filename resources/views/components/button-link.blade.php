@props([
    'url' => '/',
    'active' => false,
    'icon' => null,
    'bgClass' => 'bg-blue-400',
    'hoverClass' => 'hover:bg-blue-800',
    'textClass' => 'text-white',
    'block' => false,
])
<a href="{{ $url }}"
    class="{{ $bgClass }} {{ $hoverClass }} {{ $textClass }} px-4 py-2 rounded hover:shadow-md hover:text-white transition duration-300 text-xs {{ $block ? 'block' : '' }}">
    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
