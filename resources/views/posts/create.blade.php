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
    {!! Form::text('title','',['class'=>'torm-control', 'placeholder'=>'Title...'])!!}
</div>

{{-- body --}}
<div class="form-group mt-5">
    {!! Form::label('body','Enter Text',['class'=>'control-label'])!!}
    {!! Form::text('body','',['class'=>'torm-control', 'placeholder'=>'Paragraph...'])!!}
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