@props(['size' => 'base'])
@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';
    if ($size === 'base') {
        $classes .= ' px-4 py-2 text-sm';
    }
    if ($size === 'small') {
        $classes .= ' px-2 py-1 text-xs';
    }
@endphp
<a href="/jobs" class="{{ $classes }}">{{ $slot }}</a>
