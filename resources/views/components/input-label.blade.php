@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-white bg-gray-800']) }}>
    {{ $value ?? $slot }}
</label>
