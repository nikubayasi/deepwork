@props(['url' => '/', 'active' => false, 'icon' => null, 'mobile' => null])

@if ($mobile)
    <a href="{{ $url }}"
        class="block text-white hover:bg-blue-800 px-3 py-2 text-xs {{ $active ? 'text-green-500 font-bold' : '' }}">
        @if ($icon)
            <i class="fa fa-{{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>
@else
    <a href="{{ $url }}"
        class="text-white hover:underline py-2 text-xs {{ $active ? 'text-green-500 font-bold' : '' }}">
        @if ($icon)
            <i class="fa fa-{{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>
@endif
