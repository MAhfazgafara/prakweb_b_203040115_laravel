

@extends('layouts.main')

@section('container')

<article class="mb-5">

    @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post['slug'] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>By: {{ $post["author"] }}</h5>
        <P>{{ $post["body"] }} </p>
    @endforeach
<a class="px-4 text-center btn btn-info btn-dark" href="/">Back to Home</a>
@endsection