@extends('layouts.app')

@section('content')
    {{--<div class="col-md-3"></div>--}}
    {{--<div class = "col-md-12">--}}
    <br>
    <br>
    {!! Form::open(['action'=> 'CategoryController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=>'', 'placeholder'=>'Title'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
    {!! Form::close() !!}
    {{--</div>--}}
@endsection