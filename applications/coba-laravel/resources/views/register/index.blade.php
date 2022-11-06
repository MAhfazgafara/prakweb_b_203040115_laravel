@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center"><strong>Registration Form</strong></h1>
            <form action="/register" method="post">
                @csrf
                <iframe src="https://lottie.host/?file=82eaa161-1260-4ec3-8a76-05d76f84bc86/n2wa4hZ2Lz.json" style="display:block; margin:auto;" width="250" height="250"></iframe>
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login"><strong>Login</strong></a></small>
        </main> 
    </div>
</div>

@endsection
