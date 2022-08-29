<x-app-layout title="{{ $post->title }}">
    <div class="container">
        <h1>{{ $post->title }}</h1>
        {{ $post->body }}
    </div>
</x-app-layout>
