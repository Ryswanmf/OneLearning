@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-[1.25rem] h-14 px-5 font-bold text-sm transition-all placeholder:text-secondary/20 placeholder:font-medium']) !!}>
