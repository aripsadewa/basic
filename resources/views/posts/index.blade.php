<x-app-layout title="Posts">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>All Post</h4>
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            <div>
                                {{ Str::limit($post->body, 100, '.') }}
                            </div>
                            <a href="/posts/{{ $post->slug }}">Read more</a>
                        </div>
                        <div class="card-footer">
                            Published on {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        {{ $posts->links() }}

    </div>
</x-app-layout>
