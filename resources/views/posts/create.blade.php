@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create page</h1>
    {!! Form::open(['action' => 'PostsController@store','method'=> 'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{form::label('title','Title')}}
            {{form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{form::label('body','Body')}}
                {{form::textArea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
        </div>
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}   
</div>
@endsection