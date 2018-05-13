@extends('layouts.app')

@section('content')
    {{--<div class="content">--}}
    <div class="title m-b-md">
        Posts Index
        @if(count($model)>0)
            @foreach($model as $post)
                <div class="well">
                    <a href="/post/{{$post->id}}">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">

                            <img style="width:100%" src="/storage/post_img/{{$post->image}}" alt="{{$post->image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <p><a href="/post/{{$post->id}}">{{$post->title}}</a></p>
                            <small>{{$post->created_at}}  {{$post->user->name}}</small>
                        </div>
                    </div>
                    </a>

                </div>
            @endforeach
            {{$model->links()}}
        @else
            <p>No posts</p>
        @endif
    </div>

    {{--</div>--}}
@endsection