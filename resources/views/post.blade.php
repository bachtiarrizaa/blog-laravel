@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        {{-- <h5>{{ $post["author"] }}</h5> --}}
        {!! $post->body !!}
    </article>

    <a href="/posts">Bach to blog</a>
@endsection

{{-- Post::create([
    'title' => 'Judul Ketioga',
    'slug' => 'judu_Ketioga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus pariatur doloremque corporis!',
    'body' => '
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus pariatur doloremque corporis!</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo vero reprehenderit itaque totam aperiam hic error vitae pariatur rerum, fugit optio amet sint accusamus eligendi ullam dolor dolorum veniam. Laudantium autem sapiente non harum debitis sint deserunt nam veritatis, atque totam quidem iure, voluptatem dolores quos enim magni nesciunt delectus. Praesentium, necessitatibus quasi molestias ipsa blanditiis labore nihil dolore illum enim nemo similique quia. Incidunt, in? Cumque inventore neque hic at! Eligendi distinctio officiis enim possimus, perferendis accusamus facilis ipsam quam nobis ut, veniam cupiditate. Tempora necessitatibus doloremque quae repellendus temporibus minus eius ad voluptatum aspernatur mollitia tempore quia harum totam architecto eaque, neque ex, fugit aliquam, aut maiores? Ducimus magnam aperiam minima vero quasi inventore iure numquam expedita assumenda?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aliquid blanditiis laudantium eveniet possimus et, nostrum quas veritatis numquam deserunt fuga animi voluptate accusamus cumque cum non. Cupiditate, autem adipisci.</p>
    '
]) --}}