@extends('layouts.app')

@section('content')
    <div class="content">
        <a href="/post" class="btn btn-default">Go back</a>
        <div class="title m-b-md">
            @if($model->title)
                <img style="width:100%" src="/storage/post_img/{{$model->image}}" alt="{{$model->image}}">
                <h3>{{$model->title}}</h3>
                <p>{!!$model->content!!}</p>
                <hr>
                <p>Date: {{$model->created_at}}</p>
                <hr>
                @if(!Auth::guest())
                    @if(Auth::user()->id == $model->user_id && Auth::user()->role_id != 3)
                    <span class="pull-left"><a href="/post/{{$model->id}}/edit" class="btn btn-success">Edit</a></span>
                    {!! Form::open(['action'=>['PostController@destroy', $model->id], 'method'=>'POST', 'class'=>'pull-left']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!}
                        @endif
                    @endif
                @endif

        </div>

    </div>
@endsection