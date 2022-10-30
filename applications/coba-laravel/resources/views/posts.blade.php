

@extends('layouts.main')

@section('container')

<article class="mb-5">

    @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <P>{{ $post->excerpt }} </p>
    @endforeach
<a class="px-4 text-center btn btn-info btn-dark" href="/">Back to Home</a>
@endsection

