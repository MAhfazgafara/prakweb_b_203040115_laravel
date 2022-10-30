
@extends('layouts.main')

@section('container')

    
   
    <article>
        <h2>{{ $post->title }}</h2>
        {{-- <h5>{{ $post["author"] }}</h5> --}}
        {!! $post->body !!}
    </article>
   

<a class="px-4 text-center btn btn-info btn-dark mt-3" href="/blog">Back to Blog</a>
@endsection