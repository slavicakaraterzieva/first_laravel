@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center offset-1">
    {{-- the header --}}
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mb-5">
        <h1 style="color:gray;">First Laravel Project</h1>
       </div>

    @foreach ($posts as $post)

    <div class="col-md-4 mb-4">
        <div class="card card-secondary" style="width: 18rem; height: 10rem;">
            <div class="card-body">
              <h5 class="card-title"><i>{{$post->title}}</i></h5>
              <div style="width: 100%; height: 4rem; overflow:hidden">
                <p class="card-text">“{{$post->body}}„</p>
              </div>
              <a href="{{route('post.show', $post->id)}}" class="btn btn-dark" style="fixed-bottom;">View Post</a>
            </div>
          </div>
    </div>
   
    @endforeach

  </div>
  {{-- end of row --}}
   
</div>

   {{-- pagination --}}
   <div class="row p-2 mt-5">
    <div class="d-flex justify-content-center">
      {{$posts->links('pagination::bootstrap-4')}}
    </div>
  </div>
@endsection
