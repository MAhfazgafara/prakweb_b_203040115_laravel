
@extends('layouts.main')

@section('container')

    
   
    <article>
        <h1 class="mb-5">{{ $post->title }}</h1>

        <p>By. Ahfaz Gafara in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>
   

<a class="px-4 text-center btn btn-info btn-dark mt-3" href="/blog">Back to Blog</a>
@endsection