@extends('layout')

@section('title')
    Home Page
@stop

@section('content')
    <div class="row">

        <!-- container for carousel section -->
        <div class="container" width="75%">

            <!-- start carousel section -->
            <div id="moive-carousel" class="carousel slide" data-ride="carousel">
                <!-- indicators -->
                <ol class="carousel-indicators">
                    {{--<li data-target="#moive-carousel" data-slide-to="0" class="active"></li>--}}
                    {{--<li data-target="#moive-carousel" data-slide-to="1"></li>--}}
                    {{--<li data-target="#moive-carousel" data-slide-to="2"></li>--}}
                    {{--<li data-target="#moive-carousel" data-slide-to="3"></li>--}}
                    {{--<li data-target="#moive-carousel" data-slide-to="4"></li>--}}
                    {{--<li data-target="#moive-carousel" data-slide-to="5"></li>--}}
                    {{--<li data-target="#moive-carousel" data-slide-to="6"></li>--}}
                    @for($i=0; $i<count($showingMovies); $i++)
                        @if($i===0)
                            <li data-target="#moive-carousel" data-slide-to="{{$i}}" class="active"></li>
                        @else
                            <li data-target="#moive-carousel" data-slide-to="{{$i}}"></li>
                        @endif
                    @endfor
                </ol>
                <!-- wrapper for sliders -->
                <div class="carousel-inner" role="listbox">
                    {{--<div class="item active">--}}
                        {{--<img src="images/carousel/deepwater_horizon.jpg" alt="deepwater_horizon_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">--}}
                        {{--<div class="carousel-caption">Deepwater Horizon</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/carousel/kevin_hart_what_now.jpg" alt="kevin_hart_what_now_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">--}}
                        {{--<div class="carousel-caption">Kevin Hart What Now</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/carousel/max_steel.jpg" alt="max_steel_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">--}}
                        {{--<div class="carousel-caption">Max Steel</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/carousel/passage_to_mars.jpg" alt="passage_to_mars_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">--}}
                        {{--<div class="carousel-caption">Passage To Mars</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/carousel/priceless.jpg" alt="priceless_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">--}}
                        {{--<div class="carousel-caption">Priceless</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/carousel/assassin_creed.jpg" alt="assassin_creed_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">--}}
                        {{--<div class="carousel-caption">Assassin Creed</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/carousel/the_huntsman_winter's_war.jpg" alt="the_huntsman_winter's_war_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">--}}
                        {{--<div class="carousel-caption">The Huntsman Winter's War</div>--}}
                    {{--</div>--}}
                    @for($i=0; $i<count($showingMovies); $i++)
                        @if($i===0)
                            <div class="item active">
                                <img src="images/carousel/{{$showingMovies[$i]['poster']}}" alt="POSTER" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                                <div class="carousel-caption">{{$showingMovies[$i]['title']}}</div>
                            </div>
                        @else
                            <div class="item">
                                <img src="images/carousel/{{$showingMovies[$i]['poster']}}" alt="POSTER" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                                <div class="carousel-caption">{{$showingMovies[$i]['title']}}</div>
                            </div>
                        @endif
                    @endfor
                </div>
                <!-- left and right controls -->
                <a class="left carousel-control" href="#moive-carousel" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#moive-carousel" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <!-- container for "movie categories" section -->
        <div class="container">

            <!-- tab -->
            {{--<ul class="nav nav-tabs tab-info">--}}
                {{--<li class="active">--}}
                    {{--<a data-toggle="tab" href="#showing">Showing</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a data-toggle="tab" href="#comingSoon">Coming Soon</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            <!-- tab contents -->
            {{--<div class="tab-content">--}}
                {{--<!-- tab1: Showing -->--}}
                {{--<div id="showing" class="tab-pane fade in active">--}}
                    {{--<h3>Showing Now</h3>--}}
                    {{--<!-- movie 1 -->--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="row" >--}}
                            {{--<img src="images/gallery/deepwater_horizon.jpg" alt="deepwater_horizon" class="img-responsive center-block"  width="75%">--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--</br>--}}
                            {{--<p>Title:</p>--}}
                            {{--<P>Description</P>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- movie 2 -->--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="row">--}}
                            {{--<img src="images/gallery/kevin_hart_what_now.jpg" alt="kevin_hart_what_now" class="img-responsive center-block" width="75%">--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--</br>--}}
                            {{--<p>Title:</p>--}}
                            {{--<P>Description</P>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- movie 3 -->--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="row">--}}
                            {{--<img src="images/gallery/max_steel.jpg" alt="max_steel" class="img-responsive center-block" width="75%">--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--</br>--}}
                            {{--<p>Title:</p>--}}
                            {{--<P>Description</P>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- movie 4 -->--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="row">--}}
                            {{--<img src="images/gallery/passage_to_mars.jpg" alt="passage_to_mars" class="img-responsive center-block" width="75%">--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--</br>--}}
                            {{--<p>Title:</p>--}}
                            {{--<P>Description</P>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- tab2: Coming Soon -->--}}
                {{--<div id="comingSoon" class="tab-pane fade">--}}
                    {{--<h3>Coming Soon</h3>--}}
                    {{--<!-- movie 5 -->--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="row">--}}
                            {{--<img src="images/gallery/priceless.jpg" alt="priceless" class="img-responsive center-block" width="75%">--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--</br>--}}
                            {{--<p>Title:</p>--}}
                            {{--<P>Description</P>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- movie 6 -->--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="row">--}}
                            {{--<img src="images/gallery/assassin_creed.jpg" alt="assassin_creed" class="img-responsive center-block" width="75%">--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--</br>--}}
                            {{--<p>Title:</p>--}}
                            {{--<P>Description</P>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- movie 7 -->--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="row">--}}
                            {{--<img src="images/gallery/the_huntsman_winter's_war.jpg" alt="the_huntsman_winter's_war" class="img-responsive center-block" width="75%">--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--</br>--}}
                            {{--<p>Title:</p>--}}
                            {{--<P>Description</P>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>

        <br/><br/>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #3e3f3a">
                    <div class="btn-group btn-group-raised">
                        <button class="btn btn-warning col-sm-6" id="nowShowingBtn">Now Showing</button>
                        <button class="btn btn-warning col-sm-6" id="commingSoonBtn">Comming Soon</button>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="nowShowingMovies">
                        @foreach($showingMovies as $k=>$movie)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <img src="images/gallery/{{$movie['poster']}}" class="img-responsive1 center-block" alt="POST" height="400" style="width: 100% !important;"/>
                                    <div class="btn-group btn-group-raised center-block">
                                        <a class="btn btn-warning btn-raised col-md-6" href="{{url('/movie/'.$movie['id'])}}">View</a>
                                        <a class="btn btn-info btn-raised col-md-6" href="{{url('/movie/'.$movie['id'].'/book')}}">Book Ticket</a>
                                    </div>
                                    <br/><br/>
                                    <h4>{{$movie['title']}}</h4>
                                    <p class="text-muted">{{$movie['rate']}} | {{$movie['date_showing']}}</p>
                                    <p>{{$movie['genre']}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div id="commingSoonMovies">
                        @foreach($commingSoonMovies as $k=>$movie)
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <img src="images/gallery/{{$movie['poster']}}" class="img-responsive1 center-block" alt="POST" height="400" style="width: 100% !important;"/>
                                        <div class="btn-group btn-group-raised center-block">
                                            <a class="btn btn-warning btn-raised col-md-6">Wish List</a>
                                            <a class="btn btn-info btn-raised col-md-6" href="{{url('/movie/'.$movie['id'].'/book')}}">Book Ticket</a>
                                        </div>
                                        <br><br>
                                        <h4>{{$movie['title']}}</h4>
                                        <p class="text-muted">{{$movie['rate']}} | {{$movie['date_showing']}}</p>
                                        <p>{{$movie['genre']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!--end gallery panel-->
        </div><!--end gallery container-->

    </div>

@stop


