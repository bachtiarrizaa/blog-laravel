@extends('layouts.main')

@section('container')
    <article>
        <h1 class="mb-5">{{ $post->title }}</h1>
        <p>By. Bachtiar Riza in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/posts">Bach to blog</a>

@endsection

