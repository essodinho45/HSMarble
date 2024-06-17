@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm read-only:bg-gray-100 read-only:cursor-not-allowed read-only:focus:border-gray-300 read-only:focus:ring-0',
]) !!}>
