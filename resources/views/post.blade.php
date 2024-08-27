@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                
                <img src="" alt="{{ $post->category->name }}" class="image-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-3 text-decoration-none">Back to blog</a>
            </div>
        </div>
    </div>



    <article>
        
    </article>

    

@endsection

