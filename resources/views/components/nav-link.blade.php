@props(['active', 'item'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

@if (!empty($item['submenu']))
    <div {{ $attributes->merge(['class' => $classes]) }}>
    <x-dropdown>
        <x-slot name="trigger">
            <button class="flex items-center">
                <div> {{ $slot }} </div>
                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            @foreach($item['submenu'] as $submenu_item)
                @if (empty($submenu_item['requiredRole']) || (!empty(auth()->user()) && in_array(auth()->user()->role, $submenu_item['requiredRole'])))
                    <x-dropdown-link :item="$submenu_item">
                        {{ __($submenu_item['title']) }}
                    </x-dropdown-link>
                @endif
            @endforeach
        </x-slot>
    </x-dropdown>
    </div>
@else
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@endif
