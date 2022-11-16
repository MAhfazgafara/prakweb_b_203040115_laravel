@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <style type="text/css">
    body {
      background-image: url("/img/bg.jpg");
      background-position: unset;
      background-size: 110%;
    }
  </style>
    <div class="col-md-4">
      <main class="form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal text-center"><strong>Please Login</strong></h1>
        <iframe src="https://embed.lottiefiles.com/animation/78126" style="display:block; margin:auto;" width="260" height="260"></iframe>
        <form action="/login" method="post">
          @csrf
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              
              @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register"><strong>Register Now!</strong></a></small>
        </main> 
    </div>
</div>

@endsection
