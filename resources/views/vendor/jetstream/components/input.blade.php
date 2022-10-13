@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-indigo-500 border-2 focus:border-indigo-600 focus:ring focus:ring-indigo-600 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
