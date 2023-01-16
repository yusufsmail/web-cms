@extends('header')
@section('container')

<div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class=" py-6 px-5">
            @foreach($posts as $w)
            <h1>{{ $w->title}}</h1>
           
            <p>By {{$w->user->name}} in <a href="/categories/{{$w->category->slug}}">{{$w->category->name}}</a> </p>
            <p class="mb-4">{{$w->excerpt}}</p>
            
            <a href="/post">Back to article</a>
            </div>
            
            <!-- <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                <h1>{{$w->title}}</h1>
                    <div class="d-flex text-white mb-5">
                    <p class="mb-4">{{$w->exceprt}}</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
     @endforeach
    

@endsection