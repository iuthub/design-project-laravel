@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                            <a href="/home" class="btn btn-primary">To the dashboard</a>

                            <h3>Users</h3>
                            @if(count($model)>0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($model as $user)
                                        <tr>
                                            <th>{{$user->id}}</th>
                                            <th>{{$user->name}}</th>
                                            <th>{{$user->role_id}}</th>
                                            <th><a href="/admin/{{$user->id}}/edit" class="btn btn-success">Edit</a></th>
                                            <th>{!! Form::open(['action'=>['AdminController@destroy', $user->id], 'method'=>'POST', 'class'=>'pull-left']) !!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                                {!! Form::close() !!}</th>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <h3>No Users</h3>
                            @endif
                        @else
                            <h3>You don't have any permission</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
