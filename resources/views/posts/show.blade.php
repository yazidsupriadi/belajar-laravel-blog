@extends('layouts.app')
@section('title')
	{{'Posts'}}
@endsection


@section('content')
<br><br><br>
        <a href="/posts" title="" class="btn btn-primary">Go back</a>
        <h1>{{$post->title}} </h1>
        <div>
              {{$post->body}}      
        </div>
        <small>Written On {{$post->created_at}}</small>
        

@endsection