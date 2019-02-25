@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <a class="btn btn-primary" href="/posts/create">Create Post</a></ul>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Blog post</h3>
                        @if(count($posts) > 0)
                           <table>
                                
                                <tr>
                                    <th>Title</th>
                                    <th>Activity</th>

                                </tr>
                                <tr>
                                    
                                @foreach($posts as $post)
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" title="" class="btn btn-primary">Edit</a></td>
                                <td>   {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                </td>
                                    
                                @endforeach
                            
                                </tr>
                        </table>
                        @else
                            <h1>You have no post</h1>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
