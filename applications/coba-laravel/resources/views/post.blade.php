
@extends('layouts.main')

@section('container')

    
   
 
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

   

<a class="d-block  text-center btn btn-info btn-dark mt-3" href="/blog">Back to Blog</a>
@endsection