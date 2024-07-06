@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-gray-800 focus:border-lime-500 focus:ring-lime-500 rounded-md shadow-sm']) !!}>
