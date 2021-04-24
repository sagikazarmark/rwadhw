@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3']) }} role="alert">
        {{ $status }}
    </div>
@endif
