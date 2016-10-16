@extends('layout')

@section('title')
    Home Page
@stop

@section('content')
    <div class="row">

        <!-- container for carousel section -->
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
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
                            @for($i=0; $i<count($showingMovies); $i++)
                                @if($i===0)
                                    <div class="item active">
                                        <a href="{{url('/movie/'.$showingMovies[$i]['id'])}}">
                                            <img src="images/carousel/{{$showingMovies[$i]['poster']}}" alt="POSTER" class="img-responsive center-block" style="width: 1140px !important; height: 700px !important;">
                                        </a>
                                        <div class="carousel-caption">{{$showingMovies[$i]['title']}}</div>
                                    </div>
                                @else
                                    <div class="item">
                                        <a href="{{url('/movie/'.$showingMovies[$i]['id'])}}">
                                            <img src="images/carousel/{{$showingMovies[$i]['poster']}}" alt="POSTER" class="img-responsive center-block" style="width: 1140px !important; height: 700px !important;">
                                        </a>
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
            </div>

        </div>

        <br/><br/>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading dark-bg">
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
                                    <a href="{{url('/movie/'.$movie['id'])}}">
                                        <img src="images/gallery/{{$movie['poster']}}" class="img-responsive1 center-block" alt="POST" height="400" style="width: 100% !important;"/>
                                    </a>
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
                                        <a href="{{url('/movie/'.$movie['id'])}}">
                                            <img src="images/gallery/{{$movie['poster']}}" class="img-responsive1 center-block" alt="POST" height="400" style="width: 100% !important;"/>
                                        </a>
                                        <div class="btn-group btn-group-raised center-block">
                                            <a class="btn btn-warning btn-raised col-md-6" href="{{url('/movie/'.$movie['id'])}}">View</a>
                                            <form action="{{url('/wishlist')}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="movie_id" value="{{$movie['id']}}"/>
                                                <input type="submit" class="btn btn-info btn-raised col-md-6" value="Wish List">
                                            </form>
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


