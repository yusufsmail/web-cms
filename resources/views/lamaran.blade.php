@extends('header')
@section('container')
<div class="container-fluid mt-1 px-5 mb-5 align-items-center">
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  
<h1 class="h2">Create New Post</h1>
</div>
<div class="col-lg-8">
   <form method="post" action="/lamaran" enctype="multipart/form-data">
    @csrf
      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name')}}">
        @error('name')
        <div class="invalid-feedback">{{$message}}</div>
        
        @enderror
      </div>
      <div class="mb-3">
        <label for="no_telpon" class="form-label">No. Telpon</label>
        <input type="text" class="form-control @error('no_telpon') is-invalid @enderror" id="no_telpon" name="no_telpon" value="{{ old('no_telpon')}}">
        
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email')}}">
        @error('email')
        <div class="invalid-feedback">{{$message}}</div>
        
        @enderror
      </div>
      <div class="mb-3">
          <label for="file_cv" class="form-label">Post CV</label>
          <img class=" mb-3 col-sm-5">
          <input class="form-control @error('file_cv') is-invalid @enderror" type="file" id="file_cv" name="file_cv">
          @error('file_cv')
          <div class="invalid-feedback">  {{$message}}</div>
          @enderror
      </div>
      <br>

      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

</div>

</div>
@endsection