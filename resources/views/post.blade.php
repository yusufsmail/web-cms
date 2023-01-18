@extends('header')
@section('container')

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">All Article :</h1>
        <!-- <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p> -->
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($post as $w)
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{ asset('storage/' . $w->image) }}" alt="{{$w->category->name}}" class="bd-placeholder-img card-img-top" width="100%" height="225" >
            <div class="card-body">
              <p class="card-text">{{$w->excerpt}}</p>
              <p>By {{$w->user->name}} in <a href="/categories/{{$w->category->slug}}">{{$w->category->name}}</a> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/content/{{$w->category->slug}}/{{$w->slug}}">selengkapnya </a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div> 
        </div>
        @endforeach
      </div>
    </div>
  </div>

</main>

<div class="container-fluid bg-primary text-secondary p-5 text-center">
    @foreach($post as $w)
      <a class="p-2 link-secondary" href="/categories/{{$w->category->slug}}">{{$w->category->name}}</a> 
    @endforeach
</div>

<!-- <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class=" py-6 px-5">
                
            <h1>{{ $w->title}}</h1>
           
            <p>By {{$w->user->name}} in <a href="/categories/{{$w->category->slug}}">{{$w->category->name}}</a> </p>
            <p class="mb-4">{{$w->excerpt}} <br> <a href="/content/{{$w->category->slug}}/{{$w->slug}}">selengkapnya...</a></p>
            
            </div>
            
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                <h1>{{$w->title}}</h1>
                    <div class="d-flex text-white mb-5">
                    <p class="mb-4">{{$w->exceprt}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
     
    

@endsection