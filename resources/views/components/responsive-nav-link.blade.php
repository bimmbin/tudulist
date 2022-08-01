@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-orangee text-base font-medium text-orangee bg-lOrangee focus:outline-none focus:text-orangee focus:bg-indigo-100 focus:border-orangee transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-400 hover:text-gray-50 hover:bg-lOrangee hover:border-orangee focus:outline-none focus:text-gray-50 focus:bg-lOrangee  focus:border-orange-400 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
