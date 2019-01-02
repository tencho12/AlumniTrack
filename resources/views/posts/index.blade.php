@extends('layouts.app')

@section('content')
<div class="container">
    @if(count($posts) >0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->User->name }}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
            <p> There is No Post</p>
    @endif
</div>
@endsection
