@php
    $classes = 'p-4 bg-white/10 rounded-xl border border-transparent hover:border-red-800 transition-colors duration-300
group';
@endphp
<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
