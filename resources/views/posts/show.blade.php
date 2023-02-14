@extends('layouts.app');

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <h1>{{$post->title}}</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-8 offset-2 mb-5">
        <h1>{{$post->body}}</h1>
    </div>

    <div class="col-md-8 offset-2 mb-5">

        {{-- <h2>{{$post->user_id}}</h2>--}}
     
        <h2>{{$data->name}}</h2> 
        {{-- <h2>{{$user->id}}</h2>  --}}
    </div>

   {{-- show button if user is logged in --}}
   @if($post->user_id == $user->id)
    <a href="{{route('home')}}" class="btn btn-secondary">Back To Dashboard</a>
 @endif
</div>
@endsection