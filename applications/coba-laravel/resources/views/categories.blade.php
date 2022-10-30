
@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>
    
    @foreach ($categories as $category)

        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}" >{{ $category->name }}</h2>
            </li>
        </ul>

    @endforeach
   

<a class="px-4 text-center btn btn-info btn-dark mt-3" href="/blog">Back to Posts</a>
@endsection