    @extends('layouts.app')

    @section('content')
        <div class="row">
            <div class="col-md-1 col-lg-1 col-xl-1 col-sm-2 col-xs-2"></div>
            <div class="col-md-8 col-lg-8 col-xs-8 col-sm-8 col-xl-8">
                <div class="top_news">
                    <a class="link_top_news" href="#">
                        @foreach($last as $l)
                        <h3 ><span class="header">{{$l->title}}</span></h3>
                        <h4 class="description">{{$l->description}}</h4>
                            @endforeach
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-8 col-lg-8">
                <div class="row">
                    <div class="the_card">
                        <a class="news" href="#">
                        @foreach($random as $r)
                            <!-- <div class="overlay"></div> --><img alt="" src="/storage/post_img/{{$r->image}}" class="break_news_photo">
                            <div class="desc_header">
                                <h5 class="desc">{{$r->title}}</h5>
                                <span class="desc">{{$r->description}}</span>
                            </div>
                                @endforeach
                        </a>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    @foreach($model as $post)
                    <div class="col-md-4 col-sm-6 col-xs-6 col-lg-3">
                        <div class="card the_cs">
                            <a class="news" href="#">
                                <div>
                                    <img class="break_news_photo" src="/storage/post_img/{{$post->image}}">
                                    <div class="card-block desc_break_news">
                                        <h5 class="desc">{{$post->title}}</h5>
                                        <a class="short_desc" href="#">Description <br> desc</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="col-md-4 col-sm-6 col-xs-6 col-lg-3">--}}
                        {{--<div class="card the_cs">--}}
                            {{--<a class="news" href="#">--}}
                                {{--<div>--}}
                                    {{--<img class="break_news_photo" src="images/random.jpg">--}}
                                    {{--<div class="card-block desc_break_news">--}}
                                        {{--<h5 class="desc">Header of the photo</h5>--}}
                                        {{--<a class="short_desc" href="#">Description <br> desc</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4 col-sm-6 col-xs-6 col-lg-3">--}}
                        {{--<div class="card the_cs">--}}
                            {{--<a class="news" href="#">--}}
                                {{--<div>--}}
                                    {{--<img class="break_news_photo" src="images/random.jpg">--}}
                                    {{--<div class="card-block desc_break_news">--}}
                                        {{--<h5 class="desc">Header of the photo</h5>--}}
                                        {{--<a class="short_desc" href="#">Description <br> desc</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4 col-sm-6 col-xs-6 col-lg-3">--}}
                        {{--<div class="card the_cs">--}}
                            {{--<a class="news" href="#">--}}
                                {{--<div>--}}
                                    {{--<img class="break_news_photo" src="images/random.jpg">--}}
                                    {{--<div class="card-block desc_break_news">--}}
                                        {{--<h5 class="desc">Header of the photo</h5>--}}
                                        {{--<a class="short_desc" href="#">Description <br> desc</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    {{--<div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">--}}
                    {{--<div class="card the_cs">--}}
                    {{--<a class="news" href="#">--}}
                    {{--<div>--}}
                    {{--<img class="break_news_photo" src="images/random.jpg">--}}
                    {{--<div class="card-block desc_break_news">--}}
                    {{--<h5 class="desc">Header of the photo</h5>--}}
                    {{--<a class="short_desc" href="#">Description <br> desc</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-1 col-xs-3 col-sm-3 col-lg-1"></div>--}}
                    {{--<div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">--}}
                    {{--<div class="card the_cs">--}}
                    {{--<a class="news" href="#">--}}
                    {{--<div>--}}
                    {{--<img class="break_news_photo" src="images/random.jpg">--}}
                    {{--<div class="card-block desc_break_news">--}}
                    {{--<h5 class="desc">Header of the photo</h5>--}}
                    {{--<a class="short_desc" href="#">Description <br> desc</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-1 col-xs-3 col-sm-3 col-lg-1"></div>--}}
                    {{--<div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">--}}
                    {{--<div class="card the_cs">--}}
                    {{--<a class="news" href="#">--}}
                    {{--<div>--}}
                    {{--<img class="break_news_photo" src="images/random.jpg">--}}
                    {{--<div class="card-block desc_break_news">--}}
                    {{--<h5 class="desc">Header of <thead></thead> photo</h5>--}}
                    {{--<a class="short_desc" href="#">Description <br> desc</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-1 col-xs-3 col-sm-3 col-lg-1"></div>--}}
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2 new_news">
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
        </div>
        {{--<div class="title m-b-md">--}}
            {{--{{$title}}--}}

        {{--</div>--}}
    @endsection
