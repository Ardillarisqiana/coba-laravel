
@extends('layout.main')

@section('container') 
    <h1 class="mb-5">Halaman Blog Posts</h1>

    @foreach ($posts as $post) 
    <article>
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>By. Sandhika Galih in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        <!-- <h5>By: {{ $post["author"] }}</h5> -->
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach

@endsection


