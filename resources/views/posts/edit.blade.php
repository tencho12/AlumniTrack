@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Post</h1>
    {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data'])!!}
        <div class="form-group">
            {{form::label('title','Title')}}
            {{form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{form::label('body','Body')}}
            {{form::textArea('body',$post->body,['id'=>'article-ckeditor', 'class'=>'form-control','placeholder'=>'Body'])}}
        </div>
        {{form::hidden('_method','PUT')}}
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!!Form::close() !!}
</div>
@endsection