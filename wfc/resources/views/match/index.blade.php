@extends('layouts.app')

@section('content')
    {{--<div class="content">--}}
    <div class="title m-b-md">
        Matches
        @if(count($model)>0)
            @foreach($model as $match)
                <div class="well">
                    <a href="/match/{{$match->id}}">
                        <p><a href="/match/{{$match->id}}">{{$match->first_team}} {{$match->first_score}}-{{$match->second_score}} {{$match->second_team}}</a></p>
                    </a>
                    @if(!Auth::guest() && Auth::user()->role_id != 3)
                        {{--<span class="pull-right"><a href="/match/{{$match->id}}/edit" class="btn btn-success">Edit</a></span>--}}
                        {!! Form::open(['action'=>['MatchController@destroy', $match->id], 'method'=>'POST', 'class'=>'pull-right']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}
                    @endif
                </div>
            @endforeach
            {{$model->links()}}
        @else
            <p>No categories</p>
        @endif
    </div>

    {{--</div>--}}
@endsection