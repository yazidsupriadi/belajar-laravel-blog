@extends('layouts.app')
@section('title')
	{{'Posts'}}
@endsection


@section('content')
<br><br><br>
        <h1>Create Post</h1>
        {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
    
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body','',['class'=>'form-control','id'=>'article-ckeditor','placeholder'=>'Body text'])}}
    	</div>
    	 {{Form::submit('submit!',['class'=>'btn btn-primary'])}}
		{!! Form::close() !!}
    		
@endsection