@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <h1><i>{{$post->title}}</i></h1>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-8 offset-2 mb-5">
        <h1>“{{$post->body}}„</h1>
    </div>

    <div class="col-md-8 offset-2 mb-5">
        <h2 class="mb-5">Autor: {{$data->name}}</h2>

        
        <a href="{{route('home')}}" class="btn btn-secondary">Back To Dashboard</a>
       
    </div>
</div>
@endsection