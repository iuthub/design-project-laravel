@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/soccer2.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)
                            <a href="/post/create" class="btn btn-primary">Create a post</a>
                            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                                <a href="/category/create" class="btn btn-success">Create a category</a>
                                <a href="/category" class="btn btn-success">All categories</a>
                            @endif
                            <a href="/match/create" class="btn btn-danger">Add match score</a>
                            <a href="/match" class="btn btn-danger">All match scores</a>

                            <hr>
                            <h3>Your posts</h3>
                            @if(count($model)>0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($model as $post)
                                        <tr>
                                            <th>{{$post->title}}</th>
                                            <th><a href="/post/{{$post->id}}/edit" class="btn btn-success">Edit</a></th>
                                            <th>{!! Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-left']) !!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                                {!! Form::close() !!}</th>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <h3>You don't have posts</h3>
                            @endif
                        @else
                                <h3>You don't have ant permission</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
