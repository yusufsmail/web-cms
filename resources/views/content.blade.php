@extends('layoutposts.header')
@section('container')

<main>

  <div class="album py-5 bg-light">
    <div class="container">

      
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{$post->category->name}}" class="bd-placeholder-img card-img-top" width="100%" height="100%" >
            <div class="card-body">
              <p>By {{$post->user->name}} in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> </p>
              <div class="d-flex justify-content-between align-items-center">
                <p><?php echo $post->body ?></p>
              </div>
              <a href="/post"><i class="bi bi-arrow-left-short"></i>Back to All Article </a>
            </div>
          </div> 
        </div><br>
   

</main>


    
     
    

@endsection