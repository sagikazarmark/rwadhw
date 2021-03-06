@props(['item'])

@php
$classes = (isset($item['route']) && request()->routeIs($item['route']) ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

@if (!empty($item['submenu']))
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>

    @foreach ($item['submenu'] as $submenu_item)
        <x-responsive-nav-link :item="$submenu_item">
            {{ __($submenu_item['title']) }}
        </x-responsive-nav-link>
    @endforeach
@else
    <a {{ $attributes->merge(['class' => $classes]) }} href="{{ route($item['route']) }}">
        {{ $slot }}
    </a>
@endif
