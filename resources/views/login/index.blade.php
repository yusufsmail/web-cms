@extends('header')
@section('content')
<br>
<br>

    @if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif

<main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    <br>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus require value="{{old ('email')}}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    
  </form>
  <small>Not Registed? <a href="/register">Register Now! </a></small>
</main>
<br>
<br>
<br>

@endsection