<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <p>{!! $post->content !!}</p>

        <a href="/">Go back</a>
    </article>
</x-layout>
