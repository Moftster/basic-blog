<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <p>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </p>

        <p>{!! $post->content !!}</p>

        <a href="/">Go back</a>
    </article>
</x-layout>
