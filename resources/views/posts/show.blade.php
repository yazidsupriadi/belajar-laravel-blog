@extends('layouts.app')
@section('title')
	{{'Posts'}}
@endsection


@section('content')
<br><br><br>
        <a href="/posts" title="" class="btn btn-primary">Go back</a>
        <h1>{{$post->title}} </h1>
        <div>
              {!!$post->body!!}      
        </div>
        <small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" title="" class="btn btn-primary">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
            @endif
        @endif
@endsection