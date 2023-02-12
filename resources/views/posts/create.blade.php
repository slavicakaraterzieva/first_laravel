@extends('layouts/app')

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
<h1>Create Post</h1>

{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST'])!!}
@csrf
<div class="col-md-6">
    {{-- title --}}
<div class="form-group mt-5">
    {!! Form::label('title','Enter Title',['class'=>'control-label'])!!}
    <br>
    {!! Form::text('title','',['class'=>'torm-control', 'placeholder'=>'Title...'])!!}
</div>

{{-- body --}}
<div class="form-group mt-5">
    {!! Form::label('body','Enter Text')!!}
    {!! Form::textarea('body',null,['id'=>'myTextarea'],['class'=>'torm-control','rows'=>200, 'cols'=>500 ])!!}
</div>

{{-- button --}}
<div class="form-group mt-5">
    {!! Form::submit('Submit',['class'=>'btn btn-secondary btn-block'])!!}   
</div>

{!! Form::close() !!}
</div>

    </div>
</div>
 
@endsection

@section('scripts')

@endsection