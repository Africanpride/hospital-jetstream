@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-base-200 text-primary focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50  shadow-sm']) !!}>
