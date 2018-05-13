@extends('layouts.app')

@section('content')
    {{--<div class="col-md-3"></div>--}}
    {{--<div class = "col-md-12">--}}
    <div class="title m-b-md">
        <p>Edit post</p>
    </div>
    <div>
        {!! Form::open(['action'=> ['PostController@update', $model->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $model->title, ['class'=>'', 'placeholder'=>'Title'])}}

        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $model->description, ['class'=>'', 'placeholder'=>'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('content', 'Content')}}
            {{Form::textarea('content', $model->content, ['id'=>'article-ckeditor','class'=>'', 'placeholder'=>'Content'])}}
        </div>
        <div class="form-group">
            {{Form::file('image')}}

        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
    {{--</div>--}}




@endsection