@extends('layouts.app')

@section('content')
    {{--<div class="col-md-3"></div>--}}
    {{--<div class = "col-md-12">--}}

    {!! Form::open(['action'=> 'MatchController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('first_team', 'First team')}}
        {{Form::text('first_team', '', ['class'=>'', 'placeholder'=>'First team'])}}
    </div>
    <div class="form-group">
        {{Form::label('first_score', 'First team score')}}
        {{Form::number('first_score', '', ['class'=>'', 'placeholder'=>'First team score'])}}
    </div>
    <div class="form-group">
        {{Form::label('second_score', 'Second team score')}}
        {{Form::number('second_score', '', ['class'=>'', 'placeholder'=>'Second team score'])}}
    </div>
    <div class="form-group">
        {{Form::label('second_team', 'Second team')}}
        {{Form::text('second_team', '', ['class'=>'', 'placeholder'=>'Second team'])}}
    </div>

    <div class="form-group">
        {{Form::label('match_date', 'Match date')}}
        {{Form::date('match_date', \Carbon\Carbon::now())}}
    </div>


    {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
    {!! Form::close() !!}
    {{--</div>--}}
@endsection