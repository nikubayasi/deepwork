@props(['url' => '/', 'active' => false, 'icon' => null])
<a href="{{ $url }}"
    class="bg-blue-400 text-white hover:bg-blue-700  px-4 py-2 rounded hover:shadow-md hover:text-white transition duration-300 text-xs {{ request()->is('jobs/create') ? 'text-blue-600 font-bold' : '' }}">
    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
