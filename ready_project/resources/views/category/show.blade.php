@extends('layouts.app')

@section('content')
    <div class="content">
        <br>
        <br>
        <div class="title m-b-md">
            @if($model->title)
                <h3>{{$model->title}}</h3>
                <hr>
                <p>Date: {{$model->created_at}}</p>
                <hr>
                @if(!Auth::guest() && Auth::user()->role_id != 3)
                        <span class="pull-left"><a href="/category/{{$model->id}}/edit" class="btn btn-success">Edit</a></span>
                        {!! Form::open(['action'=>['CategoryController@destroy', $model->id], 'method'=>'POST', 'class'=>'pull-left']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}
                @endif
            @endif

        </div>

    </div>
@endsection