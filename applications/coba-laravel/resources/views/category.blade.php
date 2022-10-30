
@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
    
    @foreach ($posts as $post)
        <article>
            <p><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></p>
            <h3>{{ $post->excerpt }}</h3>
        </article>
    @endforeach
   

<a class="px-4 text-center btn btn-info btn-dark mt-3" href="/blog">Back to Posts</a>
@endsection