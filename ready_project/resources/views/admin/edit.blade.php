@extends('layouts.app')

@section('content')
    {{--<div class="col-md-3"></div>--}}
    {{--<div class = "col-md-12">--}}
    <div class="title m-b-md">
        <p>Assign User Role</p>
    </div>
    <div>
        {!! Form::open(['action'=> ['AdminController@update', $model->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $model->name, ['class'=>'', 'placeholder'=>'Title'])}}

        </div>

        <div class="form-group">
            {{Form::label('role_id', 'Role')}}
            <select name="role_id" class="form-control">
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
    {{--</div>--}}




@endsection