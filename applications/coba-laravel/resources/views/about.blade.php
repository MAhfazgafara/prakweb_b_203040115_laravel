@extends('layouts.main')

@section('container')
<h1 class="text-center"><strong>About the Author</strong></h1>
<div class="container px-4 text-center">
    <div class="row gx-5">
      <div class="col">
       <div class="p-3 border bg-light">
            <h3>{{ $name }}</h3>
            <p>{{ $email }}</p>
            <img src="img/{{ $image }}" alt="{{ $name }}" width="150" class="img-thumbnail rounded-circle">
            <p class="mt-2">{{ $description }}</p>
       </div>
    </div>
</div>
<a class="container px-4 text-center btn btn-info btn-dark mt-3" href="/">Back to Home</a>
@endsection
