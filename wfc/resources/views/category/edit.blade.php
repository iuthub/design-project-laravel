@extends('layouts.app')

@section('content')
    {{--<div class="col-md-3"></div>--}}
    {{--<div class = "col-md-12">--}}
    <div class="title m-b-md">
        <p>Edit category</p>
    </div>
    <div>
        {!! Form::open(['action'=> ['CategoryController@update', $model->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $model->title, ['class'=>'', 'placeholder'=>'Title'])}}

        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
    {{--</div>--}}




@endsection