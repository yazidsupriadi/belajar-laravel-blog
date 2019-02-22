@extends('layouts.app')
@section('title')
	{{'Posts'}}
@endsection


@section('content')
<br><br><br>
        <h1> Post</h1>
        <p>Ini halaman Post</p>
        @if(count($posts) > 1)
        	@foreach($posts as $post)
	        	<div class="well">
	        		<h2><a href="/posts/{{$post->id}}" title="">{{$post->title}}</a></h2>
	        		<small>Written on {{$post->created_at}}</small>
	        	</div>
	        @endforeach
	        
        @else
        	<h1>No post found</h1>
        @endif
@endsection