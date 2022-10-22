
@extends('layouts.main')

@section('container')

    
   
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
   

<a class="px-4 text-center btn btn-info btn-dark" href="/blog">Back to Blog</a>
@endsection