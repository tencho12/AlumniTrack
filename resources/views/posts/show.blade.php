@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-default">Back</a>
        <div class="well">
            <h3> {{$post->title}}</h3>
            <p>{!!$post->body!!}</p>
        </div>
        @if(!Auth::guest())
            @if(Auth::user()->student_no ==$post->student_no)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> 
                {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                    {{form::hidden('_method','DELETE')}}
                    {{form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    </div>
@endsection