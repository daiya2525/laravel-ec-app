@props([
    'title',
    'content' => '初期値です。',
    'message' => '本文初期値です。'
])

<div {{ $attributes->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2'
])}}>
    <div class="text-white">{{ $title }}</div>
    <div class="text-white">画像</div>
    <div class="text-white">{{ $content }}</div>
    <div class="text-white">{{ $message }}</div>
</div>
