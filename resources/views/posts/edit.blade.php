@extends('layouts/app')

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
<h1>Edit Post - {{$post->title}}</h1>

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST'])!!}
@csrf
@method('PUT')
{{-- {!! Form::hidden('method','PUT')!!} --}}
<div class="col-md-6">
    {{-- title --}}
<div class="form-group mt-5">
    {!! Form::label('title','Enter Title',['class'=>'control-label'])!!}
    <br>
    {!! Form::text('title',$post->title,['class'=>'torm-control', 'placeholder'=>''])!!}
</div>

{{-- body --}}
<div class="form-group mt-5">
    {!! Form::label('body','Enter Text')!!}
    {!! Form::textarea('body',$post->body,['id'=>'myTextarea'],['class'=>'torm-control','rows'=>6, 'cols'=>20, 'placeholder'=>'' ])!!}
</div>

{{-- button --}}
<div class="form-group mt-5">
    {!! Form::submit('Edit Post',['class'=>'btn btn-secondary btn-block'])!!}   
</div>

{!! Form::close() !!}
</div>

    </div>
</div>
 
@endsection

@section('scripts')

@endsection