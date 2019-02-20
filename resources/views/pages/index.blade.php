@extends('layouts.app')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="jumbotron text-center">
        
        <h1> {{$title}}</h1>
        <p>INi mading pembelajaran ,sering sering datang yaaa..</p>
        <p><a href="/login" class="btn btn-info btn-lg" title="">Login</a>  <a href="/register" title="" class="btn btn-lg btn-primary">Register</a></p>
    </div>
@endsection