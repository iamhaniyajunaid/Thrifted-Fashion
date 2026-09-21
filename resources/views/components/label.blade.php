@props(['value'])

<label {{ $attributes->merge(['class' => 'block profile-label font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
