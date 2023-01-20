@extends('dashboard.layouts.main')

@section('container')

<a href="/dashboard/lamaran/" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
<a href="/dashboard/lamaran/{{$lamaran->id}}" class="btn btn-warning"><span data-feather="edit"> </span> Edit</a>
<form action="/dashboard/lamaran/{{ $lamaran -> id }}" method="post" class="d-inline">
@method('delete')
@csrf
<button class ="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
</form>
@if ($lamaran->name)
<div style="max-height: 350px; overflow:hidden;">
<a href="localhost:8000/storage/{{$lamaran->file_cv}}"> p</a>
</div>
@else

@endif
<p> {!!$lamaran->email!!}</p>


@endsection