<x-layout>
    <article>
        <h1>
            <a href="/posts/<?= $post->slug; ?>">
                {{ $post->title; }}
            </a>
        </h1>

        <div>
            {!! $post->body; !!}
        </div>
    </article>

    <a href="/">Go back</a>
</x-layout>
