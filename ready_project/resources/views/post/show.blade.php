@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
        <div class="col-md-8 col-lg-8 col-sm-10 col-xs-10 normal">
            @if($model->title)
            <h1>{{$model->title}}</h1>
            <img src="/storage/post_img/{{$model->image}}" class="the_image">
            <br>
            <br>
            <p>{!!$model->content!!}</p>
                <p>Date: {{$model->created_at}}</p>
                <hr>
                @if(!Auth::guest())
                    @if(Auth::user()->id == $model->user_id && (Auth::user()->role_id == 1 || Auth::user()->role_id == 2))
                        <span class="pull-left"><a href="/post/{{$model->id}}/edit" class="btn btn-success">Edit</a></span>
                        {!! Form::open(['action'=>['PostController@destroy', $model->id], 'method'=>'POST', 'class'=>'pull-left']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}
                    @endif
                @endif
            @endif

        </div>
        <div class="col-md-1 col-lg-1"></div>
        <div class="col-md-2 col-lg-2 col-sm-1 col-xs-1 new_news">
        </div>
    </div>

    {{--<div class="content">--}}
        {{--<a href="/post" class="btn btn-default">Go back</a>--}}
        {{--<div class="title m-b-md">--}}
            {{--@if($model->title)--}}
                {{--<img style="width:100%" src="/storage/post_img/{{$model->image}}" alt="{{$model->image}}">--}}
                {{--<h3>{{$model->title}}</h3>--}}
                {{--<p>{!!$model->content!!}</p>--}}
                {{--<hr>--}}
                {{--<p>Date: {{$model->created_at}}</p>--}}
                {{--<hr>--}}
                {{--@if(!Auth::guest())--}}
                    {{--@if(Auth::user()->id == $model->user_id && Auth::user()->role_id != 3)--}}
                    {{--<span class="pull-left"><a href="/post/{{$model->id}}/edit" class="btn btn-success">Edit</a></span>--}}
                    {{--{!! Form::open(['action'=>['PostController@destroy', $model->id], 'method'=>'POST', 'class'=>'pull-left']) !!}--}}
                    {{--{{Form::hidden('_method', 'DELETE')}}--}}
                    {{--{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}--}}
                    {{--{!! Form::close() !!}--}}
                        {{--@endif--}}
                    {{--@endif--}}
                {{--@endif--}}

        {{--</div>--}}

    {{--</div>--}}
@endsection