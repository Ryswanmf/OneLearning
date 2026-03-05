@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-[10px] font-black text-secondary/40 uppercase tracking-[0.2em] ml-1 mb-1.5']) }}>
    {{ $value ?? $slot }}
</label>
