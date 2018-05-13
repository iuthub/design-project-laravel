@extends('layouts.app')

@section('content')
    {{--<div class="content">--}}
    <br>
    <br>
    <div class="title m-b-md">
        Categories Index
        @if(count($model)>0)
            @foreach($model as $category)
                <div class="well">
                    <a href="/category/{{$category->id}}">
                                <p><a href="/category/{{$category->id}}">{{$category->title}}</a></p>
                    </a>

                </div>
            @endforeach
            {{$model->links()}}
        @else
            <p>No categories</p>
        @endif
    </div>

    {{--</div>--}}
@endsection