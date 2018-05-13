@extends('layouts.app')

@section('content')
    <br>
    <br>
        {{--<div class="col-md-3"></div>--}}
        {{--<div class = "col-md-12">--}}

        {!! Form::open(['action'=> 'PostController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'', 'placeholder'=>'Title'])}}

        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', '', ['class'=>'', 'placeholder'=>'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('content', 'Content')}}
            {{Form::textarea('content', '', ['id'=>'article-ckeditor','class'=>'', 'placeholder'=>'Content'])}}
        </div>

        <div class="form-group">
            {{Form::label('category_id', 'Category')}}
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
            </select>
            {{--{{Form::select('category_id', $categories->id, null, ['placeholder' => 'Choose category'])}}--}}
        </div>

        <div class="form-group">
            {{Form::file('image')}}

        </div>

            {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
    {{--</div>--}}
@endsection