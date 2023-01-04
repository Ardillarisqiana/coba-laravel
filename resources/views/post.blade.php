@extends('layout.main')

@section('container')
    <!-- <article> -->
        <!-- <h2>{{ $post["title"] }}</h2> -->
        <h1 class="mb-5">{{ $post->title }}</h1>
        <!-- <h5>{{ $post["author"] }}</h5> -->
        <p>By. Ardilla Risqiana in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!} 
    <!-- </article> -->

    <a href="/posts">Back to posts</a>

    @endsection

    

   

        