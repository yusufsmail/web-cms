@extends('dashboard.layouts.main')

@section('container')

<a href="/dashboard/posts/" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
<a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning"><span data-feather="edit"> </span> Edit</a>
<form action="/dashboard/posts/{{ $post -> slug }}" method="post" class="d-inline">
@method('delete')
@csrf
<button class ="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
</form>
@if ($post->image)
<div style="max-height: 350px; overflow:hidden;">
<img src="{{ asset('storage/' . $post->image) }}" alt="{{$post->category->name}}" class="img-fluid mt-3">
</div>
@else

@endif
<p> {!!$post->body!!}</p>


@endsection