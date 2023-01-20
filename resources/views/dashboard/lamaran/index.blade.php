@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Post Categories</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-6" role="alert">
  {{ session('success')}}
</div>
@endif

<div class="table-responsive col-lg-6">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">no_telpon</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lamaran as $l)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$l->name}}</td>
              <td>{{$l->no_telpon}}</td>
              <td>{{$l->email}}</td>
              <td>
                <a href="/dashboard/lamaran/detail/{{$l->name}}" class="badge bg-info"><span data-feather="eye"></span></a>
                <form action="/dashboard/lamaran/{{ $l->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class ="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>


@endsection
