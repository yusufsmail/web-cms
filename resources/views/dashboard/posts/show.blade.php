@extends('dashboard.layouts.main')

@section('container')

<a href="/dashboard/posts/" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
<a href="" class="btn btn-warning"><span data-feather="edit"> </span> Edit</a>
<a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

<p> {!!$post->body!!}</p>


@endsection