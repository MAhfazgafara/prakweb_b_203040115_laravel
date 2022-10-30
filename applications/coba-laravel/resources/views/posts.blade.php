

@extends('layouts.main')

@section('container')

<article class="mb-5">

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">

            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <P>{{ $post->excerpt }} </p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>

        </article>

    @endforeach

<a class="px-4 text-center btn btn-info btn-dark" href="/">Back to Home</a>

@endsection

