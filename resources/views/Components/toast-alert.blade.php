@props(['type', 'message'])

@php
    $typeClasses = [
        'success' => 'bg-green-100 text-green-500 border border-green-500',
        'info' => 'bg-blue-50 text-blue-500 border border-blue-500',
        'error' => 'bg-red-100 text-red-500 border border-red-500',
    ];
    $iconClasses = [
        'success' => 'ph-fill ph-check-circle',
        'info' => 'ph-fill ph-info',
        'error' => 'ph-fill ph-warning-circle',
    ];
@endphp

<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="toast-alert fixed top-5 right-5 z-50 p-4 mb-6 {{ $typeClasses[$type] }} flex items-center justify-between rounded-xl border-solid border border-{{$type}}-500" role="alert">
    <div class="flex items-center gap-3">
        <i class="{{ $iconClasses[$type] }} text-3xl "></i>
        <div>{{ $message }}</div>
    </div>
    <button @click="show = false" class="text-xl font-bold">&times;</button>
</div>
