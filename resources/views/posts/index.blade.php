@extends('layouts/app')
@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
<h1>List of posts</h1>

@if(count($data)>0)
@foreach($data as $post)

 @if( $post->name == Auth::user()->name)

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Name</th>
      <th scope="col">Body</th>
      <th scope="col">Edit</th>
      <th scope="col">View</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
        <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          <td>{{$post->name}}</td>
          <td>{{$post->body}}</td>
          <td><a href="{{route('post.edit', $post->id)}}" class="btn btn-dark">Edit</a></td>
          <td><a href="{{route('post.show', $post->id)}}" class="btn btn-dark">View</a></td>
          <td>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST'])!!}
@csrf
@method('DELETE')
{{-- {!! Form::hidden('_method','PUT')!!} --}}

{{-- button --}}
<div class="form-group">
{!! Form::submit('Delete',['class'=>'btn btn-dark'])!!}   
</div>

{!! Form::close() !!}
          </td>
        </tr> 

       @endif
       @endforeach
  
        @else  <h1>There are no posts to show yet!</h1>
    @endif
  </tbody>
</table>

 
   <a href="{{route('home')}}" class="btn btn-secondary">Back To Dashboard</a>
      
    </div>
</div>
 
@endsection
