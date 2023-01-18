@extends('header')
@section('container')
<br>
<br>

<main class="form-signin w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Registration</h1>
    <br>

    <div class="form-floating">
      <input type="text" name="name"class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{old('name')}}">
      <label for="name">Name</label>
      @error('name')
      <div class="invalid-feedback"> 
        {{ $message }}
      </div>
      @enderror
    <div class="form-floating">
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"  id="username" placeholder="Username" required value="{{old('username')}}">
      <label for="name">Username</label>
      @error('username')
      <div class="invalid-feedback"> 
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="email@example" required value="{{old('email')}}">
      <label for="name">Email address</label>
      @error('email')
      <div class="invalid-feedback"> 
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback"> 
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    
  </form>
  <small>Already Registed? <a href="/login">Login </a></small>
</main>
<br>
<br>
<br>

@endsection