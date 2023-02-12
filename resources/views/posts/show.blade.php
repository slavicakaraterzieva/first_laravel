@extends('layouts.app');

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <h1>{{$post->title}}</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-8 offset-2">
        <h1>{{$post->body}}</h1>
    </div>
    <a href="{{route('home')}}" class="btn btn-secondary">Back To Dashboard</a>
</div>
@endsection