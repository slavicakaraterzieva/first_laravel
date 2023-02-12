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

{{-- <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script> --}}
@endsection