@extends('layout')

@section('header')
    <h1>Site Header</h1>
@endsection

@section('content')
    @foreach ($posts as $post)
        <article>
            <h1> 
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            
            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach
@endsection