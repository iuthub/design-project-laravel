@extends('layouts.app')

@section('content')
    {{--<div class="content">--}}
    <article>

        <div class="content clearfix">
            <!-- clear coloumn -->
            <div class="left_content left"></div>
            <!-- middle coloumn -->
            <div class="middle_content left clearfix">
                <!-- anons coloumn starts here-->
                <div class="anons left">
                    <div class="anons_news">
                        <div class="anons_header">Latest News</div>
                        <div class="anons_content">
                            <!-- Last news about football -->
                            @if(count($model)>0)
                                @foreach($model as $post)
                                    <div class="boxes clearfix">
                                        <div class="box_img left">
                                            <img src="/storage/post_img/{{$post->image}}" class="box_pic">
                                        </div>
                                        <div class="box_content right">
                                            <div class="box_content_header"><a href="/post/{{$post->id}}">{{$post->title}}</a></div>
                                            <div class="box_content_text">{{$post->description}}</div>
                                            <div class="box_content_text">{{$post->user->name}}</div>
                                        </div>
                                    </div>
                                @endforeach
                                {{$model->links()}}
                            @else
                                <p>No posts</p>
                        @endif

                        <!-- end of the latest news -->

                        </div>

                    </div>
                </div>
                <div class="table right ">
                <div class="table_bar grayfon">
                    <div class="table_bar_header">
                        Reluts
                    </div>
                    <div class="first_bar_content">
                        <div class="first_bar_content_1">





            @include('match.table')
                            </div>

                        </div>
                    </div>
                </div>
            <!-- clear coloumn -->
            <div class="right_content right"></div>

        </div>

    </article>

    {{--</div>--}}
@endsection