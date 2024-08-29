@props(['route' => 'blog.show', 'post'])


<x-card>
    <x-card-body>
        <h2 class="h6">
            <a href="{{ route($route, $post->id) }}">
                {{ $post->title }}
            </a>
        </h2>
        <p>
            {{ $post->content }}
        </p>

        <div class="small-text-muted">
            {{ $post->published_at->format('d.m.Y H:i:s') }}
        </div>
    </x-card-body>
</x-card>
