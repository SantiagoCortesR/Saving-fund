@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-2 text-md font-semibold leading-5 text-indigo-700 transition bg-indigo-100 rounded-lg cursor-pointer'
            : 'inline-flex items-center px-3 py-2 text-md font-semibold leading-5 text-gray-600 rounded-lg hover:text-indigo-700 hover:bg-indigo-100 hover:rounded-lg focus:bg-indigo-200 focus:text-indigo-700 transition-all duration-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
